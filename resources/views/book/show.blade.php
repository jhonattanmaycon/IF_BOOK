<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $book->title }}</title>
</head>
<body>
    <h2>Livro: @if($book) {{ $book->title }} @endif</h2>

    @if ($book)
        <p>Titulo: {{ $book->title }}</p>
        <p>Autor:{{ $book->author }} </p>
        <p>Gênero: {{ $book->genre }}</p>
        <p>Ano: {{ $book->year }}</p>
		<p>Faixa Etária: {{ $book->age }}</p>
		<p>Sinopse: {{ $book->synopsis }}</p>
    @else
       <p> Não encontrado </p>
    @endif

    <a href="{{ route('livros.edit', ['livro'=>$book->id]) }}"> Editar</a>
    <a onclick="document.getElementById('form-destroy').submit(); return false;"> Excluir</a>
    <form action="{{ route('livros.destroy',['livro'=>$book->id]) }}" method="post" id="form-destroy">
        @csrf
        @method('delete')
    </form>

</body>
</html>