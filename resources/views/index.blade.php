@extends('layout/main')

@section('title', 'Home')

@section('container')
<div class="container">
    <div class="row">
        <div class="col mt-4">
            <h1>Laravel Framework!</h1>
            <h4>Halo, {{ $nama }} </h4>
        </div>
    </div>
</div>
@endsection