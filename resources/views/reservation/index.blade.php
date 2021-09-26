@extends('template.backoffice')

@section('content')



    <div class="container d-flex justify-content-center mt-5">
        <h1 class="text-white">Reservation</h1>
        <a href="{{ route('reservation.create') }}" class="btn mt-2"></a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Titre partie 1</th>
                <th scope="col">Titre partie 2</th>
                <th scope="col">Titre partie 3</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">Adresse</th>
                <th scope="col">Nom Immeuble</th>
                <th scope="col">Rue</th>
                <th scope="col">Ville</th>
                <th scope="col">Phone</th>
                <th scope="col">Ouverture</th>
                <th scope="col">Jour 1</th>
                <th scope="col">Jour 2</th>
                <th scope="col">Jour 3</th>
                <th scope="col">Jour 4</th>
                <th scope="col">Jour 5</th>
                <th scope="col">Jour 6</th>
                <th scope="col">Jour 7</th>
                <th scope="col">Horaire 1</th>
                <th scope="col">Horaire 2</th>
                <th scope="col">Horaire 3</th>
                <th scope="col">Horaire 4</th>
                <th scope="col">Horaire 5</th>
                <th scope="col">Horaire 6</th>
                <th scope="col">Horaire 7</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservation as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->img }}</td>
                    <td>{{ $data->titrePart1 }}</td>
                    <td>{{ $data->titrePart2 }}</td>
                    <td>{{ $data->titrePart3 }}</td>
                    <td>{{ $data->soustitre }}</td>
                    <td>{{ $data->adresse }}</td>
                    <td>{{ $data->nomimmeuble }}</td>
                    <td>{{ $data->rue }}</td>
                    <td>{{ $data->ville }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->ouverture }}</td>
                    <td>{{ $data->jour1 }}</td>
                    <td>{{ $data->jour2 }}</td>
                    <td>{{ $data->jour3 }}</td>
                    <td>{{ $data->jour4 }}</td>
                    <td>{{ $data->jour5 }}</td>
                    <td>{{ $data->jour6 }}</td>
                    <td>{{ $data->jour7 }}</td>
                    <td>{{ $data->horaire1 }}</td>
                    <td>{{ $data->horaire2 }}</td>
                    <td>{{ $data->horaire3 }}</td>
                    <td>{{ $data->horaire4 }}</td>
                    <td>{{ $data->horaire5 }}</td>
                    <td>{{ $data->horaire6 }}</td>
                    <td>{{ $data->horaire7 }}</td>
                    <td>
                        <a href="{{ route('reservation.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('reservation.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('reservation.destroy', $data->id) }}" method="post">
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
