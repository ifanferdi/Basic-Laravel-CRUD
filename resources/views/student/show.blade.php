@extends('layout/main')

@section('title', 'Student Details')

@section('container')
<div class="container">
	<div class="row">
		<div class="col col-6 mt-4">
			<h1 class="mb-4">Student Details </h1>

			<div class="card">
				<div class="card-body">
					<h5 class="card-title"> {{ $student->nama }} </h5>
					<h6 class="card-subtitle mb-2 text-muted"> {{ $student->nim }} </h6>
					<h6 class="card-text">{{ $student->email }}</h6>
					<h6 class="card-text">{{ $student->jurusan }}</h6>

					<div role="separator" class="dropdown-divider"></div>

					<a href="{{ $student->id}}/edit" class="btn btn-success"> Edit </a>

					<form action="{{ $student->id }}" method="post" class="d-inline">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger"> Delete </button>
					</form>
					<a href="/students" class="btn btn-secondary float-right"> Back </a>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection