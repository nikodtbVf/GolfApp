@extends('layouts.admin')

@section('content')
	@if(count($errors) > 0)
		@include('alerts.request')
	@endif
	
	{!!Form::open(['route'=>'modulo.store','method'=>'POST'])!!}
		 @include('modulo.forms.module')
		 <div class="col-sm-12">
		 	<div class="col-sm-6">
		 		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		 	</div>
		</div>		
	{!!Form::close()!!}
@stop