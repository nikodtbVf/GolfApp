@extends('layouts.principal')

@section('content')
	@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 <strong>Notificacion:</strong> {{Session::get('message')}}
		</div>
	@endif
		
	@for ($i = 0; $i < ceil(count($modules)/3); $i++) 
		<?php
			$j = $i*3
		?>
		<div class="col-sm-12 elementsdiv">
			<div class="col-sm-4 divborder separar">
				@if($j < count($modules))		
					<center>
						<label class="elementsdiv titulo-modulo">
							{{$modules[$j]->nombre}}
						</label>			
						<img class="img-responsive img-rounded center-block " src="{{URL::asset('image/golf.png')}}" width="100" height="100"> 
							@if($modules[$j]->status == 0)
								<label class="elementsdiv disponible">
									Disponible
								</label>
								<br>		
								<label class="color-hora">
									N.A
								</label>
								<br>
								<label class="color-hora">
									N.A
								</label>
							@else
								<label class="elementsdiv ocupado">
									Ocupado
								</label>
								<br>
								<label class="color-hora">
									
									Hora Inicio: {{$modules[$j]->init_time}}
								</label>
								<br>
								<label class="color-hora">
									 Hora Fin: {{$modules[$j]->end_time}}
								</label>							
							@endif			
						
						<br>
						<div class="botones">
							<a type="button" class="btn btn-primary btn-xs" href="{{url('/asignar')}}/{{$modules[$j]->id}}" data-toggle="tooltip" data-placement="top" title="Asignar Tiempo"
							@if($modules[$j]->status == 0)
								enabled
							@else
								disabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Asignar Tiempo</a>
						</div>
						<div class="botones">
							<a type="button" class="btn btn-danger btn-xs" href="{{url('/terminar')}}/{{$modules[$j]->id}}" data-toggle="tooltip" data-placement="top" title="Cancelar Tiempo"
							@if($modules[$j]->status == 0)
								disabled
							@else
								enabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"
							
							></span> Cancelar Tiempo</a>
						</div>	
						<div class="botones">
							<a type="button" class="btn btn-success btn-xs" href="{{url('/terminar')}}/{{$modules[$j]->id}}" data-toggle="tooltip" data-placement="top" title="Cancelar Tiempo"
							@if($modules[$j]->status == 0)
								disabled
							@else
								enabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"
							></span> Terminar Uso</a>
						</div>		
					</center>
				@endif 
			</div>
			<div class="col-sm-4 divborder separar">
				@if($j+1 < count($modules))
					<center>
						<label class="elementsdiv titulo-modulo">
							{{$modules[$j+1]->nombre}}
						</label>		
						<img class="img-responsive img-rounded center-block " src="{{URL::asset('image/golf.png')}}" width="100" height="100"> 
						@if($modules[$j+1]->status == 0)
								<label class="elementsdiv disponible">
									Disponible
								</label>
								<br>
								<label class="color-hora">
									N.A
								</label>	
								<br>	
								<label class="color-hora">
									N.A
								</label>
								
							@else
								<label class="elementsdiv ocupado">
									Ocupado
								</label>
								<br>
								<label class="color-hora">
									{{$modules[$j+1]->init_time}}
								</label>
								<br>
								<label class="color-hora">
									{{$modules[$j+1]->end_time}}
								</label>
							@endif
						<br>
						<div class="botones">
							<a type="button" class="btn btn-primary btn-xs" href="{{url('/asignar')}}/{{$modules[$j+1]->id}}" data-toggle="tooltip" data-placement="top" title="Asignar Tiempo"
							@if($modules[$j+1]->status == 0)
								enabled
							@else
								disabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Asignar Tiempo</a>		
						</div>
						<div class="botones">
							<a type="button" class="btn btn-danger btn-xs" href="{{url('/cancelar')}}/{{$modules[$j+1]->id}}" data-toggle="tooltip" data-placement="top" title="Cancelar Tiempo"
							@if($modules[$j+1]->status == 0)
								disabled
							@else
								enabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cancelar Tiempo</a>
						</div>	
						<div class="botones">
							<a type="button" class="btn btn-success btn-xs" href="{{url('/terminar')}}/{{$modules[$j+1]->id}}" data-toggle="tooltip" data-placement="top" title="Cancelar Tiempo"
							@if($modules[$j+1]->status == 0)
								disabled
							@else
								enabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"
							></span> Terminar Uso</a>
						</div>	
					</center>	
				@endif 
			</div>
			<div class="col-sm-4 divborder separar">
				@if($j+2 < count($modules))
					<center>
						<label class="elementsdiv titulo-modulo">
							{{$modules[$j+2]->nombre}}
						</label>
						<img class="img-responsive img-rounded center-block " src="{{URL::asset('image/golf.png')}}" width="100" height="100"> 	
						@if($modules[$j+2]->status == 0)
							<label class="elementsdiv disponible">
								Disponible
							</label>
							<br>
							<label class="color-hora">
								N.A
							</label>
							<br>
							<label class="color-hora">
								N.A
							</label>
						@else
							<label class="elementsdiv ocupado">
								Ocupado
							</label>
							<br>
							<label class="color-hora">
								{{$modules[$j+2]->init_time}}
							</label>
							<br>
							<label class="color-hora">
								{{$modules[$j+2]->end_time}}
							</label>
						@endif
						<div class="botones">
							<a type="button" class="btn btn-primary btn-xs" href="{{url('/asignar')}}/{{$modules[$j+2]->id}}" data-toggle="tooltip" data-placement="top" title="Asignar Tiempo"
							@if($modules[$j+2]->status == 0)
								enabled
							@else
								disabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Asignar Tiempo</a>
						</div>
						<div class="botones">
							<a type="button" class="btn btn-danger btn-xs" href="{{url('/cancelar')}}/{{$modules[$j+2]->id}}" data-toggle="tooltip" data-placement="top" title="Cancelar Tiempo"
							@if($modules[$j+2]->status == 0)
								disabled
							@else
								enabled
							@endif><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Cancelar Tiempo</a>
						</div>
						<div class="botones">
							<a type="button" class="btn btn-success btn-xs" href="{{url('/terminar')}}/{{$modules[$j+2]->id}}" data-toggle="tooltip" data-placement="top" title="Cancelar Tiempo"
							@if($modules[$j+2]->status == 0)
								disabled
							@else
								enabled
							@endif
							><span class="glyphicon glyphicon-edit" aria-hidden="true"
							></span> Terminar Uso</a>
						</div>			
					</center>
				@endif  
			</div>	
		</div>

	@endfor
@stop