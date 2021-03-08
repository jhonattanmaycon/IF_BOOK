<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Perfil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
  <div class="container bootstrap snippets bootdey mt-3">
    <h1 class="text-primary"><span class="glyphicon glyphicon-user"></span>Edite seu perfil</h1>
      <hr>

        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{ route('perfil.update', ['id'=>$user->id]) }}">
          @csrf
          @method('put')
  <div class="row">

      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <label for="cover">Imagem de perfil</label>
          <img id="output" width="250px">
          <input type="file" accept="image/*" class="form-control" name="photo" onchange="loadFile(event)">

        <br>
        </div>
      </div>
      
      <!-- edit form column -->
     {{--  <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div> --}}
        <h3>Informações pessoais</h3>
        

          <div class="form-group">
            <label class="col-lg-3 control-label">Nome:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="{{ $user->name }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Cidade:</label>
            <div class="col-lg-8">
              <input class="form-control" name="cidade" type="text" value="{{ $user->city }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Idade:</label>
            <div class="col-lg-8">
              <input class="form-control" name="idade" type="text" value="{{ $user->years }}">
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


