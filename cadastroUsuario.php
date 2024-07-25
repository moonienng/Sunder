<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caupe - Cadastre-se</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-center">
        <div class="row justify-items-center">
            <div class="col">
                <img src="logosemfundo.svg" alt="Logo" class="logo">
            </div>
            <div class="formulario col">
                <h1>Cadastre-se aqui</h1>
                <form action="salvaUsuario.php" method="post">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nome" placeholder="Nome Completo"><br>
                    <i class="fa-solid fa-address-card"></i>
                    <input type="text" name="CNPJ" placeholder="CNPJ"><br>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email"><br>
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" name="telefone" placeholder="Telefone"><br>
                    
                    <div class="senha-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="senha" placeholder="Senha">
                    <br>
                    <span class="senha-lokona" id="senha-aviso" style="display:none; color: white; margin-top: 5px; font-family: 'Montserrat', sans-serif; font-size: 13px;">
                     No mínimo 8 dígitos, 2 caracteres especiais e incluir ao menos 1 número.
                    </span>
                    </div>


                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="confirma" placeholder="Repita a senha"><br>

                    <i class="fa-solid fa-calendar-days"></i>
                    <label for="datanas">Data de nascimento</label><br>
                    <input type="date" name="datanas"><br>
                    
                    <input type="submit" class="button" value="Cadastrar">
                    <p>
                        Ao clicar em Cadastrar, você concorda com nossos <a href="#">Termos</a>, <a href="#">Política de privacidade</a> e <a href="#">Política de cookies</a>. Você poderá receber notificações por SMS e cancelar isso quando quiser.
                    </p>
                </form>
                <?php
                session_start();
                if (isset($_SESSION['erros'])) {
                    echo '<script type="text/javascript">';
                    foreach ($_SESSION['erros'] as $erro) {
                        echo "alert('$erro');";
                    }
                    echo '</script>';
                    unset($_SESSION['erros']);
                }
                ?>
            </div>
        </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", function() {
    const campoSenha = document.querySelector('input[name="senha"]');
    const avisoSenha = document.getElementById('senha-aviso');

    campoSenha.addEventListener('focus', function() {
        avisoSenha.style.display = 'inline';
    });

    campoSenha.addEventListener('blur', function() {
        avisoSenha.style.display = 'none'; 
    });

    campoSenha.addEventListener('input', function() {
        
    });

    function validarSenha(senha) {
        const regex = /^(?=.*[0-9])(?=.*[!@#$%^&*()_+[\]{};':"\\|,.<>\/?]).{8,}$/;
        return regex.test(senha);
    }
});
 </script>
</body>
</html>