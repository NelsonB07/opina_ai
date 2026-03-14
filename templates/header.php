<?php 

    require_once("globals.php"); 
    require_once("db.php"); 

    $flassMessage = [];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opina Aí</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/logo_opina_.png" type="image/x-icon">
    <!-- BOOTSTRAP -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <!-- FONT AWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="<?= $BASE_URL ?>" class="navbar-brand d-flex align-items-center">
                <img src="<?= $BASE_URL ?>img/logo_opina_2.png" 
                     alt="Opina Aí" 
                     id="logo" 
                     class="me-2">
                <span id="opina-title">Opina Aí</span>
            </a>

            <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbar" 
                    aria-controls="navbar" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbar">
                <form action="" method="GET" class="d-flex mx-auto">
                    <input type="search" 
                           name="q" 
                           id="search-form" 
                           class="form-control me-2" 
                           placeholder="Buscar Filmes">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>auth.php" class="nav-link" id="entrar">
                            Entrar / Cadastrar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php if(!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
        <p class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
    </div>
<?php endif ?>
