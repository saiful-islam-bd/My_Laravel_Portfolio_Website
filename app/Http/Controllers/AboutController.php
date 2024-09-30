<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::get();

        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => ['required', 'max:255'],
            'long_para' => ['required'],
            'short_para' => ['required'],
            'cv_link' => ['required', 'max:255']
        ]);

        //storing data in database
        $about = new About();
        $about->title = $request->title;
        $about->long_para = $request->long_para;
        $about->short_para = $request->short_para;
        $about->cv_link = $request->cv_link;
        $about->save();

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::findOrFail($id);

        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation
        $request->validate([
            'title' => ['required', 'max:255'],
            'long_para' => ['required'],
            'short_para' => ['required'],
            'cv_link' => ['required', 'max:255']
        ]);

        //storing data in database
        $about = About::findOrFail($id);
        $about->title = $request->title;
        $about->long_para = $request->long_para;
        $about->short_para = $request->short_para;
        $about->cv_link = $request->cv_link;
        $about->save();

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('about.index');
    }

    public function trashed(){
        

        return view('admin.about.trashed');
    }
}
