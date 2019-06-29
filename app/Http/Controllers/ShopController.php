<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Type;
use App\Email;


class ShopController extends Controller
{
  public function sale()
  {
      return view('main.Shop.index');
  }

  public function sale2($id)
  {
      $sale1=Sale::findOrFail($id);
      $type = $sale1->types()->paginate(2);
      return view('main.shop.sale',compact('type','sale1'));
  }

  public function detail($id)
  {
    $type=Type::findOrFail($id);
    return view('main.shop.detail',compact('type'));
  }

  public function search(Request $request)
  {
    $type =Type::where('name','LIKE',"%{$request->search}%")->paginate(6);

    if (count($type) != 0)
    {
        return view('main.shop.search',compact('type'));

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

}
