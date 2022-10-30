<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Телефонный справочник</title>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
		<a class="navbar-brand" href="{{route('home')}}">Телефонный справочник</a>
	</nav>

	<div class="container">
		
		<div class="row">
			
			<div class="col-md-12">

				<form method="GET" action="{{route('search')}}">
					<div class="form-row">
						<div class="form-group col-md-10">
							<input type="text" class="form-control" id="s" name="s" placeholder="Search...">
						</div>
						<div class="form-group col-md-2">
							<button type="submit" class="btn btn-primary btn-block">Search</button>
						</div>
					</div>
					
				</form>

			</div><!-- ./col-md-12-->

		</div><!-- ./row-->

		<div class="row mt-3 mb-3">
			<div class="col-md-12">

                @yield('content')  <!--подключаем фрагмент кода, дабы вынести повторение кода-->

			</div><!-- ./col-md-12-->

		</div><!-- ./row-->

	</div><!-- ./container-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


