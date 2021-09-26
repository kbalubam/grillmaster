@extends('template.backoffice')
@section('content')
<form action="{{route('abouts.update', $about->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">titrePart1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrePart1" value="{{$about->titrePart1}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titrePart2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrePart2" value="{{$about->titrePart2}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">titrePart3</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titrePart3" value="{{$about->titrePart3}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">soustitreTitre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitreTitre" value="{{$about->soustitreTitre}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">soustitre1part1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre1part1" value="{{$about->soustitre1part1}}" >
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">soustitre1part2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre1part2" value="{{$about->soustitre1part2}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">text1part1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="text1part1" value="{{$about->text1part1}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">text1part2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="text1part2" value="{{$about->text1part2}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">soustitre2part1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre2part1" value="{{$about->soustitre2part1}}">
        </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">soustitre2part2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soustitre2part2" value="{{$about->soustitre2part2}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">text2part1</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="text2part1" value="{{$about->text2part1}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">text2part2</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="text2part2" value="{{$about->text2part2}}" >
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
