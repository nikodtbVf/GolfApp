@extends('layouts.admin')

@section('content')
	@if(count($errors) > 0)
		@include('alerts.request')
	@endif
	
	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
		 @include('usuario.forms.user')
		 <div class="col-sm-12">
		 	<div class="col-sm-6">
		 		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		 	</div>
		</div>		
	{!!Form::close()!!}
@stop