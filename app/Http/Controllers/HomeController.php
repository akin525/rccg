<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index()
    {
        $pam=DB::table('gallerys')->where('status', '=', '1')->orderBy('id', 'desc')->limit(3)->get();
        $pe= DB::table('sermons')->where('status', '=', '1')->orderBy('id', 'desc')->limit(4)->get();
        $mini= DB::table('minister')->where('status', '=', '1')->orderBy('id', 'desc')->get();
return view("home", compact("pe", "pam", "mini"));
    }
}
