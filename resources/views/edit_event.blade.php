@extends('header')

@section('content')

<div class="card">
	<div class="card-header">Edit Event</div>
	<div class="card-body">
		<form method="post" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Event Title</label>
				<div class="col-sm-10">
					<input type="text" name="title" class="form-control" value="{{ $event->title }}" required />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Event Date</label>
				<div class="col-sm-10">
					<input type="text" name="date" class="form-control" value="{{ $event->date }}" required />
				</div>
			</div>
            <div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $event->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')