@extends('header')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Booking Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('booking.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Fullname</th>
				<th>Email</th>
                <th>Title</th>
				<th>Notes</th>
                <th>Seat</th>
				<th>Event</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->fullname }}</td>
						<td>{{ $row->email }}</td>
                        <td>{{ $row->title }}</td>
						<td>{{ $row->notes }}</td>
                        <td>{{ $row->seat->price }}</td>
						<td>{{ $row->event->title }}</td>
						<td>
							<form method="post" action="{{ route('booking.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('booking.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('booking.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
	</div>
</div>

@endsection