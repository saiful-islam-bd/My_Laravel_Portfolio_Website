<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use Illuminate\Http\Request;
use File;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $intros = Intro::get();

        return view('admin.intro.index', compact('intros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.intro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'image' => ['required', 'max:1024', 'image'],
            'intro' => ['required', 'max:255'],
            'designation' => ['required', 'max:255'],
            'link' => ['required', 'max:255']
        ]);


        //image file path declaration
        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploaded', $fileName);


        //storing data in database
        $intro = new Intro();
        $intro->intro = $request->intro;
        $intro->designation = $request->designation;
        $intro->link = $request->link;
        $intro->image = 'storage/'.$filePath;
        $intro->save();

        return redirect()->route('intro.index');

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
        $intro = Intro::findOrFail($id);

        return view('admin.intro.edit', compact('intro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation
        $request->validate([
            'image' => ['required', 'max:1024', 'image'],
            'intro' => ['required', 'max:255'],
            'designation' => ['required', 'max:255'],
            'link' => ['required', 'max:255']
        ]);


        //image file path declaration
        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploaded', $fileName);


        //storing data in database
        $intro = Intro::findOrFail($id);
        $intro->intro = $request->intro;
        $intro->designation = $request->designation;
        $intro->link = $request->link;

        File::delete(public_path($intro->image));
        $intro->image = 'storage/'.$filePath;
        $intro->save();

        return redirect()->route('intro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $intro = Intro::findOrFail($id);
        $intro->delete();

        return redirect()->route('intro.index');
    }

   


}
