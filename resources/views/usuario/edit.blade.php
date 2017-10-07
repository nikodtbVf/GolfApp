@extends('layouts.admin')

@section('content')
	@if(count($errors) > 0)
		@include('alerts.request')
	@endif
	
		{!!Form::model( $user,['route' => ['usuario.update',$user->id],'method' => 'PUT'])!!}
			@include('usuario.forms.user')
			<div class="col-sm-12">
				<div class="col-sm-1">
					{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
				</div>		
			</div>
		{!!Form::close()!!}
		<div class="col-sm-12">
			<div class="col-sm-1">
				{!!Form::open(['route' => ['usuario.destroy',$user->id],'method' => 'DELETE'])!!}	
					{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</div>
			
		</div>	
	
@stop