<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use Shetabit\Payment\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Payment\Exceptions\InvalidPaymentException;

class CartController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth')->only('address','buy','buyback','thankyou');

    }

  public function cart()
  {

  return Address::show_cart();

  }

  public function cart_add($id,Request $request)
  {
     Address::insert_cart($id, $request);
     return back()->with('success','محصول به سبد خرید اضافه شد');
  }

  public function delete_cart($id,Request $request)
  {
     \Cart::remove($id);
     return back();
  }

  public function address()
  {
     return  Address::show_address();
  }

  public function buy($id2,Request $request)
  {
          return Payment::callbackUrl(route('thankyou'))->purchase(
          (new Invoice)->amount($id2),
          function ($driver, $transactionId) {

            Address::insert_address($transactionId);
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

      Address::address_active($transaction_id);
      return redirect()->route('sale');
  }

  public function thankyou(Request $request)
  {
    return Address::delete_address($request);
  }

}
