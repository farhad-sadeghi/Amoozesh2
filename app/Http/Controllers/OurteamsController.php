<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ourteam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class OurteamsController extends Controller
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
            $ourteams = Ourteam::where('name', 'LIKE', "%$keyword%")
                ->orWhere('major', 'LIKE', "%$keyword%")
                ->orWhere('picture', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ourteams = Ourteam::latest()->paginate($perPage);
        }

        return view('ourteams.index', compact('ourteams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ourteams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required',
			'major' => 'required',
      'picture' => ['mimes:jpeg,jpg,png,gif','max:500','required'],
		]);


    $about = new Ourteam();
    $fields = collect(Schema::getColumnListing('ourteams'));
    foreach ($fields as $field) {
        if (isset($request->$field)) {
            $about->$field = $request->$field;
        }
    }
    $about->picture = $request->file('picture')->store('public');
    $about->save();

        return redirect('ourteams')->with('flash_message', 'ثبت با موفقیت انجام شد');
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
        $ourteam = Ourteam::findOrFail($id);

        return view('ourteams.show', compact('ourteam'));
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
        $ourteam = Ourteam::findOrFail($id);

        return view('ourteams.edit', compact('ourteam'));
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
			'major' => 'required',
      'picture' => ['mimes:jpeg,jpg,png,gif','max:500','nullable'],
		]);
    $about = Ourteam::findOrFail($id);
  /*  $about->update($requestData);*/

    $about->update($request->except(['picture']));
    if ($about->picture != Null) {
        if (isset( $request->picture)) {
            unlink("storage/$about->picture");
            $about->picture = $request->file('picture')->store('public');
        }
      }
    $about->save();

        return redirect('ourteams')->with('flash_message', 'تغییر با موفقیت انجام شد');
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
      $about= Ourteam::findOrFail($id);
      unlink("storage/$about->picture");
      Ourteam::destroy($id);

        return redirect('ourteams')->with('flash_message', 'حذف با موفقیت انجام شد');
    }
}
