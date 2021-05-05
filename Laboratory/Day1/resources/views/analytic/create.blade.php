@extends('template')
@section('layout')

  	<div class="row">
		<div class="col-sm-12">
			<h1>Create</h1>
			@if($errors->any())
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					@foreach($errors->all() as $item)
						<div class="text-danger"> {{ $item }} </div>
					@endforeach
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
			<form method="POST" action="{{ URL::route('analytic_store') }}">
				@csrf
				<div style="margin-bottom: 30px;">
					<div class="form-group">
						<label for="Gender">Gender</label>
						<select class="form-control" id="Gender" name="gender">
							<option readonly> Select </option>
							<option {{ old('gender') =='M' ? 'selected' : '' }} value="M">Male</option>
							<option {{ old('gender') =='F' ? 'selected' : '' }} value="F">Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="ageInput">Age</label>
						<input type="number" class="form-control" id="ageInput" placeholder="Age" name="age" value="{{ old('age') }}">
					</div>
					<div class="form-group">
						<label for="cityInput">City</label>
						<input type="text" class="form-control" id="cityInput" placeholder="Age" name="city" value="{{ old('city') }}">
					</div>
				</div>
				<div>
					<a href="{{ URL::route('analytic_index') }}" class="btn btn-secondary">Cancel</a>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>

@endsection