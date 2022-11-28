@extends('header')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Event Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('event.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Event Name</b></label>
			<div class="col-sm-10">
				{{ $event->title }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Event Email</b></label>
			<div class="col-sm-10">
				{{ $event->date }}
			</div>
		</div>
	</div>
</div>

@endsection('content')