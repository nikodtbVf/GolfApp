@extends('layouts.principal')

@section('content')
	<h1>LALALA</h1>
	@foreach($modules as $module)
		<div>
			
		</div>
		<tbody>
			<td>{{$module->numero}}</td>
			<td>{{$module->nombre}}</td>\
			<!-- Asignar Tiempo / Cancelar-->
			<td>{!!link_to_route('uso.edit', $title = 'Editar', $parameters = $module->id, $attributes = ['class'=> 'btn btn-primary'])!!}</td>		
		</tbody>
	@endforeach
@stop