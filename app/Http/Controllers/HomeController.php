<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role ==1){
            return view('AdminPage');   
        }else if(auth()->user()->role==2){
                return view('MangerPage');   
        }
        return view('UserPage');
    }


    public function profile_admin()
    {
        if (Gate::allows('is_admin')) {
            return view('admin.profileA');
    
        }else { return view('admin_profile');}
       
    }

    public function settings_admin()
    {
        if (Gate::allows('is_admin')) {
            return view('admin.settingsA');
    
        }else { return view('admin_settings');}
       
    }



}

