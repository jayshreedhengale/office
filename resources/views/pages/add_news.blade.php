@extends('layouts.admin')
@section('content')
<br><br>
<div class="container float-right">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<form class="text-center border border-light p-5" action="{{ route('new.store') }}"  method="post" enctype="multipart/form-data">
				@csrf
			<h4>Todays News</h4><hr>
			@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
			<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right" for="user_id">User Id</label>
	    					<input type="number" name="user_id" class="form-control mb-4" placeholder="User Id">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="title">Title</label>
	    					<input type="text" name="title" class="form-control mb-4" placeholder="News Title">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="description">Description</label>
	    					<textarea name="description" class="form-control mb-4"></textarea> 
	    				</div>
	    			</div>
			<div class="form-group">
	    		<input type="file" name="image" class="form-control">
	    	</div><br>
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
   CKEDITOR.replace('short_description');
</script>
@endsection