@extends('layouts.admin')
@section('content')
<!-- Default form contact -->
<div class="container float-right">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form class="text-center border border-light p-5" action="{{ route('holidays.store') }}"  method="post">
				@csrf
				<p class="h4 mb-4">Add Holiday</p>
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
							<label data-error="wrong" data-success="right" for="holiday_name">Holiday Name</label>
	    					<input type="text" name="holiday_name" class="form-control mb-4" placeholder="First Name">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="date">Date</label>
	    					<input type="date" name="date" class="form-control mb-4" placeholder="Holiday Date">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="day">Day</label>
	    					<input type="text" name="day" class="form-control mb-4" placeholder="Holiday Day">
	    				</div>
	    			</div>
	    			<button class="btn btn-info btn-block" type="submit">Send</button>
	    		</form>
	    	</div>
	    </div>
	</div>
</div>
@endsection