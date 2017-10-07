	<div class="col-sm-12">
		<div class="form-group col-sm-6">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class' =>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group col-sm-6">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email',null,['class' =>'form-control','placeholder'=>'Ingresa el correo del usuario'])!!}
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group col-sm-6">
			{!!Form::label('Password:')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contraseña del usuario'])!!}
		</div>
	</div>
		