@extends('template.backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5">
        <h1 class="text-white">Footer</h1>
        <a href="{{ route('footer.create') }}" class="btn mt-2"></a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Copyright</th>
                <th scope="col">Icone 1</th>
                <th scope="col">Icone 2</th>
                <th scope="col">Icone 3</th>
                <th scope="col">Icone 4</th>
                <th scope="col">Icone 5</th>
                <th scope="col">Icone 6</th>
                <th scope="col">Icone 7</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($footer as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->copyright }}</td>
                    <td>{{ $data->icon1 }}</td>
                    <td>{{ $data->icon2 }}</td>
                    <td>{{ $data->icon3 }}</td>
                    <td>{{ $data->icon4 }}</td>
                    <td>{{ $data->icon5 }}</td>
                    <td>{{ $data->icon6 }}</td>
                    <td>{{ $data->icon7 }}</td>
                    <td>
                        <a href="{{ route('footer.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('footer.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('footer.destroy', $data->id) }}" method="post">
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
