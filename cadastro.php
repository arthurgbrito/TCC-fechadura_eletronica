<?php 

if (isset($_POST['enviar'])){

  /*print_r('Usuario: ' . $_POST['usuario']);
  print_r('<br>');
  print_r('Email: ' . $_POST['email']);
  print_r('<br>');
  print_r('Senha: ' . $_POST['senha']);
  print_r('<br>');
  print_r('Cargo: ' . $_POST['cargo']);*/

  include_once('conexao.php');

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $cargo = $_POST['cargo'];

  $resultado = mysqli_query($conn, "INSERT INTO usuarios(Username, Password, Email, Cargo) VALUES ('$usuario', '$senha', '$email', '$cargo')");
  
  header('Location: login.php');

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Controle de Acesso</title>
  <link rel="stylesheet" href="estilos/style-cadastro.css">
  <link rel="stylesheet" href="estilos/medias-cadastro.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>

  <header>
    <div class="text">
      <h1>Controle de Acesso</h1>
      <h2>Curso de Eletrônica</h2>
    </div>
    <div class="box-image">
      <img src="estilos/imagens/logo-tro.png" alt="Logo TRO Eletrônica">
    </div>
  </header>

  <section>
    
    <h3>Cadastro de Usuário</h3>
      
      
      <form action="cadastro.php" method="POST">

        <div class="input">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>
        </div>

        <div class="input">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" required>
        </div>
        
        
        <div class="input">
          <label for="senha">Senha</label>
          <div class="box-password">
            <input type="password" id="senha" name="senha" required>
             <i class="bi bi-eye-fill" id="olho"></i>
          </div>
        </div>

        <div class="input">
          <label for="cargo">Cargo</label>
          <select id="cargo" name="cargo" required>
            <option value="">Selecione...</option>
            <option value="auxiliar">Auxiliar de Ensino</option>
            <option value="professor">Professor</option>
            <option value="estagiario">Estagiário</option>
            <option value="vanderlei">Vanderlei</option>
          </select>
        </div>

        <input type="submit" id="enviar" name="enviar" value="Cadastrar">

      </form>

      <div class="link-login">
        <p>Já tenho cadastro? <a href="login.php">Login</a></p>
      </div>

  </section>


</body>
</html>
