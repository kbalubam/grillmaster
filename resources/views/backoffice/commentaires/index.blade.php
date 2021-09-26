@extends('template.backoffice')
@section('content')
<table class="table text-danger w-50" >
    <thead>
      <tr style=>
        <th scope="col">#</th>
        <th scope="col">img</th>
        <th scope="col">titrePart1</th>
        <th scope="col">titrePart2</th>
        <th scope="col">titrePart3</th>
        <th scope="col">soustitre</th>
        <th scope="col">img2</th>
        <th scope="col">nom1</th>
        <th scope="col">commentaire1</th>
        <th scope="col">nom2</th>
        <th scope="col">commentaire2</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($dataComm as $comm )
        <tr>
        <th scope="row">{{$comm->id}}</th>
        <td>{{$comm->img}}</td>
        <td>{{$comm->titrepart1}}</td>
        <td>{{$comm->titrepart2}}</td>
        <td>{{$comm->titrepart3}}</td>
        <td>{{$comm->soustitre}}</td>
        <td>{{$comm->img2}}</td>
        <td>{{$comm->nom1}}</td>
        <td>{{$comm->commentaire1}}</td>
        <td>{{$comm->nom2}}</td>
        <td>{{$comm->commentaire2}}</td>
        <td>
        <a href="{{route('commentaires.edit',$comm->id)}}">
        <button type="button" class="btn btn-danger">EDIT</button>
        </a>
        </td>
        <td>

        </td>


        </tr>
        @endforeach

    </tbody>
  </table>



@endsection
