@extends('template.backoffice')
<div class="card mt-5 container" style="width: 60rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $image->img1 }}</li>
        <li class="list-group-item">{{ $image->titre1part1 }}</li>
        <li class="list-group-item">{{ $image->titre1part2 }}</li>
        <li class="list-group-item">{{ $image->text1 }}</li>
        <li class="list-group-item">{{ $image->img2 }}</li>
        <li class="list-group-item">{{ $image->titre2part1 }}</li>
        <li class="list-group-item">{{ $image->titre2part2 }}</li>
        <li class="list-group-item">{{ $image->text2 }}</li>
        <form action="{{ route('image.show', $image->id) }}" method="post" class="pt-1 pb-1 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('image.edit', $image->id) }}">Edit</a>
        </form>
    </ul>
</div>