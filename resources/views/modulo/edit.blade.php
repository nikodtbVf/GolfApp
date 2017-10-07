@extends('layouts.principal')

@section('content')
	@if(count($errors) > 0)
		@include('alerts.request')
	@endif
	
		{!!Form::model($module,['route' => ['modulo.update',$module->id],'method' => 'PUT'])!!}
			@include('modulo.forms.module')
			<div class="col-sm-12">
				<div class="col-sm-1">
					{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				</div>		
			</div>
		{!!Form::close()!!}
		<div class="col-sm-12">
			<div class="col-sm-1">
				{!!Form::open(['route' => ['modulo.destroy',$module->id],'method' => 'DELETE'])!!}	
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</div>
			
		</div>	
	
@stop