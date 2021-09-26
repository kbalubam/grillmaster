@extends('template.backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5">
        <h1 class="text-white">Navbar</h1>
        <a href="{{ route('navbar.create') }}" class="btn mt-2"></a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Titre partie 1</th>
                <th scope="col">Titre partie 2</th>
                <th scope="col">Link 1</th>
                <th scope="col">Link 2</th>
                <th scope="col">Link 3</th>
                <th scope="col">Link 4</th>
                <th scope="col">Link 5</th>
                <th scope="col">Dropdown Link 5</th>
                <th scope="col">Icon Suppression</th>
                <th scope="col">Bouton search</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($navbar as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->img }}</td>
                    <td>{{ $data->titrePart1 }}</td>
                    <td>{{ $data->titrePart2 }}</td>
                    <td>{{ $data->link1 }}</td>
                    <td>{{ $data->link2 }}</td>
                    <td>{{ $data->link3 }}</td>
                    <td>{{ $data->link4 }}</td>
                    <td>{{ $data->link5 }}</td>
                    <td>{{ $data->ddlink5 }}</td>
                    <td>{{ $data->iconBtn }}</td>
                    <td>{{ $data->btnSearch }}</td>
                    <td>
                        <a href="{{ route('navbar.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('navbar.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('navbar.destroy', $data->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
