<?php

namespace App\Http\Controllers;

use App\Console\helper;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController
{
public function index()
{
    $pam=DB::table('gallerys')->where('status', '=', '1')->get();
//    return $pam;
    return view('users', compact('pam'));
}
    public static  function upload(Request $request)
    {
        $re = helper::upload('img/', 'png', $request->file('logo'));
        $re1 = helper::upload('img/', 'png', $request->file('logo1'));
        $re2 = helper::upload('img/', 'png', $request->file('logo2'));

        $rel=$request->name;
        $rel1=$request->name1;
        $rel2=$request->name2;
        $name = [$rel, $rel1, $rel2, ];
        $name1 = [$re, $re1, $re2, ];

        for($i = 0; $i< count($name); $i++) {

                DB::insert('insert into gallerys (name, path) values(?, ?)', [$name[$i], $name1[$i]]);


        }
        $msg="File Upload Successfully";
        return redirect("users")->with('status', $msg);

    }
    public function gal()
    {
        $gallery= DB::table('gallerys')->where('status', '=', '1')->paginate(6);
//        return $gallery;
        return view('gallery', compact('gallery'));
    }
}
