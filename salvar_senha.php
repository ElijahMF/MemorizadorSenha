<?php
require 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lugar = $_POST['place'];
    $senha = $_POST['password'];
    $data = $_POST['date'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO senhas (lugar, senha, data) VALUES (:lugar, :senha, :data)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':lugar' => $lugar,
        ':senha' => $senha,
        ':data' => $data
    ]);

    echo "Senha salva com sucesso!";
} else {
    echo "Método de requisição inválido.";
}
?>