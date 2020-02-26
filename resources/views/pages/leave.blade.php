@extends('layouts.admin')
@section('content')
	<div class="container float-right">
		<div class="text-right">
		  <a href="{{url('add-leave')}}" class="btn btn-primary btn-sm" method="post" role="button" target="_self">Add Leave</a>
		</div><br>
			<div class="row">
				<div class="col-md-12 mx-auto">
					<table class="table table-striped text-right">
					<thead>
					    <tr>
					      <th scope="col">Emp Id</th>
					      <th scope="col">Leaves Type</th>
					      <th scope="col">From</th>
					      <th scope="col">To</th>
					      <th scope="col">No of Days</th>
					      <th scope="col">Reason</th>
					      <th scope="col">Status</th>
					      <th scope="col">Action</th>
					    </tr>
					</thead>
					<tbody>
						@foreach($leave as $leavess)
					    <tr>
					    	<td>{{ $leavess->emp_id}}</td>
						    <th>{{ $leavess->leave_type}}</th>
						    <td>{{ $leavess->from}}</td>
						    <td>{{ $leavess->to}}</td>
						    <td>{{ $leavess->no_of_days}}</td>
						    <td>{{ $leavess->reason}}</td>
						    <td>{{ $leavess->status}}</td>
					      <td>
					      	<form action="{{ route('leavess.destroy',$leavess->id) }}" method="POST">
						      	<a href="{{route('leavess.edit',$leavess->id)}}" class="btn btn-primary btn-sm" role="button" target="_self">Edit</a>
						      	@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-primary btn-sm">Delete</button>
							</form>
					      </td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
				</div>
			</div>
		</div>
@endsection