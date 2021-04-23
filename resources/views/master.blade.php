<!-- View Master - Base para outras View construidas por extenção desta. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>

<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">


	<style type="text/css">
		.page-item {color: blue;}
		.active {color: blue;}
	</style>

<h3 style="text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5)" align="center"><img src="https://laravel.com/img/logomark.min.svg" alt="laravel" width="60" height="60" style="max-width:100%;align-content:center;"></img>TP-Larvel</h3>
</head>
<body>

	<!-- As views filhas incluem conteúdo aqui e no outro Arrobayield acima -->
	@yield('corpo')

</body>
	<footer  class="mt-auto text-black-50" position= absoluted>
    Trabalho desenvolvido pelos alunos: Cássio Félix e Daniel Leite
	</footer>
</html>