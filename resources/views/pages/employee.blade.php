@extends('layouts.admin')
@section('content')
<div class="container float-right">
	@if(session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
	<div class="text-right">
  	<a href="{{url('add-employee')}}" class="btn btn-primary btn-sm" role="button" method="post" target="_self">Add Employee</a>
	</div><br>
	<div class="row mx-auto">
		@foreach($empl as $employ)
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
  				<img src="{{ asset('/users/' . $employ->profile_image) }}" class="card-img-top rounded-circle mx-auto d-block" alt="..." style="width:100px;">
  				<div class="card-body text-center">
    				<a href="{{url('/employee-details')}}"><p class="card-text">{{$employ->first_name}}</p></a>
    				<p class="card-text"></p>
    				<form action="{{ route('employ.destroy',$employ->id) }}" method="POST">
	    				<a href="{{route('employ.edit',$employ->id)}}" class="btn btn-primary btn-sm" role="button" target="_self">Edit</a> 
	    				@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-primary btn-sm">Delete</button>
					</form>
  				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection