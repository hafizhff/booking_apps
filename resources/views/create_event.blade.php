@extends('header')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Event</div>
	<div class="card-body">
		<form method="post" action="{{ route('event.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Title</label>
				<div class="col-sm-10">
					<input type="text" name="title" class="form-control" required />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Date</label>
				<div class="col-sm-10">
					<input type="text" name="date" class="form-control" data-provide="datepicker" placeholder="yyyy-mm-dd" date-autoclose="true" data-date-format="yyyy-mm-dd" required />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
