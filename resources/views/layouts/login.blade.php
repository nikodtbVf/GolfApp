<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<!-- {!!Html::style('css/bootstrap.min.css')!!}-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

	<link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
	<link href="{{asset("css/modulos.css")}}" rel="stylesheet">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>

	
	@yield('content')

	{!!Html::script('js/jquery.min.js')!!}
	{!!Html::script('js/tether.min.js')!!}
	{!!Html::script('js/bootstrap.min.js')!!}
</body>
</html>


