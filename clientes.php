<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js">
    <link src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js">
    <link src="js/dashboard.js">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Clientes</title>
  </head>
  <body>


<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" >
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="img/logo-topo.png"></a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="index.php">Sair do sistema</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Painel Administrativo</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="home"></span>
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="clientes.php">
              <span data-feather="file"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.php">
              <span data-feather="shopping-cart"></span>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vendas.php">
              <span data-feather="users"></span>
              Vendas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="entregas.php">
              <span data-feather="bar-chart-2"></span>
              Entregas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="modulos.php">
              <span data-feather="layers"></span>
              Módulos
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h2>Clientes</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCadastrar"><i class="fas fa-user-plus"></i></button>
        </div>
        <div class="btn-group mr-2">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalEditar"><i class="fas fa-user-edit"></i></button>
        </div>
        <div class="btn-group mr-2">
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalExcluir"><i class="fas fa-user-times"></i></button>
        </div>
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>

        </div>
      </div>
<!-- tabela -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Todos</th>
              <th>Código</th>
              <th>Nome</th>
              <th>Empresa</th>
              <th>Total de compras</th>
              <th>E-mail</th>
              <th>Contato</th>
              <th>Score Serasa</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              </div></td>
              <td>00001</td>
              <td><a href="#" data-toggle="modal" data-target="#exampleModal">Mateus Layber</a></td>
              <td>ipsum</td>
              <td><a href="#" data-toggle="modal" data-target="#exampleModalCompras">R$ 6.299,90</a></td>
              <td>mateus@layber.com</td>
              <td>(11)90000-0000</td>
              <td><span class="badge badge-success">Baixo: 700-1000</span></td>
            </tr>
            <tr>
              <td><div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              </div></td>
              <td>00002</td>
              <td>Dominique Vieira</td>
              <td>consectetur</td>
              <td>R$ 9.990,00</td>
              <td>dominique@vieira.com</td>
              <td>(11)90000-0000</td>
              <td><span class="badge badge-warning">Médio: 300-700</span></td>
            </tr>
            <tr>
              <td><div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              </div></td>
              <td>00003</td>
              <td>Gabriel Bispo</td>
              <td>established</td>
              <td>R$ 9.990,00</td>
              <td>gabriel@bispo.com</td>
              <td>(11)90000-0000</td>
              <td><span class="badge badge-success">Baixo: 700-1000</span></td>
            </tr>
            <tr>
              <td><div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              </div></td>
              <td>00004</td>
              <td>Angelo Novais</td>
              <td>containing</td>
              <td>R$ 9.990,00</td>
              <td>angeloa@novais.com</td>
              <td>(11)90000-0000</td>
              <td><span class="badge badge-warning">Médio: 300-700</span></td>
            </tr>
            <tr>
              <td><div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              </div></td>
              <td>00005</td>
              <td>Alex Boccia</td>
              <td>undoubtable</td>
              <td>R$ 9.990,00</td>
              <td>alex@boccia.com</td>
              <td>(11)90000-0000</td>
              <td><span class="badge badge-danger">Alto: 0-300</span></td>
            </tr>
            <tr>
              <td><div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              </div></td>
              <td>00005</td>
              <td>Ítalo Govêa</td>
              <td>undoubtable</td>
              <td>R$ 9.990,00</td>
              <td>italo@govea.com</td>
              <td>(11)90000-0000</td>
              <td><span class="badge badge-danger">Alto: 0-300</span></td>
            </tr>
            <tr>
              <td><div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              </div></td>
              <td>00005</td>
              <td>Gerson Fagundes</td>
              <td>undoubtable</td>
              <td>R$ 9.990,00</td>
              <td>gerson@fagundes.com</td>
              <td>(11)90000-0000</td>
              <td><span class="badge badge-danger">Alto: 0-300</span></td>
            </tr>
          </tbody>
        </table>

<!-- Modal dados cliente -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dados cadastrais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Nome:</strong> Mateus Layber</p>
        <p><strong>CPF/CNPJ:</strong> 22299988800</p>
        <p><strong>Empresa:</strong> Pessoa física</p>
        <p><strong>Endereço:</strong> Rua Projeto Novais, Nº 300</p>
        <p><strong>Bairro:</strong>Jardim Primavera</p>
        <p><strong>Complemento:</strong> Sobrado</p>
        <p><strong>CEP:</strong> 07000-100</p>
        <p><strong>Cidade:</strong> Guarulhos</p>
        <p><strong>UF:</strong> SP</p>
        <p><strong>País:</strong> Brasil</p>
        <p><strong>Telefone residêncial:</strong>  (11) 90000-0000</p>
        <p><strong>Celular:</strong> (11) 90000-0000</p>
        <p><strong>E-mail:</strong> mateus@layber.com</p>
        <p><strong>Score Serasa:</strong> <span class="badge badge-success">Baixo: 700-1000</span></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Cadastrar cliente -->
<div class="modal fade" id="exampleModalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Novo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Nome:</strong> Mateus Layber</p>
        <p><strong>CPF/CNPJ:</strong> 22299988800</p>
        <p><strong>Empresa:</strong> Pessoa física</p>
        <p><strong>Endereço:</strong> Rua Projeto Novais, Nº 300</p>
        <p><strong>Bairro:</strong>Jardim Primavera</p>
        <p><strong>Complemento:</strong> Sobrado</p>
        <p><strong>CEP:</strong> 07000-100</p>
        <p><strong>Cidade:</strong> Guarulhos</p>
        <p><strong>UF:</strong> SP</p>
        <p><strong>País:</strong> Brasil</p>
        <p><strong>Telefone residêncial:</strong>  (11) 90000-0000</p>
        <p><strong>Celular:</strong> (11) 90000-0000</p>
        <p><strong>E-mail:</strong> mateus@layber.com</p>
        <p><strong>Score Serasa:</strong> <span class="badge badge-success">Baixo: 700-1000</span></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Editar cliente -->
<div class="modal fade" id="exampleModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Nome:</strong> Mateus Layber</p>
        <p><strong>CPF/CNPJ:</strong> 22299988800</p>
        <p><strong>Empresa:</strong> Pessoa física</p>
        <p><strong>Endereço:</strong> Rua Projeto Novais, Nº 300</p>
        <p><strong>Bairro:</strong>Jardim Primavera</p>
        <p><strong>Complemento:</strong> Sobrado</p>
        <p><strong>CEP:</strong> 07000-100</p>
        <p><strong>Cidade:</strong> Guarulhos</p>
        <p><strong>UF:</strong> SP</p>
        <p><strong>País:</strong> Brasil</p>
        <p><strong>Telefone residêncial:</strong>  (11) 90000-0000</p>
        <p><strong>Celular:</strong> (11) 90000-0000</p>
        <p><strong>E-mail:</strong> mateus@layber.com</p>
        <p><strong>Score Serasa:</strong> <span class="badge badge-success">Baixo: 700-1000</span></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
      </div>
    </div>
  </div>
</div>


<!-- Excluir cliente -->
<div class="modal fade" id="exampleModalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Nome:</strong> Mateus Layber</p>
        <p><strong>CPF/CNPJ:</strong> 22299988800</p>
        <p><strong>Empresa:</strong> Pessoa física</p>
        <p><strong>Endereço:</strong> Rua Projeto Novais, Nº 300</p>
        <p><strong>Bairro:</strong>Jardim Primavera</p>
        <p><strong>Complemento:</strong> Sobrado</p>
        <p><strong>CEP:</strong> 07000-100</p>
        <p><strong>Cidade:</strong> Guarulhos</p>
        <p><strong>UF:</strong> SP</p>
        <p><strong>País:</strong> Brasil</p>
        <p><strong>Telefone residêncial:</strong>  (11) 90000-0000</p>
        <p><strong>Celular:</strong> (11) 90000-0000</p>
        <p><strong>E-mail:</strong> mateus@layber.com</p>
        <p><strong>Score Serasa:</strong> <span class="badge badge-success">Baixo: 700-1000</span></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal histórico de compras -->
<div class="modal fade" id="exampleModalCompras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Histórico de Compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Pedido:</strong> A000001</p>
        <p><strong>Produto:</strong> Betoneira 400 Litros 1 Traço Super 220v</p>
        <p><strong>Data:</strong> 26/05/2019</p>
        <div class="row">
        <div class="col-sm"><strong>Valor:</strong></div>
        <div class="col-sm"><p class="text-right"><strong>R$2.999,90</strong></p></div>
        </div>
        <hr>

        <p><strong>Pedido:</strong> A000005</p>
        <p><strong>Produto:</strong> Telha Tropical 5mm 244x110cm</p>
        <p><strong>Data:</strong> 25/05/2019</p>
        <div class="row">
        <div class="col-sm"><strong>Valor:</strong></div>
        <div class="col-sm"><p class="text-right"><strong>R$3.300,00</strong></p></div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm"><h5><strong>Total:</strong></h5></div>
        <div class="col-sm"><h5 class="text-right"><strong>R$6.299,90</strong></h5></div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



      </div>
    </main>
  </div>
</div>






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