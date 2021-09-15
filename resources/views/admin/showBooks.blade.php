<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Livros</title>
</head>
<body>
	<h3>Livros cadastrados:</h3>

	@foreach($showBooks as $showBook)

		{{ $showBook->title }} <br>

	@endforeach

</body>
</html>