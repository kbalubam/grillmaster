@extends('template.backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5 text-danger">
        <h1 class="text-white">Header</h1>
        <a href="{{ route('header.create') }}" class="btn mt-2"></a>
    </div>


    <table class="table mt-5 container text-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Icone 1</th>
                <th scope="col">Image</th>
                <th scope="col">Icone 2</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($header as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->icon1 }}</td>
                    <td>{{ $data->img }}</td>
                    <td>{{ $data->icon2 }}</td>
                    <td>
                        <a href="{{ route('header.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('header.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('header.destroy', $data->id) }}" method="post">
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
