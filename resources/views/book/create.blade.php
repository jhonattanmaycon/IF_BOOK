<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Livro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
  <div class="container bootstrap snippets bootdey mt-3">
    <h1 class="text-primary"><span class="glyphicon glyphicon-user"></span>Crie um livro amado admin!</h1>
      <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Adicione a capa do livro</h6>
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Tenha <strong>cuidado</strong> para não fazer besteira!
        </div>
        <h3>Informações do livro</h3>
        
        <form class="form-horizontal" role="form" method="post" action="{{ route('livros.store') }}">
          @csrf
          <div class="form-group">
            <label class="col-lg-3 control-label">Titulo:</label>
            <div class="col-lg-8">
              <input class="form-control" name="title" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Autor:</label>
            <div class="col-lg-8">
              <input class="form-control" name="author" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gênero:</label>
            <div class="col-lg-8">
              <input class="form-control" name="genre" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Ano:</label>
            <div class="col-lg-8">
              <input class="form-control" name="year" type="number" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Faixa Etária:</label>
            <div class="col-lg-8">
              <input class="form-control" name="age" type="number" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Sinopse:</label>
            <div class="col-lg-8">
              <textarea name="synopsis" class="form-control"></textarea>
            </div>
          </div>
            <input type="submit" name="submit" value="Salvar Alterações" class="btn btn-primary mt-3">
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
</html>