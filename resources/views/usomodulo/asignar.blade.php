@extends('layouts.principal')

@section('content')
	{!!Form::open(['route'=>'uso.store','method'=>'POST'])!!}
		<div class="col-sm-12">
			<div class="col-sm-6">
				<label>Módulo a Asignar Tiempo:</label>
				<label class="disponible">
					{{$modulo->nombre}}
				</label>
			</div>	
		</div>

		<div class="col-sm-12">
			<div class="form-group col-sm-4">
				{!!Form::label('Numero de Modulo')!!}
				{!!Form::number('numero',$modulo->numero,['class' =>'form-control','placeholder'=>'Ingresa la cantidad de tiempo para el módulo'])!!}
			</div>
		</div>

		<div class="col-sm-12">
			<div class="form-group col-sm-4">
				{!!Form::label('Tiempo a Asignar en minutos:')!!}
				{!!Form::number('minutos',null,['class' =>'form-control','placeholder'=>'Ingresa la cantidad de tiempo para el módulo'])!!}
			</div>
		</div>
		 <div class="col-sm-12">
		 	<div class="col-sm-6">
		 		{!!Form::submit('Agregar',['class'=>'btn btn-primary','onclick'=>"return confirm('Estás seguro de que deseas asignarle tiempo a este módulo?')"])!!}
		 	</div>
		</div>		
	{!!Form::close()!!}
@stop