<?php
require 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header('Location: listar.php'); // volta para a página de listagem
        exit;
    } else {
        echo "Erro ao apagar produto.";
    }
}
?>
