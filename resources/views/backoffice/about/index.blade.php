@extends('template.backoffice')
@section('content')
<table class="table text-danger w-50" >
    <thead>
      <tr style=>
        <th scope="col">#</th>
        <th scope="col">titrePart1</th>
        <th scope="col">titrePart2</th>
        <th scope="col">titrePart3</th>
        <th scope="col">soustitreTitre</th>
        <th scope="col">soustitre1part1</th>
        <th scope="col">soustitre1part2</th>
        <th scope="col">text1part1</th>
        <th scope="col">text1part2</th>
        <th scope="col">soustitre2part1</th>
        <th scope="col">soustitre2part2</th>
        <th scope="col">text2part1</th>
        <th scope="col">text2part2</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($dataAbout as $about )
        <tr>
        <th scope="row">{{$about->id}}</th>
        <td>{{$about->titrePart1}}</td>
        <td>{{$about->titrePart2}}</td>
        <td>{{$about->titrePart3}}</td>
        <td>{{$about->soustitreTitre}}</td>
        <td>{{$about->soustitre1part1}}</td>
        <td>{{$about->soustitre1part2}}</td>
        <td>{{$about->text1part1}}</td>
        <td>{{$about->text1part2}}</td>
        <td>{{$about->soustitre2part1}}</td>
        <td>{{$about->soustitre2part2}}</td>
        <td>{{$about->text2part1}}</td>
        <td>{{$about->text2part2}}</td>
        <td>
        <a href="{{route('abouts.edit',$about->id)}}">
                <button type="button" class="btn btn-danger">EDIT</button>

            </a>
        </td>
        </tr>
        @endforeach

    </tbody>
  </table>



@endsection
