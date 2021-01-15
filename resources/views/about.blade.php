{{-- Get the layout html code ON folder layout/main.blade.php --}}
@extends('layout.main')
{{-- get the tittle on the layout with the user tittle input 'About Me' or 'lorem' --}}
@section('tittle', 'About Me')
{{-- insert the container division on the layout page and bring here --}}
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, {{$nama}}</h1>
        </div>
    </div>
</div>
{{-- end section for container section --}}
@endsection