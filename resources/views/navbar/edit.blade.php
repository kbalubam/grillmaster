@extends('template.backoffice')
<form class="formulaire" action="{{route('navbar.update', $navbar->id)}}" enctype="multipart/form-data" method="post" class="container mt-5 text-light">
    @csrf
    Image: <input class="mt-2" type="text" value="{{$navbar->img}}" name="titrePrincipal">
    Titre part 1: <input class="mt-2" type="text" value="{{$navbar->titrePart1}}" name="titrePart1">
    Titre part 2: <input class="mt-2" type="text" value="{{$navbar->titrePart2}}" name="titrePart2">
    Link 1: <input class="mt-2" type="text" value="{{$navbar->link1}}" name="link1">
    Link 2: <input class="mt-2" type="text" value="{{$navbar->link2}}" name="link2">
    Link 3: <input class="mt-2" type="text" value="{{$navbar->link3}}" name="link3">
    Link 4: <input class="mt-2" type="text" value="{{$navbar->link4}}" name="link4">
    Link 5: <input class="mt-2" type="text" value="{{$navbar->link5}}" name="link5">
    DD Link 5: <input class="mt-2" type="text" value="{{$navbar->ddlink5}}" name="ddlink5">
    Icon bouton: <input class="mt-2" type="text" value="{{$navbar->iconBtn}}" name="iconBtn">
    Bouton search: <input class="mt-2" type="text" value="{{$navbar->btnSearch}}" name="btnSearch">
    @method("PUT")
    <button class="btn btn-primary mt-5" type="submit">Submit</button>
    </form>