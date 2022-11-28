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
		<form method="post" action="{{ route('seat.update', $seat->id) }}" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Price</label>
				<div class="col-sm-10">
					<input type="text" name="price" class="form-control" value="{{ $seat->price }}"  required />
				</div>
			</div>
			<div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $seat->id }}" />
				<input type="submit" class="btn btn-primary" value="Update" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
