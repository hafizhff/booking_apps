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
	<div class="card-header">Add Booking</div>
	<div class="card-body">
		<form method="post" action="{{ route('booking.update', $booking->id) }}" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Fullname</label>
				<div class="col-sm-10">
					<input type="text" name="fullname" class="form-control" value="{{ $booking->fullname }}"  required />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" value="{{ $booking->email }}"  required />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Note</label>
				<div class="col-sm-10">
					<input type="text" name="notes" class="form-control" value="{{ $booking->note }}"  />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Seat</label>
				<div class="col-sm-10">
                    <select id="seat_id" name="seat_id" class="form-control" required >
                        <option value="{{ $booking->seat_id }}">{{ $booking->seat->price }}</option>
                    </select>
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Event</label>
				<div class="col-sm-10">
                    <select id="event_id" name="event_id" class="form-control" required >
                        <option value="{{ $booking->event_id }}">{{ $booking->event->title }}</option>
                    </select>
				</div>
			</div>
			<div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $booking->id }}" />
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
