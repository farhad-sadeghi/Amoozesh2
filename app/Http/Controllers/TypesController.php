<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Type;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use App\Mail\EmailSubscribe;
use App\Email;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $types = Type::where('picture', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('property1', 'LIKE', "%$keyword%")
                ->orWhere('property2', 'LIKE', "%$keyword%")
                ->orWhere('property3', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $types = Type::latest()->paginate($perPage);
        }

        return view('types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sales = Sale::get();
        return view('types.create',compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request,Email $email)
    {
        $this->validate($request, [
      'picture' => ['mimes:jpeg,jpg,png,gif','max:500','required'],
			'name' => 'required',
			'price' => ['required','max:8'],
      'text' => ['nullable'],
			'sale_id' => 'required'
		]);


    $type = new Type();
    $fields = collect(Schema::getColumnListing('types'));
    foreach ($fields as $field) {
        if (isset($request->$field)) {
            $type->$field = $request->$field;
        }
    }
    $type->picture = $request->file('picture')->store('public');
    $type->save();
    foreach ($email->all() as $emails) {

        Mail::to($emails->name)->send(new EmailSubscribe($request->name,$type->picture,$request->text));

    }
    return redirect('types')->with('flash_message', 'ثبت با موفقیت انجام شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $type = Type::findOrFail($id);

        return view('types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);
        $sales = Sale::get();

        return view('types.edit', compact('type','sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required',
      'picture' => ['mimes:jpeg,jpg,png,gif','max:500','nullable'],
			'price' => ['required','max:8'],
			'text' => ['nullable'],
			'sale_id' => 'required'
		]);
    $type = Type::findOrFail($id);
  /*  $about->update($requestData);*/

    $type->update($request->except(['picture']));
    $type->text = $request->text;
    if ($type->picture != Null) {
        if (isset( $request->picture)) {
            unlink("storage/$type->picture");
            $type->picture = $request->file('picture')->store('public');
        }
      }
    $type->save();
    return redirect('types')->with('flash_message', 'تغییر با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
      $type= Type::findOrFail($id);
      unlink("storage/$type->picture");
      Type::destroy($id);

      return redirect('types')->with('flash_message', 'حذف با موفقیت انجام شد');
    }
}
