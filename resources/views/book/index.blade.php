<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Livros</title>
</head>
<body>
 	<a href="{{ route('livros.create') }}"><button>Criar Livro</button></a>
<div class="container">
	@if(count($book))
		@for($i = 0; $i < count($book); $i++)
			<img src="{{asset('storage/app/public/imgcapas/{ $book[$i]->cover }')}}" alt="">
			<p>Título: {{ $book[$i]->title }}</p>
			<p>Autor: {{ $book[$i]->author}}</p>
			<p>Gênero: {{ $book[$i]->genre }}</p>
			<p>Ano: {{ $book[$i]->year }}</p>
			<p>Faixa Etária: {{ $book[$i]->age }}</p>
			<p>Sinopse: {{ $book[$i]->synopsis }}</p>
			<a href="{{ route('livros.show', ['livro'=>$book[$i]->id]) }}"><button>Ver</button></a> 
			<hr>
		@endfor
	@endif
</div>
</body>
</html>