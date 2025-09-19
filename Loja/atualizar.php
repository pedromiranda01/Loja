<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $nome = $_POST['produto'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $quantidade);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header('Location: listar.php');
        exit;
    } else {
        echo "Erro ao atualizar o produto.";
    }
} else {
    echo "Requisição inválida.";
}
?>
