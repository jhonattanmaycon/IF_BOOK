<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Avaliação</title>
</head>
<body>
	<form action="{{ route('att_rating', ['book'=> $book->id]) }}" method="post">
		@csrf
		@method('put')
		<input type="number" name="rating">
	
		<input type="submit" value="Avaliar">
	</form>
</body>
</html>