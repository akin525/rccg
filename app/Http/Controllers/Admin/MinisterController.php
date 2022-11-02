<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Minister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MinisterController extends Controller
{
    function uploadministerdedails(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'picture' => 'required',
            'body' => 'required',
        ]);

        $re =  Storage::put('minister', $request->picture);
        $insert=Minister::create([
            'name'=>$request['name'],
            'picture'=>$re,
            'body'=>$request['body'],
        ]);
        $msg="Minister added Successfully";
        Alert::success('Done', $msg);
        return back();
    }
    function addministers()
    {
        $min=Minister::all();
        return view('admin/add-minister', compact('min'));
    }
    function editminister($request)
    {
        $min=Minister::where('id', $request)->first();
        return view('admin/editminister', compact('min'));
    }
    function updateminister(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'body'=>'required',
        ]);
        $min=Minister::where('id', $request)->first();
        $min->name=$request['name'];
        $min->body=$request['body'];
        $min->save();
        Alert::success('Update', 'Profile update successfully');
        return redirect('add-minister');

    }
    function changeministerpic(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'id'=>'required',
        ]);

        $min=Minister::where('id', $request)->first();
        if(Storage::exists($min->picture)){
            Storage::delete($min->picture);
            $min->picture=NULL;
            $min->save();
        }
        $new=Storage::put('minister', $request->image);
        $min->picture=$new;
        $min->save();
        Alert::success('Success', 'Image change successfully');
        return back();

    }
}
