@extends('header')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Booking Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('booking.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Full Name</b></label>
			<div class="col-sm-10">
				{{ $booking->fullname }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Email</b></label>
			<div class="col-sm-10">
				{{ $booking->email }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Title</b></label>
			<div class="col-sm-10">
				{{ $booking->title }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Notes</b></label>
			<div class="col-sm-10">
				{{ $booking->notes }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Seat</b></label>
			<div class="col-sm-10">
				{{ $booking->seat->price }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Event</b></label>
			<div class="col-sm-10">
				{{ $booking->event->title }}
			</div>
		</div>
	</div>
</div>

@endsection('content')