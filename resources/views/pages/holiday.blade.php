@extends('layouts.admin')
@section('content')
	<div class="container float-right">
		@if(session()->get('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div>
		@endif
		<div class="text-right">
		  	<a href="{{url('add-holiday')}}" class="btn btn-primary btn-sm" method="post" role="button" target="_self">Add Holiday</a>
		</div><br>
		<div class="row">
			<div class="col-md">
				<table class="table table-striped text-right">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Title</th>
				      <th scope="col">Holiday Date</th>
				      <th scope="col">Day</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($holiday as $holidays)
				    <tr>
				      <th scope="row">{{ $holidays->id}}</th>
				      <td>{{ $holidays->holiday_name}}</td>
				      <td>{{ $holidays->date}}</td>
				      <td>{{ $holidays->day}}</td>
				      <td>
				      	 <form action="{{ route('holidays.destroy',$holidays->id) }}" method="POST">
				      	<a href="{{route('holidays.edit',$holidays->id)}}" class="btn btn-primary btn-sm" role="button" target="_self">Edit</a>
				      	@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-primary btn-sm">Delete</button>
						</form>
				      </td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection