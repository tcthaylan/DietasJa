<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL.'vendor/twbs/bootstrap/dist/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/reset.css' ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/login.css' ?>">
    <title>Login</title>
</head>
<body>
    <div class="loginContent">
        <div class="loginContent-header">
            <img src="<?php echo BASE_URL.'assets/images/illustrations/undraw_authentication_fsn5.svg' ?>">
            <h3>DietasJá</h3>
        </div>

        

        <form method="POST" class="loginContent-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <a href="" class="loginContent-form-forgotPass">Esqueceu a senha?</a>
            <div class="form-group">
                <label for="pass">Senha</label>
                <input type="password" id="pass" name="pass" class="form-control">
            </div>
            <input type="submit" value="Entrar" class="btnLogin">
        </form>

        <div class="loginContent-footer">
            Novo no DietasJá? <a href="">Crie uma conta.</a>
        </div>
    </div>
</body>
</html>