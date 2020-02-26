@extends('layouts.admin')
@section('content')
	<div class="container float-right">
		<div class="row">
			<div class="col-md">
				<table class="table table-striped text-right">
				  <thead>
				    <tr>
				      <th scope="col">Sr No</th>
				      <th scope="col">Date</th>
				      <th scope="col">Publisher</th>
				      <th scope="col">Company Name</th>
				      <th scope="col">Client Name</th>
				      <th scope="col">Designation</th>
				      <th scope="col">Email </th>
				      <th scope="col">Contact No</th>
				      <th scope="col">Country</th>
				      <th scope="col">Report Title</th>
				      <th scope="col">Lead Name</th>
				      <th scope="col">Message</th>
				      <th scope="col">Corporate Or Non Corporate</th>
				      <th scope="col">Comments</th>
				      <th scope="col">Client Message</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($lead as $leads)
				    <tr>
				      <th scope="row">{{ $leads->contact_id }}</th>
				      <td>{{ $leads->contact_datetime }}</td>
				      <td>{{ $leads->contact_publisher }}</td>
				      <td>{{ $leads->contact_company }}</td>
				      <td>{{ $leads->contact_person }}</td>
				      <td>{{ $leads->contact_job_role }}</td>
				      <td>{{ $leads->contact_email }}</td>
				      <td>{{ $leads->contact_phone }}</td>
				      <td>{{ $leads->contact_country }}</td>
				      <td>{{ $leads->contact_rep_title }}</td>
				      <td>{{ $leads->contact_form_type }}</td>
				      <td>{{ $leads->contact_msg }}</td>
				      <td>
				      	<div class="btn-group">
  							<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
						  <div class="dropdown-menu">
						  	<a class="dropdown-item" id="corporate">Corporate</a>
    						<a class="dropdown-item" id="noncorporate">NonCorporate</a>
						  </div>
						</div>
				      </td>
				      <form action="{{ route('comme.store') }}"  method="post">
				      	@csrf
				      <td>
				      	<input type="text" name="comment">
				      	<button class=" btn-primary btn-sm" type="submit">Add</button>
				      </td>
				      <td>
				      	<input type="text" name="client_msg">
				      	<button class=" btn-primary btn-sm" type="submit">Add</button>
				      </td>
				  </form>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
