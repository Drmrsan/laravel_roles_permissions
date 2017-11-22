@extends('layouts.manage')
@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>Manage Users</h1>
			<a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
			<hr>
			<div class="panel panel-default">
				<table class="table">
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<th>{{ $user->id }}</th>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->created_at->toFormattedDateString() }}</td>
								<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-xs">Edit</a>
									<a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-xs">Show</a>	
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{{ $users->links() }}
		</div>
	</div>
@stop