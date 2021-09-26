@extends('template.backoffice')
<div class="card mt-5 container" style="width: 60rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $footer->copyright }}</li>
        <li class="list-group-item">{{ $footer->icon1 }}</li>
        <li class="list-group-item">{{ $footer->img }}</li>
        <li class="list-group-item">{{ $footer->icon2 }}</li>
        <li class="list-group-item">{{ $footer->icon3 }}</li>
        <li class="list-group-item">{{ $footer->icon4 }}</li>
        <li class="list-group-item">{{ $footer->icon5 }}</li>
        <li class="list-group-item">{{ $footer->icon6 }}</li>
        <li class="list-group-item">{{ $footer->icon7 }}</li>
        <form action="{{ route('footer.show', $footer->id) }}" method="post" class="pt-1 pb-1 d-flex justify-content-center">
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
            <a class="btn btn-primary" href="{{ route('footer.edit', $footer->id) }}">Edit</a>
        </form>
    </ul>
</div>