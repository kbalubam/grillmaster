@extends('template.backoffice')
<div class="card mt-5 container" style="width: 60rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $header->icon1 }}</li>
        <li class="list-group-item">{{ $header->img }}</li>
        <li class="list-group-item">{{ $header->icon2 }}</li>
        
        <form action="{{ route('header.show', $header->id) }}" method="post" class="pt-1 pb-1 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('header.edit', $header->id) }}">Edit</a>
        </form>
    </ul>
</div>