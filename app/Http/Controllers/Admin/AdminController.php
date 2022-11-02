<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Emailotp;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function log()
    {

        return view('admin/login');
    }

    function getin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $input['email']=$request->get('email');
        $input['password']=$request->get('password');


        if(Auth::attempt($input)){
            return redirect('dashboard');
        }else{
            Alert::error('Ooops', 'Incorrect login detail');
            return redirect('administrator');
        }

    }

    function indexadmin()
    {
        $users=User::all();
        return view('admin/admins', compact('users'));
    }
    function addadmin()
    {
        return view('admin/add-admin');
    }
    function myaccount()
    {
        return view('admin/myaccount');
    }
    function createslide()
    {
        return view('admin/createslide');
    }
    function loadslide(Request $request)
    {
        $request->validate([
            'header'=>'required',
            'body'=>'required',
        ]);

        $insert=Slide::create([
            'head'=>$request['header'],
            'body'=>$request['body'],
        ]);
        Alert::success('Done', 'Slide Create Successfully');
        return back();
    }
    function postnew(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>'required',
            'number'=>'required',
        ]);
        $input=User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'number' => $request['number'],
            'password' => Hash::make($request['password']),
        ]);
        $receiver=$request['email'];
        $admin= 'info@rccgchristchapel.com.ng';
        Mail::to($receiver)->send(new Emailotp($request));
        Mail::to($admin)->send(new Emailotp($request));
        Alert::success('Success', 'Admin Successfully created. Information have been send to the user mail');
        return back();
    }
}
