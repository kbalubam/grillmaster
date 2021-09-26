@extends('template.backoffice')
@section('content')
<form action="{{route('commentaires.update', $commentaire->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">img</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="img">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titrePart1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrepart1">
        </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titrePart2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrepart2">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titrePart3</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrepart3">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">soustitre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">img2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="img2">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nom1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom1">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">commentaire1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="commentaire1">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nom2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom2">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">commentaire2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="commentaire2">
        </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
