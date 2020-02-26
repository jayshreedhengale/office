@extends('layouts.admin')
@section('content')
	<div class="container float-right">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<form class="text-center border border-light p-5" action="{{ route('leavess.store') }}"  method="post">
				@csrf
				<p class="h4 mb-4">Add Leave</p>
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
								<label data-error="wrong" data-success="right" for="emp_id" >Employee Id</label>
							          <input type="number" name="emp_id" class="form-control validate" placeholder="Employee Id" value="{{old('emp_id')}}">
							</div>
							<div class="col-md">
					      		<label data-error="wrong" data-success="right" for="leave_type">Leave Type</label>
					      		<select class="browser-default custom-select" name="leave_type">
							        <option value="">Choose option</option>
							        <option value="1">Medical Leave</option>
							        <option value="2">Causual Leave</option>
							        <option value="3">Loss Of Pay</option>
					    		</select>
					        </div>
				    	</div><br>
				        <div class="row text-left">
				        	<div class="col-md">
								<div class="md-form">
						          <label data-error="wrong" data-success="right" for="from">From</label>
						          <input type="date" name="from" class="form-control validate" value="{{old('from')}}">
						        </div>
						    </div>
						    <div class="col-md">
						        <div class="md-form">
						          <label data-error="wrong" data-success="right" for="to">To</label>
						          <input type="date" name="to" class="form-control validate" value="{{old('to')}}">
						        </div>
						    </div>
						</div><br>
				    	<div class="row text-left">
				    		<div class="col-md">
						        <div class="md-form">
						           	<label data-error="wrong" data-success="right" for="no_of_days">No of Days</label>
						          	<input type="number" name="no_of_days" class="form-control validate" value="{{old('no_of_days')}}">
						         </div>
				     		</div>
						     <div class="col-md">
						         <div class="md-form">
						           	<label data-error="wrong" data-success="right" for="reason">Reason</label>
						          	<textarea name="reason" class="form-control validate" value="{{old('reason')}}"></textarea>
						         </div>
						     </div>
				     	</div><br>
					    <button class="btn btn-info btn-block" type="submit">Send</button>
					</form>
	    		</div>
			</div>
		</div>
@endsection