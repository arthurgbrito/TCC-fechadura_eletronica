
<?php 

    if (isset($_POST['Entrar']) && !empty($_POST['user']) && !empty($_POST['password'])){
        
        include_once('conexao.php');

        $usuario = $_POST['user'];
        $senha = $_POST['password'];

        print_r('Usuário: '. $usuario);
        print_r('<br>');
        print_r('Senha: ' . $senha);

        $confere = "SELECT * FROM usuarios WHERE Username = '$usuario' and Password = '$senha'";
        
        $resultado = $conn->query($confere);

        /*print_r($confere);
        print_r('<br>');
        print_r($resultado);*/

        if (mysqli_num_rows($resultado) == 0){
            print_r('<br>');
            print_r('Faça seu cadastro');
        } else {
            print_r('<br>');
            print_r('Pode entrar piranha');
        }

        //$resultado = mysqli_query($conn, "INSERT INTO usuarios(Username, Password) VALUES ('$usuario', '$senha')");

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
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/medias.css">
</head>
<body>

    <header>
        <h1>Controle de Acesso</h1>
        <h2>Curso de Eletrônica</h2>
        <div id="box">
            <div id="logo-curso"></div>
        </div>
    </header>
    
    <div id="form">
        <h1>Login</h1>
        <p>Faça Login para continuar</p>

        <form action="index.php" method="post" autocomplete="on">
            <div class="input">
                <label for="iuser" id="label_Usuario">Usuário</label><br>
                <input type="text" name="user" id="iuser" required>
            </div>

            <div class="input">
                <label for="ipassword" id="label_Senha">Senha</label><br>
                <input type="password" name="password" id="ipassword" required>
            </div>

            <input type="submit" name="Entrar" value="Entrar" id="submit">

            <div class="help">
                <a href="#">Esqueceu a senha?</a>
                <a href="#">Cadastre-se</a>
            </div>      
        </form>
    </div>

</body>
</html>
