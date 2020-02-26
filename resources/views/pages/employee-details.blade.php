@extends('layouts.admin')
@section('content')
<div class="container p-3 float-right">
	<div class="row">
		<div class="col-md-10 mx-auto p-3 card">
			<div class="row">
				@foreach($emplo as $employe)
				<div class="col-md-3">
					<img src="{{ asset('/users/' . $employe->profile_image) }}" class="card-img-top rounded-circle mx-auto d-block" alt="..." style="width:100px;">
				</div>
				<div class="col-md-3">
					<h4> Name : {{ $employe->first_name }}</h4>
					<p>UI/UX Design Team</p>
					<p>Web Designer</p>
					<p> Employee Id : {{ $employe->user_id }}</p>
					<p>Date of Join : 1st Jan 2013</p>
				</div>
				<div class="col-md-2">
					<p><b>Phone :</b></p>
					<p><b>Email :</b></p>
					<p><b>Birthday:</b></p>
					<p><b>Address :</b></p>
					<p><b>Gender :</b></p>
				</div>
				<div class="col-md-4">
					<p>{{ $employe->mobile_no }}</p>
					<p>{{ $employe->email }}</p>
					<p>{{ $employe->birth_date}}</p>
					<p>{{ $employe->current_add}}</p>
					<p>{{ $employe->gender}}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
