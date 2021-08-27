@extends('layout/main')

@section('title', 'Student List')

@section('container')
<div class="container">
    <div class="row">
        <div class="col mt-4 col-6">
            <h1 class="mb-4">Student List </h1>

            <a href="/students/create" class="btn btn-primary mb-3"> Add Student</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col" style="width: 17%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                        
                    <tr>
                        <td class="align-middle">{{ $s->nim }}</td>
                        <td class="align-middle">{{ $s->nama }}</td>
                        <td>
                        <a href="{{ './students/' . $s->id }}" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection