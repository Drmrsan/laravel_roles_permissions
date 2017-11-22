@extends('layouts.manage')
@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>Edit Users</h1>
			<hr>
				<form action="{{ route('users.update', $user->id) }}" method="POST">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
					</div>
{{-- 					<div class="form-group">
						<label for="">Password</label>
						<input type="text" class="form-control" name="password" id="password">
						<input type="checkbox" :checked="true">
						<label for="">Auto generate password</label>
					</div> --}}
					<button class="btn btn-success">Update User</button>

				</form>		
			</div>
	</div>
@stop
