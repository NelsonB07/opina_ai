<?php
require_once("templates/header.php");
?>
<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="POST">
                    <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Digite seu e-email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="password" id="password">
                    </div>
                    <input type="submit" class="btn card-btn" value="Entrar">
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar Conta</h2>
                <form action="" method="POST">
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Digite seu e-email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" placeholder="Digite seu nome" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" class="form-control" placeholder="Digite seu sobrenome" name="lastname" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirmação de senha</label>
                        <input type="password" class="form-control" placeholder="Confirme sua senha" name="confirmpassword" id="confirmpassword">
                    </div>
                    <input type="submit" class="btn card-btn" value="Registrar">

                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once("templates/footer.php");
?>