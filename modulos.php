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


    <title>Clientes</title>
  </head>
  <body>


<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
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
            <a class="nav-link" href="clientes.php">
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
            <a class="nav-link active" href="#">
              <span data-feather="layers"></span>
              Módulos
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h2>Módulos</h2>
        
      </div>
<!-- tabela -->
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/pagseguro.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Venda com toda segurança UOL. Ofereça várias formas de pagamento. Sem taxa de adesão. Aceite Débito e Crédito. 3 meses de Taxa 0% PagBank do PagSeguro.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Instalar</button>
                </div>
                <small class="text-muted">Versão: 1.1.13</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/serasa-score.jpg" alt="">
            <div class="card-body">
              <p class="card-text">O Serasa Score pode ajudar a mudar a sua vida financeira. <br>Facilite o seu acesso ao crédito com melhores parcelas e juros reduzidos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Instalar</button>
                </div>
                <small class="text-muted">Versão: 1.1.25</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/correios.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Empresa Brasileira de Correios e Telégrafos ou simplesmente Correios, é uma empresa pública federal responsável pela execução do sistema de envio e entrega de correspondências no Brasil.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Instalar</button>
                </div>
                <small class="text-muted">Versão: 3.1.8</small>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/paypal.jpg" alt="">
            <div class="card-body">
              <p class="card-text">Digitar números e dados pessoais a cada compra é coisa do passado. Proteção ao Vendedor. Compre com Segurança. Compras Internacionais.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Instalar</button>
                </div>
                <small class="text-muted">Versão: 1.0.23</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/visa.jpg" alt="">
            <div class="card-body">
              <p class="card-text">A Visa é especialista em desenvolver tecnologias de pagamento para pessoas e empresas. Venha conhecer as inovações Visa!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Instalar</button>
                </div>
                <small class="text-muted">Versão: 1.1.25</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/email-mkt.jpg" alt="">
            <div class="card-body">
              <p class="card-text">O email marketing é uma das ferramentas mais importantes de Marketing Digital na atualidade. É uma das melhores formas de gerar relacionamento .</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Instalar</button>
                </div>
                <small class="text-muted">Versão: 3.1.8</small>
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