<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lego;

class LegoController extends Controller
{
    public function index(){
        $legoProducts = Lego::all();
        return view('lego.index', compact('legoProducts'));
    }
    public function create(){
        return view("lego.create");
    }
    public function store(Request $request){
        $request->validate([
            "code"=>"required",
            "name"=>"required",
            "pieces"=>"required",
            "price"=>["required"]
        ]);
        //todo: get auth access
        //todo: save submitted datta
        Lego::create([
            "code" => $request->code,
            "name" => $request->name,
            "pieces" => $request->pieces,
            "price" => $request->price
        ]);
        //todo: redirect user and show success
        return redirect("lego")->with("success","Sikeres LEGO hozzáadás.");
    }
}
