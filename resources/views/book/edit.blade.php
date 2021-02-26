<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar livro</title>
    <style>
        input {
            display: block;
            cursor: pointer;
        }
    </style>
        <script>
          var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
              URL.revokeObjectURL(output.src) // free memory
            }
          };
        </script>
</head>
<body>

    Editar Livro - @if($book) {{ $book->id }} @endif
    <form action="{{route('livros.update',['livro'=>$book->id])}}" method="post">
        @csrf
        @method('put')

       <input type="file" accept="image/*" name="cover" onchange="loadFile(event)">
        <img id="output" width="250px" />

        <br>

        <label for="title">Título:</label>
        <input type="text" name="title" value={{$book->title}} >

        <label for="author">Autor:</label>
        <input type="text" name="author" value={{ $book->author }}>

        <label for="genre">Gênero:</label>
        <input type="text" name="genre" value={{ $book->genre }}>

        <label for="year">Ano do livro:</label>
        <input type="number" name="year" value={{ $book->year }} >

        <label for="age">Faixa Etária:</label>
        <input type="number" name="age" value={{ $book->age }} >
        <label for="synopsis">Sinopse:</label>
        <textarea name="synopsis"> {{ $book->synopsis }} </textarea>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>

