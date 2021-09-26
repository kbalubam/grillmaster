@extends('template.backoffice')
@section('content')
<form action="{{route('users.store', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">img</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="img" value="{{$chef->img}}">
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">titrePart1</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrepart1" value="{{$chef->titrepart1}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titrePart2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrepart2" value="{{$chef->titrepart2}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titrePart3</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrepart3" value="{{$chef->titrepart3}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">soustitre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre" value="{{$chef->soustitre}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">imgcarousel1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imgcarousel1" value="{{$chef->imgcarousel1}}" >
        </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">txtcarousel1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtcarousel1" value="{{$chef->txtcarousel1}}" >
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">imgcarousel2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imgcarousel2" value="{{$chef->imgcarousel2}}" >
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">txtcarousel2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtcarousel2" value="{{$chef->txtcarousel2}}" >
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">imgcarousel3</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imgcarousel3" value="{{$chef->imgcarousel3}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">txtcarousel3</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtcarousel3" value="{{$chef->txtcarousel3}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">imgcarousel4</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="imgcarousel4" value="{{$chef->imgcarousel4}}" >
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">txtcarousel4</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtcarousel4" value="{{$chef->txtcarousel4}}">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
