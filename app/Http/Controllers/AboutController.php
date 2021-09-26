<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataAbout = About::all();
        return view('backoffice.about.index', compact('dataAbout'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('backoffice.about.edit', compact("about"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        request()->validate([
            "titrePart1"=>"required",
            "titrePart2"=>"required",
            "titrePart3"=>"required",
            "soustitreTitre"=>"required",
            "soustitre1part1"=>"required",
            "soustitre1part2"=>"required",
            "text1part1"=>"required",
            "text1part2"=>"required",
            "soustitre2part1"=>"required",
            "soustitre2part2"=>"required",
            "text2part1"=>"required",
            "text2part2"=>"required",


        ]);

        $about->titrePart1 = $request->titrePart1;
        $about->titrePart2 = $request->titrePart2;
        $about->titrePart3 = $request->titrePart3;
        $about->soustitreTitre = $request->soustitreTitre;
        $about->soustitre1part1 = $request->soustitre1part1;
        $about->soustitre1part2 = $request->soustitre1part2;
        $about->text1part1 = $request->text1part1;
        $about->text1part2 = $request->text1part2;
        $about->text1part2 = $request->text1part2;

        $about->soustitre2part1 = $request->soustitre2part1;
        $about->soustitre2part2 = $request->soustitre2part2;
        $about->text2part1 = $request->text2part1;
        $about->text2part2 = $request->text2part1;
        $about->save();
        return redirect()->route('abouts.index')->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('abouts.index');
    }
}
