@extends('layouts.manage')
@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>View user details</h1>
			<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-xs">Edit User</a>
			<hr>
			<h3>Name</h3>
			<p>{{ $user->name }}</p>
			<h3>Email</h3>
			<p>{{ $user->email }}</p>
		</div>
	</div>
@stop