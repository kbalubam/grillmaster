@extends('template.backoffice')
<form class="formulaire" action="{{route('image.update', $image->id)}}" enctype="multipart/form-data" method="post" class="container mt-5 text-light">
    @csrf
    Image 1: <input class="mt-2" type="text" value="{{$image->img1}}" name="img1">
    Titre 1 Partie 1: <input class="mt-2" type="text" value="{{$image->titre1part1}}" name="titre1part1">
    Titre 1 Partie 2: <input class="mt-2" type="text" value="{{$image->titre1part2}}" name="titre1part2">
    Texte 1: <input class="mt-2" type="text" value="{{$image->text1}}" name="text1">
    Image 2: <input class="mt-2" type="text" value="{{$image->img2}}" name="img2">
    Titre 2 Partie 1: <input class="mt-2" type="text" value="{{$image->titre2part1}}" name="titre2part1">
    Titre 2 Partie 2: <input class="mt-2" type="text" value="{{$image->titre2part2}}" name="titre2part2">
    Texte 2: <input class="mt-2" type="text" value="{{$image->text2}}" name="text2">
    @method("PUT")
    <button class="btn btn-primary mt-5" type="submit">Submit</button>
    </form>