<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbar = Navbar::all();
        return view('navbar.index', compact('navbar'));
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
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        return view('navbar.show', compact('navbar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view('navbar.edit', compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {   
        $request->validate([
            "img" => ["required", "min:1", "max:255"],
            "titre1part1" => ["required", "min:1", "max:255"],
            "titre1part2" => ["required", "min:1", "max:255"],
            "link1" => ["required", "min:1", "max:255"],
            "link2" => ["required", "min:1", "max:255"],
            "link3" => ["required", "min:1", "max:255"],
            "link4" => ["required", "min:1", "max:255"],
            "link5" => ["required", "min:1", "max:255"],
            "ddlink5" => ["required", "min:1", "max:255"],
            "iconBtn" => ["required", "min:1", "max:255"],
            "btnSearch" => ["required", "min:1", "max:255"]
        ]);

        Storage::disk("public")->delete("img/".$navbar->img);
        $navbar->img = $request->file("url")->hashName();
        $navbar->titrePartie1 = $request->titrePartie1;
        $navbar->titrePartie2 = $request->titrePartie2;
        $navbar->link1 = $request->navbar->link1;
        $navbar->link2 = $request->navbar->link2;
        $navbar->link3 = $request->navbar->link3;
        $navbar->link4 = $request->navbar->link4;
        $navbar->link5 = $request->navbar->link5;
        $navbar->ddlink5 = $request->ddlink5;
        $navbar->iconBtn = $request->iconBtn;
        $navbar->btnSearch = $request->btnSearch;

        $request->save();

        $request->file("url")->storePublicly("img", "public");

        return redirect()->route('navbar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        Storage::disk("public")->delete("/img".$navbar->img);
        $navbar->delete();
        return redirect()->route("navbar.index");
    }
}
