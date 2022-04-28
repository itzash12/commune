<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Carbon\Carbon;


class demandeController extends Controller
{
    public function create(){
        return view('demande/demandes');
    }
    public function store (Request $request){
        $request->validate(['type_demande'=>'required|string|unique:actualites|min:3|max:50']);
     
        Demande::insert([
            'type_demande' =>$request ->type_demande,
            'des_name' =>$request ->des_name,
            'actual_image' =>$request ->actual_image,
            'created_at'=>Carbon::now()
        ]);
            return back()->with('message',' confirmer une nouvelle actualité');
    }
}
