@extends('template.backoffice')
<form class="formulaire container" action="{{route('header.update', $header->id)}}" enctype="multipart/form-data" method="post" class="container mt-5 text-light">
    @csrf
    Icone 1: <input class="mt-2" type="text" value="{{$header->icon1}}" name="icon1">
    Image: <input class="mt-2" type="file" value="{{$header->img}}" name="img">
    Icone 2: <input class="mt-2" type="text" value="{{$header->icon2}}" name="icon2">
    @method("PUT")
    <button class="btn btn-primary mt-5" type="submit">Submit</button>
    </form>