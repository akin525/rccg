<?php

namespace App\Http\Controllers;


use App\Console\helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreachController
{
    public function index()
    {
        return view("preach");
    }

    public function pre(Request $request)
    {
        $audio = helper::upload('audio/', 'mp3', $request->file('audio'));
        $img = helper::upload('preach/', 'png', $request->file('picture'));

        DB::insert('insert into sermons (preacher, topic, content, picture, audio) values(?, ?, ?, ?, ?)', [$request->name, $request->topic, $request->contents, $img, $audio]);

        $md="Good Job";

        return redirect("preach")->with('status', $md);


    }
    public function mini(Request $request)
    {
        $img = helper::upload('minister/', 'png', $request->file('picture'));
        $img1 = helper::upload('minister/', 'png', $request->file('picture1'));
        $img2 = helper::upload('minister/', 'png', $request->file('picture2'));

        $rel=$request->name;
        $rel1=$request->name1;
        $rel2=$request->name2;
        $name = [$rel, $rel1, $rel2, ];
        $name1 = [$img, $img1, $img2, ];

        for($i = 0; $i< count($name); $i++) {

            DB::insert('insert into minister (name, picture) values(?, ?)', [$name[$i], $name1[$i]]);


        }
        $msg="File Upload Successfully";
        return redirect("mini")->with('status', $msg);

    }
    public function minis()
    {
        $mini= DB::table('minister')->where('status', '=', '1')->orderBy('id', 'desc')->get();
        return view("ministers", compact("mini"));
    }
    public function all()
    {
        $pe= DB::table('sermons')->where('status', '=', '1')->orderBy('id', 'desc')->paginate(5);
        $v = DB::table('sermons')->where('status', '=' ,'1')->orderBy('id', 'desc')->limit(5)->get();

//        return $v;
        return view('sermon', compact('pe', 'v'));
    }

    public function more(Request $request)
    {
        $mo= DB::table('sermons')->where('id', '=', $request->id)->first();
//        return $gallery;
        return view('more', compact('mo'));
    }

    public function read(Request $request)
    {
        $mo= DB::table('sermons')->where('id', '=', $request->id)->first();
        $v = DB::table('sermons')->where('status', '=' ,'1')->orderBy('id', 'desc')->limit(5)->get();

        return view("read-more", compact("mo", "v"));

    }
}
