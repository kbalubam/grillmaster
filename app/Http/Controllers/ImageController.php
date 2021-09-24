<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::all();
        return view('image.index', compact('image'));
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
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('image.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        Storage::disk("public")->delete("img/".$image->img);
        $image->img1 = $request->file("url")->hashName();
        $image->titre1part1 = $request->titre1part1;
        $image->titre1part2 = $request->titre1part2;
        $image->text1 = $request->text1;
        $image->textbtn1 = $request->textbtn1;
        $image->img2 = $request->file("url")->hashName();
        $image->titre2part1 = $request->titre2part1;
        $image->titre2part2 = $request->titre2part2;
        $image->text2 = $request->text2;
        $image->textbtn2 = $request->textbtn2;

        $request->save();
        $request->file("url")->storePublicly("img/bg", "public");
        
        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        Storage::disk("public")->delete("img/bg/".$image->url);
        $image->delete();
        return redirect()->route("image.index");
    }
}
