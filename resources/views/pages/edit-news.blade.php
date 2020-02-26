@extends('layouts.admin')
@section('content')
<br><br>
<div class="container float-right">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<h4>Edit News</h4><hr>
			@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					<form class="text-center border border-light p-5" action="{{ route('new.update', $new->id) }}"  method="post">
					@method('PATCH')
					@csrf
					<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right" for="user_id">User Id</label>
	    					<input type="number" name="user_id" class="form-control mb-4" placeholder="User Id" value="{{$new->user_id}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="title">Title</label>
	    					<input type="text" name="title" class="form-control mb-4" placeholder="News Title" value="{{$new->title}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="description">Description</label>
	    					<textarea name="description" id="description" class="form-control mb-4" value="{{$new->description}}"></textarea> 
	    				</div>
	    			</div>
					<br>
			<button class="btn btn-primary btn-sm" type="submit">Add</button>
			</form>
		</div>
	</div>
</div>
@endsection
@section('custom-script')
<script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
   CKEDITOR.config.autoParagraph = false;
   CKEDITOR.replace('description');
</script>
@endsection

