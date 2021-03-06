@extends('layouts.admin')
@section('content')
<!-- Default form contact -->
<div class="container float-right">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<p class="h4 mb-4">Add Employee Details</p>
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					<form class="text-center border border-light p-5" action="{{ route('employ.store') }}"  method="post" enctype="multipart/form-data">
					@csrf
					<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right">User Id</label>
	    					<input type="number" name="user_id" class="form-control mb-4" placeholder="User Id" value="{{old('user_id')}}">
	    				</div>
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right" for="gender">Gender</label>
	    					<select class="browser-default custom-select mb-4" name="gender">
						        <option value="">Choose option</option>
						        <option value="M">Male</option>
						        <option value="F">Female</option>
						    </select>
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
	    					<label data-error="wrong" data-success="right">Alternate Mobile</label>
	    					<input type="number" name="alternate_mobile" class="form-control mb-4" placeholder="Alternate Mobile" value="{{old('alternate_mobile')}}">
	    				</div>
						<div class="col-md">
							<label data-error="wrong" data-success="right">Birth Date</label>
	    					<input type="date" name="birth_date" class="form-control mb-4" placeholder="Birth Date" value="{{old('birth_date')}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right">Current Address</label>
	    					<textarea name="current_add" class="form-control mb-4" placeholder="Current Address" value="{{old('current_add')}}"></textarea> 
	    				</div>
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right">Permanent Address</label>
	    					<textarea name="permanent_add" class="form-control mb-4" placeholder="Permanent Address" value="{{old('permanent_add')}}"></textarea> 
	    				</div>
	    			</div>
	    			<div class="row text-left">
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right">Contact Person Name</label>
	    					<input type="text" name="contact_person" class="form-control mb-4" placeholder="Contact Person Name" value="{{old('contact_person')}}">
	    				</div>
	    				<div class="col-md">
							<label data-error="wrong" data-success="right">Contact Person Number</label>
	    					<input type="number" name="con_person_no" class="form-control mb-4" placeholder="Contact Person Number" value="{{old('con_person_no')}}">
	    				</div>
	    			</div>
	    			<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right">Aadhar Card No</label>
	    					<input type="text" name="aadharcard" class="form-control mb-4" placeholder="Aadhar Card No" value="{{old('aadharcard')}}">
	    				</div>
	    				<div class="col-md">
	    					<label data-error="wrong" data-success="right">Pan Card No</label>
	    					<input type="text" name="pancard" class="form-control mb-4" placeholder="Pan Card No" value="{{old('pancard')}}">
	    				</div>
	    			</div>
	    			<div class="form-group">
	    				<input type="file" name="profile_picture" class="form-control">
	    			</div>
    				<button class="btn btn-info btn-block" type="submit">Send</button>
				</form>
		</div>
	</div>
</div>
@endsection