<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
  </script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Biblioteca</title>
  <style type="text/css">
  body {
    background-color: #f8f9fa;
    color: #f8f9fa;
  }
  </style>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="boxicons.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle">
      <i class="bx bx-menu " id="header-toggle"></i>
    </div>
    <div class="header_img">
      <img src="" alt="" />
    </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div id="tudo">
        <a href="#" class="nav_link active">
          <i class="bx bx-book-open nav_icon"></i>
          <span class="nav_logo-name">Biblioteca</span>
        </a>
        <div class="nav_list">
          <a href="index.php" class="nav_link active">
            <i class="bx bx-home nav_icon"></i>
            <span class="nav_name">Início</span>
          </a>
          <a class="nav_link active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bx bxs-city nav_icon"></i>
            <span class="nav_name">Bibliotecas </span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="bx bx-list-ul" class="dropdown-item" href="?page=biblioteca-listar"> Listar</a></li>
            <li><a class="bx bx-plus-circle" class="dropdown-item" href="?page=biblioteca-cadastrar"> Cadastrar</a></li>
          </ul>
          <a class="nav_link active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bx bx-user-voice nav_icon"></i>
            <span class="nav_name">Atendentes</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="bx bx-list-ul" class="dropdown-item" href="?page=atendente-listar"> Listar</a></li>
            <li><a class="bx bx-plus-circle" class="dropdown-item" href="?page=atendente-cadastrar"> Cadastrar</a></li>
          </ul>
          <a class="nav_link active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bx bx-category nav_icon"></i>
            <span class="nav_name">Categorias</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="bx bx-list-ul" class="dropdown-item" href="?page=categoria-listar"> Listar</a></li>
            <li><a class="bx bx-plus-circle" class="dropdown-item" href="?page=categoria-cadastrar"> Cadastrar</a></li>
          </ul>
          <a class="nav_link active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bx bx-book-alt nav_icon"></i>
            <span class="nav_name"> Livros</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="bx bx-list-ul" class="dropdown-item" href="?page=livro-listar"> Listar</a></li>
            <li><a class="bx bx-plus-circle" class="dropdown-item" href="?page=livro-cadastrar"> Cadastrar</a></li>
          </ul>
          <a class="nav_link active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bx bx-user-circle nav_icon"></i>
            <span class="nav_name">Usúarios</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="bx bx-list-ul" class="dropdown-item" href="?page=usuario-listar"> Listar</a></li>
            <li><a class="bx bx-plus-circle" class="dropdown-item" href="?page=usuario-cadastrar"> Cadastrar</a></li>
          </ul>
          <a class="nav_link active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bx bx-calendar nav_icon"></i>
            <span class="nav_name">Reservas</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="bx bx-list-ul" class="dropdown-item" href="?page=reserva-listar"> Listar</a></li>
            <li><a class="bx bx-plus-circle" class="dropdown-item" href="?page=reserva-cadastrar"> Cadastrar</a></li>
          </ul>
        </div>
      </div>
      <a href="#" class="nav_link active">
        <i class="bx bx-log-out nav_icon"></i>
        <span class="nav_name">Sair</span>
      </a>
    </nav>
  </div>
  <!--Container Main start-->
  <div class="height-100 bg-light">
    <br>
    <!--Container Main end-->
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12">
          <?php
            //arquivo de conexão com o banco de dados
            include('config.php');
            //chamar cada página
            switch(@$_REQUEST["page"]){
              //biblioteca
              case "biblioteca-listar":
                include("pages/biblioteca-listar.php");
              break;
              case "biblioteca-cadastrar":
                include("pages/biblioteca-cadastrar.php");
              break;
              case "biblioteca-editar":
                include("pages/biblioteca-editar.php");
              break;
              case "biblioteca-salvar":
                include("pages/biblioteca-salvar.php");
              break;
              //atendente
              case "atendente-listar":
                include("pages/atendente-listar.php");
              break;
              case "atendente-cadastrar":
                include("pages/atendente-cadastrar.php");
              break;
              case "atendente-editar":
                include("pages/atendente-editar.php");
              break;
              case "atendente-salvar":
                include("pages/atendente-salvar.php");
              break;
              //usuario
              case "usuario-listar":
                include("pages/usuario-listar.php");
              break;
              case "usuario-cadastrar":
                include("pages/usuario-cadastrar.php");
              break;
              case "usuario-editar":
                include("pages/usuario-editar.php");
              break;
              case "usuario-salvar":
                include("pages/usuario-salvar.php");
              break;
              //categoria
              case "categoria-listar":
                include("pages/categoria-listar.php");
              break;
              case "categoria-cadastrar":
                include("pages/categoria-cadastrar.php");
              break;
              case "categoria-editar":
                include("pages/categoria-editar.php");
              break;
              case "categoria-salvar":
                include("pages/categoria-salvar.php");
              break;
              //livro
              case "livro-listar":
                include("pages/livro-listar.php");
              break;
              case "livro-cadastrar":
                include("pages/livro-cadastrar.php");
              break;
              case "livro-editar":
                include("pages/livro-editar.php");
              break;
              case "livro-salvar":
                include("pages/livro-salvar.php");
              break;
              //reserva
              case "reserva-listar":
                include("pages/reserva-listar.php");
              break;
              case "reserva-cadastrar":
                include("pages/reserva-cadastrar.php");
              break;
              case "reserva-editar":
                include("pages/reserva-editar.php");
              break;
              case "reserva-salvar":
                include("pages/reserva-salvar.php");
              break;
              default:
                include("pages/main.php");
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="js/bootstrap.bundle.min.js"></script>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId);

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener("click", () => {
        // show navbar
        nav.classList.toggle("show");
        // change icon
        toggle.classList.toggle("bx-x");
        // add padding to body
        bodypd.classList.toggle("body-pd");
        // add padding to header
        headerpd.classList.toggle("body-pd");
      });
    }
  };

  showNavbar("header-toggle", "nav-bar", "body-pd", "header");

  /*===== LINK ACTIVE =====*/
  const linkColor = document.querySelectorAll(".nav_link");

  function colorLink() {
    if (linkColor) {
      linkColor.forEach((l) => l.classList.remove("active"));
      this.classList.add("active");
    }
  }
  linkColor.forEach((l) => l.addEventListener("click", colorLink));

  // Your code to run since DOM is loaded and ready
});
</script>

</html>