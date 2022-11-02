<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    function ga()
    {
        return view('admin/add-gallery');
    }
    function uploadga(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'image1'=>'required',
        ]);
       $img=Storage::put('gallery', $request->image);
       $img1=Storage::put('gallery', $request->image1);
        $input=Gallery::create([
            'name'=>$request->name,
            'path'=>$img,
        ]);
        $input1=Gallery::create([
            'name'=>$request->name1,
            'path'=>$img1,
        ]);
        $user=User::where('email', Auth::user()->email)->first();
        $pop=$user->gallery+2;
        $user->gallery=$pop;
        $user->save();
        Alert::success('Success', 'Image Upload Successfully');
        return back();

    }

}
