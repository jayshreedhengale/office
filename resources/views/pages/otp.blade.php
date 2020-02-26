@extends('layouts.admin')
@section('content')
	<div class="container float-right">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form class="text-center border border-light p-5" action="{{url('/lead')}}" >
				@csrf
				<p class="h4 mb-4">Send OTP</p>
					<div class="row text-left">
						<div class="col-md">
							<label data-error="wrong" data-success="right" for="holiday_name">Mobile No</label>
	    					<input type="number" name="otp" class="form-control mb-4" placeholder="Mobile No">
	    				</div>
	    			</div>
	    			<button class="btn btn-info btn-block" type="submit">Send OTP</button>
	    		</form>
	    	</div>
	    </div>
	</div>
@endsection