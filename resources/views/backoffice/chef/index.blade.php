@extends('template.backoffice')
@section('content')
<table class="table text-danger w-50" >
    <thead>
      <tr style=>
        <th scope="col">#</th>
        <th scope="col">img</th>
        <th scope="col">titrepart1</th>
        <th scope="col">titrepart2</th>
        <th scope="col">titrepart3</th>
        <th scope="col">soustitre</th>
        <th scope="col">imgcarousel1</th>
        <th scope="col">txtcarousel1</th>
        <th scope="col">imgcarousel2</th>
        <th scope="col">txtcarousel2</th>
        <th scope="col">imgcarousel3</th>
        <th scope="col">txtcarousel3</th>
        <th scope="col">imgcarousel4</th>
        <th scope="col">txtcarousel4</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($dataChef as $chef )
        <tr>
        <th scope="row">{{$chef->id}}</th>
        <td>{{$chef->img}}</td>
        <td>{{$chef->titrepart1}}</td>
        <td>{{$chef->titrepart2}}</td>
        <td>{{$chef->titrepart3}}</td>
        <td>{{$chef->soustitre}}</td>
        <td>{{$chef->imgcarousel1}}</td>
        <td>{{$chef->txtcarousel1}}</td>
        <td>{{$chef->imgcarousel2}}</td>
        <td>{{$chef->txtcarousel2}}</td>
        <td>{{$chef->imgcarousel3}}</td>
        <td>{{$chef->txtcarousel3}}</td>
        <td>{{$chef->imgcarousel4}}</td>
        <td>{{$chef->txtcarousel4}}</td>
        <td>
        <a href="{{route('chefs.edit',$chef->id)}}">
                <button type="button" class="btn btn-danger">EDIT</button>

            </a>
        </td>
        <td>



        </tr>
        @endforeach

    </tbody>
  </table>



@endsection
