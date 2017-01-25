@extends('layouts.admin')
@section('content')

	<h1>Create Users</h1>
	{!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store','files' => true]) !!}

	<div class="form-group">
	{!! Form::label('name','Name :')!!}
	{!! Form::text('name', null, ['class'=>'form-control'])!!}
	</div>	

	<div class="form-group">
		{!! Form::label('email','Email :')!!}
		{!! Form::email('email', null, ['class'=>'form-control'])!!}
		</div>	

	<div class="form-group">
		{!! Form::label('status','Status :')!!}
		{!! Form::select('status',array(1 => 'Active' , 0 => 'Passive'), null,['class'=>'form-control'])!!}
		</div>	

	<div class="form-group">
		{!! Form::label('role_id','Role :')!!}
		{!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control'])!!}
		</div>	


		<div class="form-group">
			{!! Form::label('File','File :')!!}
			{!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
			</div>	

		<div class="form-group">
			{!! Form::label('pass','Password :')!!}
			{!! Form::password('password', ['class'=>'form-control'])!!}
			</div>	



	<div class="form-group">
	{!! Form::submit('Create User',['class' => 'btn btn-primary'])!!}
	</div>
	{!! Form::close()!!}

	@include('includes.form-error')

@endsection
