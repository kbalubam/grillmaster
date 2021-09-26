<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataComm = Commentaire::all();
        return view('backoffice.commentaires.index', compact('dataComm'));
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
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        return view('backoffice.commentaires.edit', compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
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

        $commentaire->img = $request->img;
        $commentaire->titrepart1 = $request->titrepart1;
        $commentaire->titrepart2 = $request->titrepart2;
        $commentaire->titrepart3 = $request->titrepart3;
        $commentaire->soustitre = $request->soustitre;
        $commentaire->img2 = $request->img2;
        $commentaire->nom1 = $request->nom1;
        $commentaire->commentaire1 = $request->commentaire1;
        $commentaire->nom2 = $request->nom2;
        $commentaire->commentaire2 = $request->commentaire2;
        $commentaire->save();
        return redirect()->route('commentaires.index')->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
