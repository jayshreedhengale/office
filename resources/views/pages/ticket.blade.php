@extends('layouts.admin')
@section('content')
	<div class="container float-right">
		<div class="row">
			<div class="col-md">
				<div class="text-right">
  					<a href="{{url('add-ticket')}}" class="btn btn-primary btn-sm" role="button" method="post" target="_self">Add Ticket</a>
				</div><br>
				<table class="table table-striped text-right">
				  <thead>
				    <tr>
				      <th scope="col">Emp Id</th>
				      <th scope="col">Ticket Id</th>
				      <th scope="col">Ticket Subject</th>
				      <th scope="col">Email</th>
				      <th scope="col">Description</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($ticket as $tickets)
				    <tr>
				      <th scope="row">{{$tickets->emp_id}}</th>
				      <td>{{$tickets->ticket_id}}</td>
				      <td>{{$tickets->subject}}</td>
				      <td>{{$tickets->email}}</td>
				      <td>{{$tickets->description}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection