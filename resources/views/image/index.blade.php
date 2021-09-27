@extends('template.backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5 text-danger">
        <h1 class="text-white">Image</h1>
        <a href="{{ route('image.create') }}" class="btn mt-2"></a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image 1</th>
                <th scope="col">Titre 1 Partie 1</th>
                <th scope="col">Titre 1 Partie 2</th>
                <th scope="col">Texte 1</th>
                <th scope="col">Image 2</th>
                <th scope="col">Titre 2 Partie 1</th>
                <th scope="col">Titre 2 Partie 2</th>
                <th scope="col">Texte 2</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($image as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->img1 }}</td>
                    <td>{{ $data->titre1part1 }}</td>
                    <td>{{ $data->titre1part2 }}</td>
                    <td>{{ $data->text1 }}</td>
                    <td>{{ $data->img2 }}</td>
                    <td>{{ $data->titre2part1 }}</td>
                    <td>{{ $data->titre2part2 }}</td>
                    <td>{{ $data->text2 }}</td>
                    <td>
                        <a href="{{ route('image.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('image.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('image.destroy', $data->id) }}" method="post">
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
