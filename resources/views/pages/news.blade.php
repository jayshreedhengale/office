@extends('layouts.admin')
@section('content')
<br><br>
<div class="container float-right">
	@if(session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
	<div class="text-right">
  	<a href="{{url('add-news')}}" class="btn btn-primary btn-sm" role="button" method="post" target="_self">Add News</a>
	</div><br>
	<h4 class="text-center">Todays News</h4><hr>
	@foreach($new as $new)
	<div class="row">
		<div class="col-md-4">
			<img src="{{ asset('/users/' . $new->image) }}" class="card-img-top mx-auto d-block" alt="...">
		</div>
		<div class="col-md-8 mx-auto">
			<div class="form-group">
					<label for="title"><b>Title :</b> {{$new->title}}</label>
			</div>
			<div class="form-group">
					<label for="description"><b>Description :</b> {{$new->description}}</label>
			</div><br>
			<form action="{{ route('new.destroy',$new->id) }}" method="POST">
			<a href="{{route('new.edit',$new->id)}}" class="btn btn-primary btn-sm" role="button" target="_self">Edit</a>
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-primary btn-sm">Delete</button>
			</form>
		</div>
	</div><hr><br>
	@endforeach
</div>
@endsection
