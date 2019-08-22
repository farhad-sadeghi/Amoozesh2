<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use App\Sale;
use App\Type;
use App\User;
use App\Email;
use App\About;
use App\Address;
use App\Ourteam;
use App\Advantage;
use Darryldecode\Cart\Cart;

class ShopController extends Controller
{


  public function __construct()
  {
     $this->middleware('auth')->only('profile','profile2');

   }

  public function sale()
  {
      $carts = \Cart::getContent();
      return view('main.index',compact('carts'));
  }



  public function sale2($id)
  {
    return  Type::types_paginate($id);
  }



  public function detail($id)
  {
      return  Type::show_detail($id);
  }



  public function search(Request $request)
  {
    return Type::show_search($request);
  }




  public function email_insert(Request $request)
  {


    $this->validate($request, [
    'name' => 'required|email||unique:emails'
      ]);


    Email::insert_email($request);
    return back()->with('success', 'ایمیل شما با موفقیت ثبت شد');

  }


  public function about(About $abouts,Ourteam $ourteams,Advantage $advantages,Sale $sale)
  {
      $c = \Cart::getSubTotal();
      $carts = \Cart::getContent();
      return view('main.about',compact('abouts','ourteams','advantages','sale','c','carts'));
  }

  public function contact()
  {
       $c = \Cart::getSubTotal();
       $carts = \Cart::getContent();
       return view('main.contact',compact('c','carts'));
  }


  public function contact2(Request $request)
  {

    $this->validate($request, [
  'name' => 'required',
  'email' => ['required','email'],
  'phone' => ['required'],
  'text' => ['required'],
]);

    Contact::insert_contact($request);
    return back()->with('success', 'اطلاعات شما با موفقیت ارسال شد');
  }

  public function writer()
  {
      return view('writer.dashboard');
  }

  public function profile()
  {
       $c = \Cart::getSubTotal();
       $carts = \Cart::getContent();
       return view('main.profile',compact('c','carts'));
  }

  public function profile2($id,Request $request)
  {

  $this->validate($request, [
      'name' => 'required',
      'email' => ['required','email'],
      ]);

    User::user_update($id, $request);
    return back()->with('success', 'اطلاعات شما با موفقیت ثبت شد');
  }

}
