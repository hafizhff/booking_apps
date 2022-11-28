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
		<form method="post" action="{{ route('booking.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Fullname</label>
				<div class="col-sm-10">
					<input type="text" name="fullname" class="form-control" required />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" required />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Note</label>
				<div class="col-sm-10">
					<input type="text" name="notes" class="form-control"  />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Seat</label>
				<div class="col-sm-10">
                    <select id="seat_id" name="seat_id" class="form-control" required >
                        <option value="">-- Select Seat --</option>
                        @foreach ($seats as $seat)
                        <option value="{{$seat->id}}">
                            {{$seat->price}}
                        </option>
                        @endforeach
                    </select>
					<!-- <input type="text" name="seat_id" class="form-control" required /> -->
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Event</label>
				<div class="col-sm-10">
                    <select id="event_id" name="event_id" class="form-control" required >
                        <option value="">-- Select Seat --</option>
                        @foreach ($events as $event)
                        <option value="{{$event->id}}">
                            {{$event->title}}
                        </option>
                        @endforeach
                    </select>
					<!-- <input type="text" name="event_id" class="form-control" required /> -->
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
