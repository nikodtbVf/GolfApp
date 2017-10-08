@extends('layouts.login')

@section('content')

	@if(Session::has('message'))
		@include('alerts.alert')
	@endif
	{!!Form::open(['route'=>'login.store','method'=>'POST'])!!}
		 
		<div class="form-group">
			{!!Form::label('Correo Electronico')!!}
			{!!Form::email('email',null,['class' =>'form-control','placeholder'=>'Ingresa tu correo electronico'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('contrasena','Contraseña')!!}
			{!!Form::password('password',null,['class' =>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
		</div>
		 {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		 		
	{!!Form::close()!!}
@stop
