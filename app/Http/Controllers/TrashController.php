<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Intro;
use Illuminate\Http\Request;

class TrashController extends Controller
{

    public function trashed()
    {
        $intros = Intro::onlyTrashed()->paginate(4);

        $about = About::onlyTrashed()->paginate(4);

        return view('admin.trash.trashed', compact('intros', 'about'));
    }
    

    //intro restore
    public function introRestore($id)
    {
        $intros = Intro::onlyTrashed()->findOrFail($id);
        $intros->restore();

        return redirect()->back();
    }

    //intro permanent delete
    public function introForceDelete($id)
    {
        $intros = Intro::onlyTrashed()->findOrFail($id);
        $intros->forceDelete();

        return redirect()->route('trashed');
    }


    //about restore
    public function aboutRestore($id)
    {
        $about = About::onlyTrashed()->findOrFail($id);
        $about->restore();

        return redirect()->back();
    }

    //about permanent delete
    public function aboutForceDelete($id)
    {
        $about = About::onlyTrashed()->findOrFail($id);
        $about->forceDelete();

        return redirect()->route('trashed');
    }
}
