<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Sale;
use App\Type;
use App\Email;
use App\Address;
use Darryldecode\Cart\Cart;
use Shetabit\Payment\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Payment\Exceptions\InvalidPaymentException;


class ShopController extends Controller
{
  public function sale()
  {
      $carts = \Cart::getContent();
      return view('main.Shop.index',compact('carts'));
  }

  public function sale2($id)
  {
      $carts = \Cart::getContent();
      $sale1=Sale::findOrFail($id);
      $type = $sale1->types()->paginate(2);
      return view('main.shop.sale',compact('type','sale1','carts'));
  }

  public function detail($id)
  {
    $carts = \Cart::getContent();
    $type=Type::findOrFail($id);
    return view('main.shop.detail',compact('type','carts'));
  }

  public function search(Request $request)
  {
    $carts = \Cart::getContent();
    $type =Type::where('name','LIKE',"%{$request->search}%")->paginate(6);

    if (count($type) != 0)
    {
        return view('main.shop.search',compact('type','carts'));

    }
    else{

        return back()->with('search','موردی یافت نشد');
    }
  }

  public function email_insert(Request $request)
  {

      $this->validate($request, [
      'name' => 'required|email||unique:emails'
    ]);

   $contact= new Email();
    $contact->name = $request->name;
    $contact->save();
    return back()->with('email', 'ایمیل شما با موفقیت ثبت شد');

  }

  public function cart()
  {
    $c = \Cart::getSubTotal();
    $carts = \Cart::getContent();
    return view('main.shop.cart',compact('carts','c'));
  }

  public function cart_add($id,Request $request)
  {
     $type=Type::findOrFail($id);
     \Cart::add($type->id, $type->name, $type->price,$request->number , array('picture' => $type->picture));
     return back()->with('add_cart','محصول به سبد خرید اضافه شد');
  }

  public function delete_cart($id,Request $request)
  {
     \Cart::remove($id);
     return back();
  }

  public function address()
  {
    $carts = \Cart::getContent();
      $c = \Cart::getSubTotal();
      if ($c == 0) {
        return back();
      }
    return view('main.shop.address',compact('carts','c'));

  }

  public function buy($id2,Request $request)
  {


          return Payment::callbackUrl(route('thankyou'))->purchase(
          (new Invoice)->amount($id2),
          function ($driver, $transactionId) {
              // store transactionId in database.
              // we need the transactionId to verify payment in future
              // $address= Address::findOrFail($id_menu);
              // $address->transactionId= $transactionId ;
              // $address->save();
              // return back();
              $request = request();
              $carts = \Cart::getContent();
              foreach ($carts as $cart) {
                $address = new Address;
                $fields = collect(Schema::getColumnListing('addresses'));
                foreach ($fields as $field) {
                    if (isset($request->$field)) {
                        $address->$field = $request->$field;
                    }
                }
                      $address->status = 0;
                      $address->product = $cart->name;
                      $address->price = $cart->price;
                      $address->number = $cart->quantity;
                      $address->transactionId= $transactionId ;
                      $address->save();
              }

          }
      )->pay();
  }

  public function buyback($transaction_id)
  {
      try {
          Payment::transactionId($transaction_id)->verify();

      } catch (InvalidPaymentException $exception) {

          echo $exception->getMessage();
      }

       $ad=Address::where('transactionId','=',$transaction_id)->firstOrFail();
       $ad->status=1;
       $ad->save();

    return redirect()->route('sale');
  }

  public function thankyou(Request $request)
  {
      $carts = \Cart::getContent();
      $c = \Cart::getSubTotal();
      if ($c == 0) {
        return back();
      }

      $add=Address::where('transactionId','=',$request->Authority)->firstOrFail();
      if ($request->Status == 'NOK') {
        $add->delete();
      }
       return view('main.shop.thankyou',compact('carts','c'));
  }

}
