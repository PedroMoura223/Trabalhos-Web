<?php 

session_start();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="text/css" href="../img/icon.png">
  <title>Fortnite</title>
  <link rel="stylesheet" type="text/css" href="css/global.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">

</head>

<body>
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Entrar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

        <form method="post" action="../functions/login.php">

        <div class="md-form mb-5">
          <i class="fas fa-user  prefix grey-text"></i>
          <input type="text" name="usuario" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Usuário</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="senha" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-indigo">Login</button>
      </div>

    </form>

    </div>
  </div>
</div>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">


      <!-- Brand -->
      <div class="navbar-brand" target="_blank">
        <strong><img src="../img/logo.png" width="100"></strong>
     </div>


      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

      </button>

      <!-- Links -->

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
           <li class="nav-item">
        <a href="loja.php" class="nav-link" aria-haspopup="true" aria-expanded="false">Loja</a>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="planos.php">Planos</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">

        <?php 

        if (isset($_SESSION['usuario'])) {
          echo('
            <li class="nav-item">
            <a href="perfil.php" class="nav-link border border-light rounded">
              <i class="fas fa-user-circle mr-2"></i></i>Minha Conta
            </a>
          </li>
     
          <li class="nav-item" style="margin-left: 10px;">
            <a href="../functions/logout.php" class="nav-link border border-light rounded data-toggle="modal" data-target="#basicExampleModal">
              <i class="fas fa-sign-in-alt mr-2"></i>Sair
            </a>
          </li>
            ');
        } else {
          unset($_SESSION['usuario']);
          echo('
            <li class="nav-item" style="margin-left: 10px;">
          <li class="nav-item">
            <a href="#"  data-toggle="modal" data-target="#modalLoginForm" class="nav-link border border-light rounded
              target="_blank">
              <i class=""></i>Entrar
            </a>

          </li>
            ');
        }

         ?>
 
        </ul>

      </div>

    </div>

  </nav>

  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container">

      <h3 class="my-5 h3 text-center">Nosso planos</h3>

      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row text-center wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header">
              <h4>
                <strong>Free</strong>
              </h4>
            </div>

            <!--Card content-->
            <div class="card-body">

              <h3 class="card-title pricing-card-title mb-4">R$0
              </h3>

              <ol class="list-unstyled mb-4">
                <li>Acesso ao jogo completo
                  <i class="fas fa-check green-text ml-1"></i>
                </li>
                <hr>
                <li>Acesso a loja
                  <i class="fas fa-times red-text ml-1"></i>
                </li>
                <hr>
                <li>Acesso a loja VIP
                  <i class="fas fa-times red-text ml-1"></i>
                </li>
            
              </ol>
               
               <?php 
               if (!isset($_SESSION['usuario']) && !isset($_SESSION['conta'])) {
                 echo('
                  <a href="../index.php">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary waves-effect">Cadastre-se</button>
                  </a>');
                } else if(isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'Altere o Nível Da Sua Conta!')){
                  echo('
                  <a>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary waves-effect">Adiquirido</button>
                  </a>');
                } else {
                  echo('
                  <a href="atualizar.php">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary waves-effect">Você já está Cadastrado</button>
                  </a>');
                }
               ?>
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header">
              <h4>
                <strong>VIP</strong>
              </h4>
            </div>

            <!--Card content-->
            <div class="card-body">

              <h3 class="card-title pricing-card-title mb-4">R$20
               
              </h3>

              <ol class="list-unstyled mb-4">
                <li>Acesso ao jogo completo
                  <i class="fas fa-check green-text ml-1"></i>
                </li>
                <hr>
                <li>Acesso a loja
                  <i class="fas fa-check green-text ml-1"></i>
                </li>
                <hr>
                <li>Acesso a loja VIP
                  <i class="fas fa-times red-text ml-1"></i>
                </li>
              </ol>

              <?php 
               if (!isset($_SESSION['usuario']) && !isset($_SESSION['conta'])) {
                 echo('
                  <a href="../index.php">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary waves-effect">Cadastre-se</button>
                  </a>');
                } else if(isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'VIP')){
                  echo('
                  <a>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Adiquirido</button>
                  </a>');
                }else if(isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'MVP')){
                  echo('
                  <a>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Adiquirido</button>
                  </a>');
                } 
                else {
                  echo('
                  <a href="confirmacompraDoVip.php">
                    <button type="button" class="btn btn-lg btn-block btn-primary">COMPRAR</button>
                  </a>');
                }
               ?>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header">
              <h4>
                <strong>MVP</strong>
              </h4>
            </div>

            <!--Card content-->
           

            <!--Card content-->
            <div class="card-body">

              <h3 class="card-title pricing-card-title mb-4">R$50
               
              </h3>

              <ol class="list-unstyled mb-4">
                <li>Acesso ao jogo completo
                  <i class="fas fa-check green-text ml-1"></i>
                </li>
                <hr>
                <li>Acesso a loja
                  <i class="fas fa-check green-text ml-1"></i>
                </li>
                <hr>
                <li>Acesso a loja VIP
                  <i class="fas fa-check green-text ml-1"></i>
                </li>
              </ol>

              <?php 
               if (!isset($_SESSION['usuario']) && !isset($_SESSION['conta'])) {
                 echo('
                  <a href="../index.php">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary waves-effect">Cadastre-se</button>
                  </a>');
                } else if(isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'MVP')){
                  echo('
                  <a>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Adiquirido</button>
                  </a>');
                } else {
                  echo('
                  <a href="confirmacompraDoVip.php">
                    <button type="button" class="btn btn-lg btn-block btn-primary">COMPRAR</button>
                  </a>');
                }
               ?>
            
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-5 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://www.epicgames.com/fortnite/pt-BR/download" target="_blank"
        role="button">Download do jogo
        <i class="fas fa-download ml-2"></i>
      </a>
      
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">

      <a href="https://twitter.com/Brasil_Fortnite?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/channel/UClG8odDC8TS6Zpqk9CGVQiQ" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

  
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"></a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>

