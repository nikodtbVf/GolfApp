@extends('layouts.principal')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 <strong>Notificacion:</strong> {{Session::get('message')}}
</div>
@endif

@section('content')
	<div class="col-sm-12">
		<div class="col-sm-8">
			<table class="table">
				<thead>
					<th>Numero</th>
					<th>Nombre</th>
					<th>Operaciones</th>
				</thead>
				@foreach($modules as $module)
					<tbody>
							<td>{{$module->numero}}</td>
							<td>{{$module->nombre}}</td>
							<td>{!!link_to_route('modulo.edit', $title = 'Editar', $parameters = $module->id, $attributes = ['class'=> 'btn btn-primary'])!!}</td>		
					</tbody>
				@endforeach
			</table>
			{!!$modules->render()!!}
		</div>	
		
	</div>	
@stop