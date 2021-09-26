@extends('template.backoffice')
<form class="formulaire" action="{{route('reservation.update', $reservation->id)}}" enctype="multipart/form-data" method="post" class="container mt-5 text-light">
    @csrf
    Image: <input class="mt-2" type="text" value="{{$reservation->img}}" name="titrePrincipal">
    Titre part 1: <input class="mt-2" type="text" value="{{$reservation->titrePart1}}" name="titrePart1">
    Titre part 2: <input class="mt-2" type="text" value="{{$reservation->titrePart2}}" name="titrePart2">
    Titre part 3: <input class="mt-2" type="text" value="{{$reservation->titrePart3}}" name="titrePart3">
    Sous-titre: <input class="mt-2" type="text" value="{{$reservation->soustitre}}" name="soustitre">
    Adresse: <input class="mt-2" type="text" value="{{$reservation->adresse}}" name="adresse">
    Immeuble: <input class="mt-2" type="text" value="{{$reservation->nomimmeuble}}" name="nomimmeuble">
    Rue: <input class="mt-2" type="text" value="{{$reservation->rue}}" name="rue">
    Ville: <input class="mt-2" type="text" value="{{$reservation->ville}}" name="ville">
    Phone: <input class="mt-2" type="text" value="{{$reservation->phone}}" name="phone">
    Ouverture: <input class="mt-2" type="text" value="{{$reservation->ouverture}}" name="ouverture">
    Jour 1: <input class="mt-2" type="text" value="{{$reservation->jour1}}" name="jour1">
    Jour 2: <input class="mt-2" type="text" value="{{$reservation->jour2}}" name="jour2">
    Jour 3: <input class="mt-2" type="text" value="{{$reservation->jour3}}" name="jour3">
    Jour 4: <input class="mt-2" type="text" value="{{$reservation->jour4}}" name="jour4">
    Jour 5: <input class="mt-2" type="text" value="{{$reservation->jour5}}" name="jour5">
    Jour 5: <input class="mt-2" type="text" value="{{$reservation->jour5}}" name="jour5">
    Jour 6: <input class="mt-2" type="text" value="{{$reservation->jour6}}" name="jour6">
    Jour 7: <input class="mt-2" type="text" value="{{$reservation->jour7}}" name="jour7">
    Horaire 1: <input class="mt-2" type="text" value="{{$reservation->horaire1}}" name="horaire1">
    Horaire 2: <input class="mt-2" type="text" value="{{$reservation->horaire2}}" name="horaire2">
    Horaire 3: <input class="mt-2" type="text" value="{{$reservation->horaire3}}" name="horaire3">
    Horaire 4: <input class="mt-2" type="text" value="{{$reservation->horaire4}}" name="horaire4">
    Horaire 5: <input class="mt-2" type="text" value="{{$reservation->horaire5}}" name="horaire5">
    Horaire 6: <input class="mt-2" type="text" value="{{$reservation->horaire6}}" name="horaire6">
    Horaire 7: <input class="mt-2" type="text" value="{{$reservation->horaire7}}" name="horaire7">
    @method("PUT")
    <button class="btn btn-primary mt-5" type="submit">Submit</button>
    </form>