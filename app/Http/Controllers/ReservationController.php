<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::all();
        return view('reservation.index', compact('reservation'));
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
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return view('reservation.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            "img" => ["required", "min:1", "max:255"],
            "titrepart1" => ["required", "min:1", "max:255"],
            "titrepart2" => ["required", "min:1", "max:255"],
            "titrepart3" => ["required", "min:1", "max:255"],
            "soustitre" => ["required", "min:1", "max:255"],
            "adresse" => ["required", "min:1", "max:255"],
            "nomimmeuble" => ["required", "min:1", "max:255"],
            "rue" => ["required", "min:1", "max:255"],
            "ville" => ["required", "min:1", "max:255"],
            "phone" => ["required", "min:1", "max:255"],
            "ouverture" => ["required", "min:1", "max:255"],
            "jour1" => ["required", "min:1", "max:255"],
            "jour2" => ["required", "min:1", "max:255"],
            "jour3" => ["required", "min:1", "max:255"],
            "jour4" => ["required", "min:1", "max:255"],
            "jour5" => ["required", "min:1", "max:255"],
            "jour6" => ["required", "min:1", "max:255"],
            "jour7" => ["required", "min:1", "max:255"],
            "horaire1" => ["required", "min:1", "max:255"],
            "horaire2" => ["required", "min:1", "max:255"],
            "horaire3" => ["required", "min:1", "max:255"],
            "horaire4" => ["required", "min:1", "max:255"],
            "horaire5" => ["required", "min:1", "max:255"],
            "horaire6" => ["required", "min:1", "max:255"],
            "horaire7" => ["required", "min:1", "max:255"],
        ]);


        Storage::disk('public')->delete("img/bg/".$reservation->img);
        $reservation->img = $request->file('url')->hashName();
        $reservation->titrepart1 = $request->titrepart1;
        $reservation->titrepart2 = $request->titrepart2;
        $reservation->titrepart3 = $request->titrepart3;
        $reservation->soustitre = $request->soustitre;
        $reservation->adresse = $request->adresse;
        $reservation->nomimmeuble = $request->nomimmeuble;
        $reservation->rue = $request->rue;
        $reservation->ville = $request->ville;
        $reservation->phone = $request->phone;
        $reservation->ouverture = $request->ouverture;
        $reservation->jour1 = $request->jour1;
        $reservation->jour2 = $request->jour2;
        $reservation->jour3 = $request->jour3;
        $reservation->jour4 = $request->jour4;
        $reservation->jour5 = $request->jour5;
        $reservation->jour6 = $request->jour6;
        $reservation->jour7 = $request->jour7;
        $reservation->horaire1 = $request->horaire1;
        $reservation->horaire2 = $request->horaire2;
        $reservation->horaire3 = $request->horaire3;
        $reservation->horaire4 = $request->horaire4;
        $reservation->horaire5 = $request->horaire5;
        $reservation->horaire6 = $request->horaire6;
        $reservation->horaire7 = $request->horaire7;

        $request->save();
        $request->file("url")->storePublicly("img/bg", "public");

        return redirect()->route('reservation.index');
    }

    /**

     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        Storage::disk("public")->delete("img/bg/".$reservation->url);
        $reservation->delete();
        return redirect()->route("reservation.index");
    }
}
