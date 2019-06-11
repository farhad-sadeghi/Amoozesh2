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

    public function index(About $about,Ourteam $ourteam,Advantage $advantage,Sale $sale)
    {
        return view('main.index',compact('about','ourteam','advantage','sale'));
    }

    public function contact()
    {
        $contacts = Contact::where('role', 0)->get();
        return view('main.contact',compact('contacts'));
    }


    public function contact2(Request $request)
    {
      $contact= new Contact();
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->text = $request->text;
      $contact->role = 1;
      $contact->save();
      return back();
    }

    public function service(Service $service)
    {
        return view('main.services',compact('service'));
    }

    public function sale($id)
    {
        $sale1=Sale::findOrFail($id);
        $type = $sale1->types()->paginate(1);
        return view('main.sale',compact('type'));
    }

    public function detail($id)
    {
      $type=Type::findOrFail($id);
      return view('main.detail',compact('type'));
    }

    public function cart()
    {
      return view('main.cart');
    }

}
