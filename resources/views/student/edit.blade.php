@extends('layout/main')

@section('title', 'Edit Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col col-6 mt-4">
            <h1 class="mb-4"> Edit Student </h1>

            <form method="POST" action="/students/{{ $student->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="Name">Full Name</label>
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                        placeholder="Type your fullname" name="fullname" value="{{ $student->nama }}">
                    @error('fullname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Name">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                        placeholder="Type your nim" name="nim" value="{{ $student->nim }}">
                    @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Name">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="Type your email" name="email" value="{{ $student->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Name">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        placeholder="Type your jurusan" name="jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary col-2">Save</button>
            </form>

        </div>
    </div>
</div>
@endsection