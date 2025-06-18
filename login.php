<?php 

$host = "localhost";
$dbname = "banco-teste-tcc";
$user = "root";
$password = "";
$port = "3306";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     print "Conectado no banco de dados com sucesso!";
} catch (PDOException $e){
    echo "Erro ao acessar o banco de dados: " . $e->getMessage();
}
/*
$username = $_POST['user'];
$pass = $_POST['password'];


$stmt = $conn->prepare("SELECT * FROM Usuarios WHERE Username = :username AND Password = :pass");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':pass', $pass);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "Login bem-sucedido! Acesso permitido.";
    // header("Location: painel.php");
} else {
    echo "Email ou senha inválidos.";
}*/
?>
