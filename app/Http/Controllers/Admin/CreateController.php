<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sermon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CreateController extends  Controller
{
    function createmessage(Request $request)
    {
        $request->validate([
            'preacher'=>'required',
            'topic'=>'required',
            'content'=>'required',
            'bible'=>'required',
            'image'=>'required',
        ]);
        $image=Storage::put('sermon', $request->image);
        if (isset($request->image2)){
            $image1=Storage::put('sermon', $request->image2);
        }
        $insert=Sermon::create([
            'preacher'=>$request['preacher'],
            'topic'=>$request['topic'],
            'content'=>$request['content'],
            'picture'=>$image,
        ]);
        if (isset($request->image2)){
            $insert->other=$request->image2;
            $insert->save();
        }
        $user=User::where('email', Auth::user()->email)->first();
        $pos=$user->sermon+1;
        $user->sermon=$pos;
        $user->save();
        Alert::success('Success', 'Sermon Post Successfully');
        return back();
    }
    function editsermon($request)
    {
        $ser=Sermon::where('id', $request)->first();
        return view('admin/editsermon', compact('ser'));
    }
    function updatesermon(Request $request)
    {

    }

}
