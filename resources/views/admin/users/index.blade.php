 @extends('layouts.admin')

 @section('content')


	<h1>Users</h1>


	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
		 @if($users)

		 	@foreach($users as $user)

		 	<tr>
		 		<td>{{$user->id}}</td>
		 		<td>{{$user->name}}</td>
		 		<td>{{$user->email}}</td>
		 	</tr>

		 	@endforeach

		 @endif
		</tbody>
	</table>

 @endsection
