@extends('layouts.admin')
@section('content')
	<div class="container float-right">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<p class="h4 mb-4">Add Ticket</p>
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<form class="text-center border border-light p-5" action="{{ route('tickets.store') }}"  method="post">
						@csrf
						<div class="row text-left">
							<div class="col-md">
								<div class="md-form">
							          <label data-error="wrong" data-success="right" for="emp_id" placeholder="User Id" value="{{old('emp_id')}}">Employee Id</label>
							          <input type="number" name="emp_id" class="form-control validate">
							    </div>
							</div>
							<div class="col-md">
							    <div class="md-form">
							          <label data-error="wrong" data-success="right" for="ticket_id" placeholder="User Id" value="{{old('ticket_id')}}">Ticket Id</label>
							          <input type="number" name="ticket_id" class="form-control validate">
							    </div>
							</div>
						</div><br>
						<div class="row text-left">
							<div class="col-md">
								<div class="md-form">
							          <label data-error="wrong" data-success="right" for="subject" placeholder="User Id" value="{{old('subject')}}">Ticket Subject</label>
							          <input type="text" name="subject" class="form-control validate">
							   	</div>
							</div>
							<div class="col-md">
							    <div class="md-form">
							          <label data-error="wrong" data-success="right" for="email" placeholder="User Id" value="{{old('email')}}">Email</label>
							          <input type="email" name="email" class="form-control validate">
							    </div>
							</div>
						</div><br>
					    <div class="md-form text-left">
					          <label data-error="wrong" data-success="right" for="description" placeholder="User Id" value="{{old('description')}}">Description</label>
					          <textarea name="description" class="form-control validate"></textarea>
					    </div><br>
					<button class="btn btn-info btn-block" type="submit">Send</button>
	    		</form>
			</div>
		</div>
	</div>
@endsection