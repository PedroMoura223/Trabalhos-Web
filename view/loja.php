<?php 

session_start();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fortnite</title>
  <link rel="shortcut icon" href="../img/icon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../css/style.min.css" rel="stylesheet">
  <link href="../css/global.css" rel="stylesheet">
  
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

  
<div class="view full-page-intro" style="background-image: url('../img/123.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold" style="font-family: Segoe UI Symbol;">LOJA PADRÃO</h1>

            <hr class="hr-light">

            <p>
              <strong style="font-size: 20px;">Você vai ver produtos interessantes aqui também.</strong>
            </p>


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
  <main>
    <div class="container">

     
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4" style="margin-top: 60px;">

        <!--Grid row-->
        <div class="row wow fadeIn">
            
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/controle1.png" class="card-img-top"
                  alt="">
               
                  <div class="mask rgba-white-slight"></div>
               
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Controle PS4 - Fortnite</a>
                    <span class="badge badge-pill primary-color">bestseller</span>

                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$120</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'VIP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo VIP ou MVP</button> </a>');
                }

                 ?>
                  

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/monopoly-_fortinite.png" class="card-img-top"
                  alt="">
                
                  <div class="mask rgba-white-slight"></div>
                
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Monopoly - Fortnite
                      <span class="badge badge-pill primary-color">bestseller</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$120</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'VIP' || $_SESSION['conta'] == 'MVP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo VIP ou MVP</button> </a>');
                }

                 ?>


              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->


          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/brinquedo.jpg"  class="card-img-top"
                  alt="">
                
                  <div class="mask rgba-white-slight"></div>
                
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Bonecos Fortnite
                      <span class="badge badge-pill primary-color">bestseller</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$300</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'VIP' || $_SESSION['conta'] == 'MVP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo VIP ou MVP</button> </a>');
                }

                 ?>


              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card" style="height: 446px;">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/camisa.jpg" class="card-img-top"
                  alt="">
                
                  <div class="mask rgba-white-slight"></div>
                
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">Camisa - Black Knight
                      <span class="badge badge-pill primary-color">bestseller</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$60</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'VIP' || $_SESSION['conta'] == 'MVP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo VIP ou MVP</button> </a>');
                }

                 ?>


              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          </div>          
        </div>
     
        


      </section>
      <!--Section: Products v.3-->

    </div>
    
    <div class="container">

     
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4" style="margin-top: 60px;">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card" style="height: 400px;">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/vbucks.png" style="padding-top: 60px;" class="card-img-top"
                  alt="">
               
                  <div class="mask rgba-white-slight"></div>
               
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">50 V-Bucks</a>
                    <span class="badge badge-pill primary-color">bestseller</span>

                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$50</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'MVP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo MVP</button> </a>');
                }

                 ?>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card" style="height: 400px;">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/vbucks100.png" style="padding-top: 50px;" class="card-img-top"
                  alt="">
                
                  <div class="mask rgba-white-slight"></div>
                
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">100 V-Bucks
                      <span class="badge badge-pill primary-color">bestseller</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$100</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'MVP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo MVP</button> </a>');
                }

                 ?>


              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->


          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card" style="height: 400px;">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/vbucks500.png" style="padding-top: 20px;"  class="card-img-top"
                  alt="">
                
                  <div class="mask rgba-white-slight"></div>
                
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">500 V-Bucks
                    
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$500</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'MVP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo MVP</button> </a>');
                }

                 ?>


              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card" style="height: 400px;">

              <!--Card image-->
              <div class="view overlay">
                <img src="../img/supremevbucks.png" class="card-img-top"
                  alt="">
                
                  <div class="mask rgba-white-slight"></div>
                
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">1000+ V-Bucks
                    
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$1000</strong>
                </h4>
                <?php 
                if (isset($_SESSION['usuario']) && ($_SESSION['conta'] == 'MVP')) {
                  echo('<a href="confirmarcompra.php"> <button type="button" class="btn btn-outline-primary waves-effect">Comprar</button> </a>');
                } else {
                  echo('<a> <button type="button" class="btn btn-outline-primary waves-effect">Exclusivo MVP</button> </a>');
                }

                 ?>


              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

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
