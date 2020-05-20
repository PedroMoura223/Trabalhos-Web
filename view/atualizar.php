<?php 

session_start();
if ((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['conta']) == true)) {
  unset($_SESSION['usuario']);
  unset($_SESSION['conta']);
  header('location:../index.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Fortnite</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
  	<link rel="shortcut icon" href="../img/icon.png">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<link href="../css/mdb.min.css" rel="stylesheet">
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

<br><br><br>
<!--Main layout-->
  <main class="mt-5 pt-3">
    <div class="container wow fadeIn">

      <!-- Heading -->
      
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" action="../model/UPDATE_user.php" method="POST">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                
                <!--Grid column-->

                <!--Grid column-->
                
                <!--Grid column-->

              </div>
              <!--Grid row-->
              <p class="h4 mb-4" style="text-align: center;">Informações</p>

              <div class="md-form mb-5">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email">E-mail</label>
              </div>


              <div class="md-form mb-5">
                <input type="text" id="usuario" name="usuario" class="form-control">
                <label for="address">Nome de Usuário</label>
              </div>


			<div class="md-form mb-5">
                <input type="text" id="senha" name="senha"  class="form-control">
                <label for="address">Senha</label>
              </div>

              

  			<select class="custom-select custom-select-sm" id="conta" name="conta">
          <option value="Altere o Nível Da Sua Conta!">Altere o Nível Da Sua Conta!</option>
  			<option value="mvp">MVP</option>
  			<option value="vip">VIP</option>
  			
  			</select>
  			<br><br>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Concluir alteração</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->


<!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/gaming/fortnite/?fbsource=1103&external_ref=game_search_unit" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/FortniteGame" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/user/epicfortnite" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://br.pinterest.com/search/pins/?q=fortnite&rs=typed&term_meta[]=fortnite%7Ctyped" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      Ysmael Rodrigues e Lucas Brito
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
  
  </script>
</body>
</html>