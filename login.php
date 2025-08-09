
<?php 

    if (isset($_POST['Entrar']) && !empty($_POST['user']) && !empty($_POST['password'])){
        
        include_once('conexao.php');

        $usuario = $_POST['user'];
        $senha = $_POST['password'];

        /*print_r('Usuário: '. $usuario);
        print_r('<br>');
        print_r('Senha: ' . $senha);*/

        $confere = "SELECT * FROM usuarios WHERE Username = '$usuario' and Password = '$senha'";
        
        $resultado = $conn->query($confere);

        /*print_r($confere);
        print_r('<br>');
        print_r($resultado);*/

        if (mysqli_num_rows($resultado) == 0){
            header('Location: cadastro.php');
        } else {
            header('Location: sistema.html');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça o seu Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/style-login.css">
    <link rel="stylesheet" href="estilos/medias-login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>
<body>

    <header>
        <div class="text">
            <h1>Controle de Acesso</h1>
            <h2>Curso de Eletrônica</h2>
        </div>
        <div id="box-image">
            <div id="logo-curso"></div>
        </div>
    </header>
    
    <section id="form">
        <div class="info">
            <h1>Login</h1>
            <p>Faça Login para continuar</p>
        </div>

        <form action="login.php" method="post" autocomplete="on">
            <div class="input">
                <label for="iemail" id="label_Email">Email</label>
                <input type="email" name="email" id="iemail" required>
            </div>

            <div class="input">
                <label for="ipassword" id="label_Senha">Senha</label>
                <div class="box-password">
                    <input type="password" name="password" id="ipassword" required>
                    <i class="bi bi-eye-fill" id="olho"></i>
                </div>
            </div>

            <input type="submit" name="Entrar" value="Entrar" id="submit">

            
        </form>
        <div class="help">
            <a href="#">Esqueceu a senha?</a>
            <a href="cadastro.php">Cadastre-se</a>
        </div>
    </div>

    <script>

        const olho = document.getElementById('olho');
        const senha = document.getElementById('ipassword');

        olho.addEventListener('click', () => {
            const senhaVisivel = senha.type === 'text';
            senha.type = senhaVisivel ? 'password' : 'text';
            
            olho.classList.toggle('bi-eye-fill', !senhaVisivel);
            olho.classList.toggle('bi-eye-slash-fill', senhaVisivel);
        });

    </script>

</body>
</html>

