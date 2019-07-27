<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Type;
use App\About;
use App\Ourteam;
use App\Contact;
use App\Service;
use App\Advantage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function writer()
    {
        return view('writer.dashboard');
    }

    public function about(About $abouts,Ourteam $ourteams,Advantage $advantages,Sale $sale)
    {
        $c = \Cart::getSubTotal();
        $carts = \Cart::getContent();
        return view('main.shop.about',compact('abouts','ourteams','advantages','sale','c','carts'));
    }

    public function contact()
    {
         $c = \Cart::getSubTotal();
         $carts = \Cart::getContent();
         return view('main.shop.contact',compact('c','carts'));
    }


    public function contact2(Request $request)
    {

      $this->validate($request, [
    'name' => 'required',
    'email' => ['required','email'],
    'phone' => ['required'],
    'text' => ['required'],
  ]);

      $contact= new Contact();
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->text = $request->text;
      $contact->save();
      return back()->with('contact', 'اطلاعات شما با موفقیت ارسال شد');
    }

    public function service(Service $service)
    {
        return view('main.services',compact('service'));
    }


    public function cart()
    {
      return view('main.cart');
    }

}
