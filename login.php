<?php 

$host = "db.atjkpeoxwzdvuofvecru.supabase.co"; // sem https
$dbname = "postgres";
$user = "postgres";
$password = "Agb.191672@_";
$port = "5432";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com sucesso!";
} catch (PDOException $e){
    die("Erro ao acessar o banco de dados: " . $e->getMessage());
}

$username = $_POST['Username'];
$pass = $_POST['password'];

// Consulta com prepared statement (evita SQL Injection)
$stmt = $conn->prepare("SELECT * FROM Usuarios WHERE Username = :username AND Password = :pass");
$stmt->bindParam(':username', $username);
$stmt->bindParam(':pass', $pass);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "Login bem-sucedido! Acesso permitido.";
    // header("Location: painel.php");
} else {
    echo "Email ou senha inválidos.";
}
?>
