<?php 

session_start();
if ((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['conta']) == true)) {
  unset($_SESSION['usuario']);
  unset($_SESSION['conta']);
  header('location:../index.php');
}

include '../model/read.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fortnite</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/icon.png">
  <link href="../css/global.css" rel="stylesheet">
  
</head>

<body>


<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quer sair mesmo ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Você sairá da sua conta, quer mesmo sair ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <a href="../index.php"><button type="button" class="btn btn-primary">Sair</button></a>
      </div>
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

  
<div class="view full-page-intro" style="background-image: url('../img/das.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">MINHA CONTA</h1>

            <hr class="hr-light">

           


          </div>
          <!--Grid column-->

          
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container">

<div class="row justify-content-center">

<table class="table">




<tr>

<thead><th><b>E-mail</b></th></thead>
<td><?php echo($email); ?></td>
</tr>
<tr>

<thead><th><b>Usuário</b></th></thead>
<td><?php echo($usuario); ?></td>
</tr>
<tr>

<thead><th><b>Senha</b></th></thead>
<td><?php echo($senha); ?></td>
</tr>

<thead><th><b>Tipo de conta</b></th></thead>
<td><?php if  
         ($conta == "Altere o Nível Da Sua Conta!"){
          echo "Free";
                        };

          if  
         ($conta == "VIP"){
           echo "VIP";
                        };    


           if  
         ($conta == "MVP"){
           echo "MVP";
                        };               
 ?></td>
</tr>

<thead><th><b>Seu ID</b></th></thead>
<td><?php echo($id); ?></td>
</tr>




</table>
<hr>
<div style="margin-top:40px;">
<a href="atualizar.php" class="btn btn-info a1">Atualizar</a>
<a href="../model/delete.php" class="btn btn-danger a2" onclick="return confirm('Tem certeza que quer realmente apagar a sua conta?')">Deletar</a>
</div>


</div>



  
       

         
    </div>
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
      © 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Ysmael e Lucas</a>
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
