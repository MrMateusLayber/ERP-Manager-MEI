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


    <title>Produtos</title>
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
            <a class="nav-link active" href="produtos.php">
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
        <h2>Produtos</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Semanal
          </button>
        </div>
      </div>
<!-- tabela -->
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Produto</th>
              <th>Informações adicionais</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="img/produtos/betoneira.png" alt="Betoneira"></td>
              <td><h3><strong>Betoneira 400 Litros 1 Traço Super 220v</strong></h3>
            <p><strong>Descrição:</strong>	A Betoneira 1 Traço Super da CSM possui capacidade para 400 Litros (com uma capacidade de mistura de 280 Litros) e potência do motor de 2CV na tensão 220V. É possível mudar a ligação do motor caso for usar na tensão 110V.  Eleita 12x a Melhor Betoneira do Brasil. A betoneira 1 Traço Super 400 Litros é adequada a obras de pequeno e médio porte. De fácil operação e transporte, proporciona maior produtividade e oferece uma excelente relação custo-benefício.</p>
            <br>
            <h4><strong>Valor: R$2.000,00</strong></h4>
            <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">Mais detalhes</button>
            </td>
            </tr>

            <tr>
              <td><img src="img/produtos/telha.png" alt="Telha"></td>
              <td><h3><strong>Telha Tropical 5mm 244x110cm</strong></h3>
            <p><strong>Descrição:</strong>	Oferece leveza e resistência com facilidade de manuseio. Possui fixação prática e estrutura de apoio simplificada, é extremamente econômica.</p>
            <br>
            <h4><strong>Valor: R$32,99</strong></h4>
            <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">Mais detalhes</button>
            </td>
            </tr>

            <tr>
              <td><img src="img/produtos/cimento.png" alt="Cimento"></td>
              <td><h3><strong>Cimento Todas As Obras 50kg</strong></h3>
            <p><strong>Descrição:</strong>	O Cimento Todas as Obras 50kg da Votorantim é um Cimento  de alta qualidade, que atende aos requisitos técnicos das normas ABNT, sendo indicada para a preparação de diversos tipos de obras, reboco, concreto convencional, contra pisos e lajes.
 O único com propriedades de Silicatos de cálcio, alumínio e ferro, trazendo maior resistência, aderência, elasticidade e economia.</p>
            <br>
            <h4><strong>Valor: R$19,99</strong></h4>
            <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModalScrollable">Mais detalhes</button>
            </td>
            </tr>
            
          </tbody>
        </table>


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Ficha Técnica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p>Largura (cm):	97,6</p>
            <p>Marca:	CSM</p>
            <p>Comprimento (cm):	165</p>
            <p>Peso (kg):	188</p>
            <p>Cor:	Amarelo</p>
            <p>Altura (cm):	145</p>
            <p>Garantia (mês):	6</p>
            <p>Conteúdo da Embalagem:	1 Betoneira</p>
            <p>Modelo:	Betoneira 400 Litros</p>
            <p>Atenção:	Nos casos que necessitem montagem e instalação o serviço não é incluso e é de inteira responsabilidade do cliente. Para garantia da correta montagem ou instalação do produto, utilize apenas técnicos especializados. Consulte: maodeobra.sp@cec.com.br, maodeobra.rj@cec.com.br.</p>
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