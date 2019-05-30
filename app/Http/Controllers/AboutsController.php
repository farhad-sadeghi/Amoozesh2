<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AboutsController extends Controller
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
            $abouts = About::where('header', 'LIKE', "%$keyword%")
                ->orWhere('text', 'LIKE', "%$keyword%")
                ->orWhere('picture', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $abouts = About::latest()->paginate($perPage);
        }

        return view('abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('abouts.create');
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
			'text' => 'required',
			'picture' => ['mimes:jpeg,jpg,png,gif','max:500','required'],
		]);
        /*$requestData = $request->all();

        About::create($requestData);*/
        $about = new About();
        $fields = collect(Schema::getColumnListing('abouts'));
        foreach ($fields as $field) {
            if (isset($request->$field)) {
                $about->$field = $request->$field;
            }
        }
        $about->picture = $request->file('picture')->store('public');
        $about->save();

        return redirect('abouts')->with('flash_message', 'About added!');
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
        $about = About::findOrFail($id);

        return view('abouts.show', compact('about'));
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
        $about = About::findOrFail($id);

        return view('abouts.edit', compact('about'));
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
			'text' => 'required',
			'picture' => ['mimes:jpeg,jpg,png,gif','max:500','nullable'],
		]);

        $about = About::findOrFail($id);
      /*  $about->update($requestData);*/

        $about->update($request->except(['picture']));
        if ($about->picture != Null) {
            if (isset( $request->picture)) {
                unlink("storage/$about->picture");
                $about->picture = $request->file('picture')->store('public');
            }
          }
        $about->save();

        return redirect('abouts')->with('flash_message', 'About updated!');
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
        $about= About::findOrFail($id);
        unlink("storage/$about->picture");
        About::destroy($id);

        return redirect('abouts')->with('flash_message', 'About deleted!');
    }
}
