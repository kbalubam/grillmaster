<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataChef = Chef::all();
        return view('backoffice.chef.index', compact('dataChef'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        return view('backoffice.chef.edit', compact("chef"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef $chef)
    {

        request()->validate([
            "titrepart1"=>"required",
            "titrepart2"=>"required",
            "titrepart3"=>"required",
            "soustitre"=>"required",
            "imgcarousel1"=>"required",
            "txtcarousel1"=>"required",
            "imgcarousel2"=>"required",
            "txtcarousel2"=>"required",
            "imgcarousel3"=>"required",
            "imgcarousel4"=>"required",
            "txtcarousel4"=>"required",


        ]);

        $chef->img = $request->img;
        $chef->titrepart1 = $request->titrepart1;

        $chef->titrepart2 = $request->titrepart2;
        $chef->titrepart3 = $request->titrepart3;
        $chef->soustitre = $request->soustitre;
        $chef->imgcarousel1 = $request->imgcarousel1;
        $chef->txtcarousel1 = $request->txtcarousel1;
        $chef->imgcarousel2 = $request->imgcarousel2;
        $chef->txtcarousel2 = $request->txtcarousel2;
        $chef->imgcarousel3 = $request->imgcarousel3;
        $chef->txtcarousel3 = $request->txtcarousel3;
        $chef->imgcarousel4 = $request->imgcarousel4;
        $chef->txtcarousel4 = $request->txtcarousel4;
        $chef->save();
        return redirect()->route('chefs.index')->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        $chef->delete();
        return redirect()->route('chef.index');
    }
}
