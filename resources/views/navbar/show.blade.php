@extends('template.backoffice')
<div class="card mt-5 container" style="width: 60rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $navbar->img }}</li>
        <li class="list-group-item">{{ $navbar->titrePart1 }}</li>
        <li class="list-group-item">{{ $navbar->titrePart2 }}</li>
        <li class="list-group-item">{{ $navbar->link1 }}</li>
        <li class="list-group-item">{{ $navbar->link2 }}</li>
        <li class="list-group-item">{{ $navbar->link3 }}</li>
        <li class="list-group-item">{{ $navbar->link4 }}</li>
        <li class="list-group-item">{{ $navbar->link5 }}</li>
        <li class="list-group-item">{{ $navbar->ddlink5 }}</li>
        <li class="list-group-item">{{ $navbar->iconBtn }}</li>
        <li class="list-group-item">{{ $navbar->btnSearch }}</li>
        <form action="{{ route('navbar.show', $navbar->id) }}" method="post" class="pt-1 pb-1 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('navbar.edit', $navbar->id) }}">Edit</a>
        </form>
    </ul>
</div>