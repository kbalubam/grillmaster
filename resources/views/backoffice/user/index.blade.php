@extends('template.backoffice')
@section('content')
<table class="table text-danger w-50" >
    <thead>
      <tr style=>
        <th scope="col">#</th>
        <th scope="col">nom</th>



      </tr>
    </thead>
    <tbody>
        @foreach ($dataUser as $user )
        <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->created_at}}</td>


        <td>
        <a href="{{route('users.edit',$user->id)}}">
        <button type="button" class="btn btn-danger">EDIT</button>

        </a>
        </td>
        <td>
        <a href="{{route('users.create')}}">
        <button type="button" class="btn btn-danger">CREATE</button>

        </a>
        </td>
        <td>
        <a href="{{route('users.delete',$user->id)}}">
        <button type="button" class="btn btn-danger">DELETE</button>

        </a>
        </td>

        <td>



        </tr>
        @endforeach

    </tbody>
  </table>



@endsection
