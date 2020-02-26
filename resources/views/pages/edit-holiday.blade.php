@extends('layouts.admin')
@section('content')
<!-- Default form contact -->
<div class="container float-right">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<p class="h4 mb-4">Edit Holiday</p>
						@if ($errors->any())
				      <div class="alert alert-danger">
				         <strong>Whoops!</strong> There were some problems with your input.<br>
				         <ul>
				            @foreach ($errors->all() as $error)
				            <li>{{ $error }}</li>
				            @endforeach
				         </ul>
				      </div>
				      @endif
				      <form class="text-center border border-light p-5" action="{{ route('holidays.update', $holidays->id) }}"  method="post">
				      	@method('PATCH')
						@csrf
					<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right" for="holiday_name">Holiday Name</label>
	    					<input type="text" name="holiday_name" class="form-control mb-4" placeholder="Holiday Name" value="{{$holidays->holiday_name}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="date">Date</label>
	    					<input type="date" name="date" class="form-control mb-4" placeholder="Holiday Date" value="{{$holidays->date}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="day">Day</label>
	    					<input type="text" name="day" class="form-control mb-4" placeholder="Holiday Day" value="{{$holidays->day}}">
	    				</div>
	    			</div>
	    			<button class="btn btn-info btn-block" type="submit">Send</button>
	    		</form>
	    	</div>
	    </div>
	</div>
</div>
@endsection