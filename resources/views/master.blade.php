<html>
<head>
	<title>

		{{--Yield Title--}}
		@yield('title')

	</title>
</head>

<body>

	{{--Include all Includes--}}
	@include('includes.includes')

	{{--Yield Content--}}
	@yield('content')

</body>
</html>