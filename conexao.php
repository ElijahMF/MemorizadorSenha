<?php
$host = 'localhost'; // Host do banco de dados
$dbname = 'memorizador_senhas'; // Nome do banco de dados
$user = 'root'; // Usuário do banco de dados (padrão do XAMPP/WAMP)
$password = ''; // Senha do banco de dados (padrão do XAMPP/WAMP é vazio)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>