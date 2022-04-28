<?php

namespace App\Http\Controllers;

use App\Models\actualites;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ActualitesController extends Controller
{
    public function show(){

        $actuals= actualites::paginate(5) ;

        return view('actualites.actualitesPage' , compact('actuals'));
    }
    public function store (Request $request){
        $request->validate(['actual_name'=>'required|string|unique:actualites|min:3|max:50']);
     
        actualites::insert([
            'actual_name' =>$request ->actual_name,
            'des_name' =>$request ->des_name,
            'actual_image' =>$request ->actual_image,
            'created_at'=>Carbon::now()
        ]);
            return back()->with('message',' confirmer une nouvelle actualité');
    }
    public function delete($id){
        actualites::find($id)->delete();
        return redirect()->route('actual.show')->with('message','terminé supprime');
    }  

}
