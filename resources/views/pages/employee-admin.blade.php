@extends('layouts.admin')
@section('content')
<div class="container float-right">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<p class="h4 mb-4">Add Employee Details</p>
						
					<form class="text-center border border-light p-5" action="{{ route('admin.store')}}" method="post">
					@csrf
					<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right">User Id</label>
	    					<input type="number" name="user_id" class="form-control mb-4" placeholder="User Id" value="{{old('user_id')}}">
	    				</div>
	    				<div class="col-md">
							<label data-error="wrong" data-success="right">Joining Date</label>
	    					<input type="date" name="join_date" class="form-control mb-4" value="{{old('join_date')}}">
	    				</div>
	    			</div>
					<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right">First Name</label>
	    					<input type="text" name="first_name" class="form-control mb-4" placeholder="First Name" value="{{old('first_name')}}">
	    				</div>
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right">Last Name</label>
	    					<input type="text" name="last_name" class="form-control mb-4" placeholder="Last Name" value="{{old('last_name')}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right">Email</label>
	    					<input type="email" name="email" class="form-control mb-4" placeholder="E-mail" value="{{old('email')}}">
	    				</div>
	    				<div class="col-md">
							<label data-error="wrong" data-success="right">Mobile No</label>
	    					<input type="number" name="mobile_no" class="form-control mb-4" placeholder="Mobile No" value="{{old('mobile_no')}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label for="department">Select Department:</label>
				               <select name="department" class="form-control" value="{{old('department')}}">
				                  <option value="">Select Department</option>
				                  @foreach($departments as $department)
				                     <option value="{{$department->id}}">{{$department->department}}</option>
				                  @endforeach
				               </select>
	    				</div>
	    				<div class="col-md">
	    					<label for="designation">Select Designation:</label>
				               <select name="designation" class="form-control" value="{{old('designation')}}">
				                  <option value="">Select Designation</option>
				                  @foreach($designations as $designation)
				                     <option value="{{$designation->id}}">{{$designation->job_role}}</option>
				                  @endforeach
				               </select>
	    				</div>
	    			</div><br>
    				<button class="btn btn-info btn-block" type="submit">Send</button>
				</form>
		</div>
	</div>
</div>
@endsection