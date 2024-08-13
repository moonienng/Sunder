<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caupe - Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <img src="logosemfundo.svg" alt="Logo" class="logo">
    <div class="container">
        <div class="formulario">
            <h1>Bem-Vindo de Volta!</h1>
            <div class="loginext">
                <script src="https://accounts.google.com/gsi/client" async></script>
                <div id="g_id_onload"
                    data-client_id="YOUR_GOOGLE_CLIENT_ID"
                    data-login_uri="https://your.domain/your_login_endpoint"
                    data-auto_prompt="false">
                </div>
                <div class="g_id_signin"
                    data-type="standard"
                    data-size="large"
                    data-theme="outline"
                    data-text="sign_in_with"
                    data-shape="rectangular"
                    data-logo_alignment="left">
                </div>
            </div>
            <div class="linhachata">
                <fieldset class="OU">
                    <legend>OU</legend>
                </fieldset>
            </div>
            <form action="logando.php" method="post">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="CNPJ" placeholder="CNPJ"> <br>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="senha" placeholder="Senha"> <br>
                <input type="submit" value="Entrar" class="button">
            </form>
            <div class="formrodape">
                <p>Não é cadastrado ainda? <a href="cadastroUsuario.php">Cadastre-se</a></p>
                <p>Esqueceu sua senha? <a href="esqueceu_senha.php">Clique aqui</a></p>
            </div>
        </div>
    </div>

    <?php
    if (isset($_SESSION['erros'])) {
        echo '<script type="text/javascript">';
        foreach ($_SESSION['erros'] as $erro) {
            echo "alert('$erro');";
        }
        echo '</script>';
        unset($_SESSION['erros']);
    }
    
    if (isset($_SESSION['mensagem'])) {
        echo '<script type="text/javascript">';
        echo "alert('{$_SESSION['mensagem']}');";
        echo '</script>';
        unset($_SESSION['mensagem']);
    }
    ?>
</body>
</html>
