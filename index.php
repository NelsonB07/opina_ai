<?php 

    require_once("globals.php"); 
    require_once("db.php"); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opina Aí</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/logo_opina_ai.png" type="image/x-icon">
    <!-- CSS DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css./style.css">
    <!-- FONT AWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo_opina_ai.png" alt="Opina Aí" id="logo">
                <span id="opina-title">Opina Aí</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="main-container" class="container-fluid">
        <h1>Corpo do site</h1>
    </div>
    <footer id="footer">
        <div class="social-container">
            <ul>
                <li>
                    <a href="#" class="fab fa-facebook"></a>
                </li>
                <li>
                    <a href="#" class="fab fa-instagram"></a>
                </li>
                <li>
                    <a href="#" class="fab fa-youtube"></a>
                </li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="#">Adicionar filme</a></li>
                <li><a href="#">Adicionar crítica</a></li>
                <li><a href="#">Entrar / Editar</a></li>
            </ul>
        </div>
        <p>&copy; 2026 Nelson Brandão Carvalho</p>
    </footer>
    <!-- BOOSTSTRAP JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/js/bootstrap.bundle.min.js"></script>
</body>
</html> 