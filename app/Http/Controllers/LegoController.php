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
            "price"=>"required"
        ]);
        //todo: get auth access
        //todo: save submitted datta
        Lego::create([
            "code" => $request->code,
            "name" => $request->name,
            "pieces" => $request->pieces,
            "price" => $request->price
        ]);
        //todo: redirect user and show successs
        return redirect("/")->with("success","Sikeres LEGO hozzáadás.");
    }
    public function destroy(Lego $lego){
        $lego->delete();
        return redirect()->route('lego.index')->with('success', 'A LEGO termék sikeresen törölve lett.');
    }
    public function edit(Lego $lego){
        return view('lego.edit', compact('lego'));
    }

    public function update(Request $request, Lego $lego)
{
    $request->validate([
        'name'=> 'required',
        'pieces'=> 'required',
        'price'=> 'required'
    ]);

    $lego->update([
        'name' => $request->name,
        'pieces' => $request->pieces,
        'price' => $request->price
    ]);

    return redirect()->route('lego.index')->with('success', 'A LEGO termék sikeresen frissítve lett.');
}
}
