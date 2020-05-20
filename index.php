<?php 

session_start();

 ?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fortnite</title>
  <link rel="stylesheet" type="text/css" href="css/global.css">
  <link rel="shortcut icon" href="img/icon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="script.js" rel="javascript">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">

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


        <form method="post" action="functions/login.php">

        <div class="md-form mb-5">
          <i class="fas fa-user  prefix grey-text"></i>
          <input type="text" name="usuario" id="defaultForm-email" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Usuário</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="senha" id="defaultForm-pass" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo" type="submit">Login</button>
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
        <strong><img src="img/logo.png" width="100"></strong>
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
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
           <li class="nav-item">
        <a href="view/loja.php" class="nav-link" aria-haspopup="true" aria-expanded="false">Loja</a>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="view/planos.php">Planos</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">

        <?php 

        if (isset($_SESSION['usuario'])) {
          echo('
            <li class="nav-item">
            <a href="view/perfil.php" class="nav-link border border-light rounded">
              <i class="fas fa-user-circle mr-2"></i></i>Minha Conta
            </a>
          </li>
     
          <li class="nav-item" style="margin-left: 10px;">
            <a href="functions/logout.php" class="nav-link border border-light rounded data-toggle="modal" data-target="#basicExampleModal">
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

  <!-- Full Page Intro -->

  <div class="view full-page-intro" style="background-image: url('img/img1.jpg'); background-repeat: no-repeat; background-size: cover;">
<br>
    <!-- Mask & flexbox options-->
<br>
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
<br>
      <!-- Content -->
       <li class="nav-item" style="margin-left: 10px; color: rgb(119,114,12);">
        <li class="nav-item" style="margin-left: 10px; color: rgb(87,83,9);">
        
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold">Vitória Royale!</h1>

            <hr class="hr-light">

            <p>
              <strong style="font-size: 23px;">O melhor battle royale do mercado de games.</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong style="font-size:20px;">Venha disfrutar do nosso jogo e tenha experiências incríveis,podendo obter produtos exclusivos em nossa loja e muito mais.</strong>
            </p>

            <a target="_blank" href="https://www.epicgames.com/fortnite/pt-BR/download" class="btn btn-indigo btn-lg">Baixe grátis aqui
             <i class="fas fa-download ml-2"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            
            <?php
                if (!isset($_SESSION['usuario'])) {
                  echo('
            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form name="" action="model/CREATE_user.php" method="POST">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Cadastro</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                   <i class="fas fa-envelope prefix" style="color: rgb(154,163,165);"></i>
                    <input type="email" id="email" name="email" class="form-control" required="">
                    <label for="form3">E-mail</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-user prefix" style="color: rgb(154,163,165);"></i>
                    <input type="text" id="usuario" name="usuario" class="form-control" required="">
                    <label for="form2">Usuário</label>
                  </div>

                 <div class="md-form">
                    <i class="fas fa-key prefix" style="color: rgb(154,163,165);"></i>
                    <input type="password" id="senha" name="senha" class="form-control" required="">
                    <label for="form2">Senha</label>
                  </div>



                  <div class="text-center">
                    <button class="btn btn-indigo">Cadastro</button>
                   <!-- Button trigger modal -->

                  </div>

                </form>
                <!-- Form -->


              </div>

            </div>
            <!--/.Card-->
            ');
                }
                ?>

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

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="img/temp.jpg" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Lançamento: Fortnite Capítulo 2</h3>
            <p>Venha já desfrutar de novas experiências em <strong>Fortnite</strong>,com mapa totalmente modificado,novas skins e um novo sistema de plataformas.</p>
            <p>Para mais informações visite nosso instagram. <a href="https://www.instagram.com/fortnite/">Clique aqui</a></p>
            <!--<p>Para mais informações visite nosso canal no Youtube. <a href="https://www.youtube.com/user/epicfortnite">Clique aqui</a></p>-->
            <!-- Main heading -->

            

            <!-- CTA -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

 

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="img/mundo.png" class="img-fluid z-depth-1-half" alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Atualização: Salve o Mundo</h3>
            <p>Com mapa e item personalizados,podendo equipar sua conta com as mais novas ilhas farmando ainda mais <strong>V-BUCKS</strong> tendo interações inimagináveis.</p>
            <p>Desbloqueie já o Salve o Mundo!</a></p>
            <!--<p>Para mais informações visite nosso canal no Youtube. <a href="https://www.youtube.com/user/epicfortnite">Clique aqui</a></p>-->
            <!-- Main heading -->

            

            <!-- CTA -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>

        <h3 class="h3 text-center mb-5">Fique sempre atualizado</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-info fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Informações</h5>
                <p class="grey-text">Fique por dentro de tudo que ocorre no jogo.</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-comments fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Conteúdos de sobra</h5>
                <p class="grey-text">Tenha em sua mão todo tipo de conteúdo de nosso jogo,como vídeos,lives e muito mais.
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-crown fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Campeonatos</h5>
                <p class="grey-text">Campeonatos sendo transmitidos ao vivo em nosso canal não perca se inscreva já.</p>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <p class="h5 text-center mb-4">Prévia: Fortnite Capítulo 2</p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JgPXMxW7zJk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: Not enough-->
      <section>

       
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
      © 2020 Copyright
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
