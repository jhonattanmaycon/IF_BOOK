<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Criar Post</title>
</head>
<body>
	<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<input type="file" name="image"> <br>
		<input type="text" name="message">
	</form>
</body>
</html>									