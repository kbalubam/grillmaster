@extends('template.backoffice')
<form class="formulaire container" action="{{route('footer.update', $footer->id)}}" enctype="multipart/form-data" method="post" class="container mt-5 text-light container">
    @csrf
    Copyright: <input class="mt-2" type="file" value="{{$footer->copyright}}" name="copyright">
    Icone 1: <input class="mt-2" type="text" value="{{$footer->icon1}}" name="icon1">
    Icone 2: <input class="mt-2" type="text" value="{{$footer->icon2}}" name="icon2">
    Icone 3: <input class="mt-2" type="text" value="{{$footer->icon3}}" name="icon3">
    Icone 4: <input class="mt-2" type="text" value="{{$footer->icon4}}" name="icon4">
    Icone 5: <input class="mt-2" type="text" value="{{$footer->icon5}}" name="icon5">
    Icone 6: <input class="mt-2" type="text" value="{{$footer->icon6}}" name="icon6">
    Icone 7: <input class="mt-2" type="text" value="{{$footer->icon7}}" name="icon7">
    @method("PUT")
    <button class="btn btn-primary mt-5" type="submit">Submit</button>
    </form>