<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/signin.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <form class="form-signin">
      <img class="mb-4" src="img/logo-novais.png" alt="" width="" height="">
      <h1 class="h3 mb-3 font-weight-normal">Esqueci minha senha:</h1>
      <input type="email" id="inputEmail" class="form-control" placeholder="endereco@email.com.br" required autofocus>
      <div class="checkbox mb-3">
        <!-- <label>
          <input type="checkbox" value="remember-me"> Lembrar-me
        </label> -->
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" data-toggle="modal" data-target="#exibirConfirmacao">Enviar</button><br>
      <!-- <p class="mt-5 mb-3 text-muted">&copy; Novais - 2019</p> -->
    </form>
    </div>


<!-- Modal -->
<div class="modal fade" id="exibirConfirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Senha enviada com sucesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Acesse sua caixa de entrada para visualizar a nova senha.
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-secondary" >Fechar</a>
      </div>
    </div>
  </div>
</div>

    <!-- exibir modal  -->
    <script>
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>