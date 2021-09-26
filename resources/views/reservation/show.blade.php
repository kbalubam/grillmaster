@extends('template.backoffice')
<div class="card mt-5 container" style="width: 60rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $reservation->img }}</li>
        <li class="list-group-item">{{ $reservation->titrepart1 }}</li>
        <li class="list-group-item">{{ $reservation->titrepart2 }}</li>
        <li class="list-group-item">{{ $reservation->titrepart3 }}</li>
        <li class="list-group-item">{{ $reservation->soustitre }}</li>
        <li class="list-group-item">{{ $reservation->adresse }}</li>
        <li class="list-group-item">{{ $reservation->nomimmeuble }}</li>
        <li class="list-group-item">{{ $reservation->rue }}</li>
        <li class="list-group-item">{{ $reservation->ville }}</li>
        <li class="list-group-item">{{ $reservation->phone }}</li>
        <li class="list-group-item">{{ $reservation->ouverture }}</li>
        <li class="list-group-item">{{ $reservation->jour1 }}</li>
        <li class="list-group-item">{{ $reservation->jour2 }}</li>
        <li class="list-group-item">{{ $reservation->jour3 }}</li>
        <li class="list-group-item">{{ $reservation->jour4 }}</li>
        <li class="list-group-item">{{ $reservation->jour5 }}</li>
        <li class="list-group-item">{{ $reservation->jour6 }}</li>
        <li class="list-group-item">{{ $reservation->jour7 }}</li>
        <li class="list-group-item">{{ $reservation->horaire1 }}</li>
        <li class="list-group-item">{{ $reservation->horaire2 }}</li>
        <li class="list-group-item">{{ $reservation->horaire3 }}</li>
        <li class="list-group-item">{{ $reservation->horaire4 }}</li>
        <li class="list-group-item">{{ $reservation->horaire5 }}</li>
        <li class="list-group-item">{{ $reservation->horaire6 }}</li>
        <li class="list-group-item">{{ $reservation->horaire7 }}</li>
        <form action="{{ route('reservation.show', $reservation->id) }}" method="post" class="pt-1 pb-1 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('reservation.edit', $reservation->id) }}">Edit</a>
        </form>
    </ul>
</div>