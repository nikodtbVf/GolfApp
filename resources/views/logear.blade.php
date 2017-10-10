@extends('layouts.login')

@section('content')

	@if(Session::has('message'))
		@include('alerts.alert')
	@endif
	{!!Form::open(['route'=>'login.store','method'=>'POST'])!!}
		<center class="centrado">
			<div class="col-sm-6">
				<strong>
					{!!Form::label('Correo Electrónico')!!}
				</strong>			
			</div>
			<div class="col-sm-5">
				{!!Form::email('email',null,['class' =>'form-control','placeholder'=>'Ingresa tu correo electronico'])!!}
			</div>	
			<br>	
			<div class="col-sm-6">
				<strong>
					{!!Form::label('contrasena','Contraseña')!!}
				</strong>						
			</div>
			<div class="col-sm-5">
				{!!Form::password('password',['class' =>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
			</div>
			<br>
			<div class="col-sm-6 form-group">
				{!!Form::submit('Iniciar Sesión',['class'=>'btn btn-primary'])!!}
			</div>
		</center> 		
	{!!Form::close()!!}
@stop
