<?php
require 'conexao.php';
$nome = $_POST['produto'];
$preco = $_POST['preco'];
$estoque = $_POST['quantidade'];

$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':quantidade', $estoque);
if ($stmt->execute()) {
    echo "Produto inserido com sucesso!";
} else {
    echo "Erro ao inserir produto.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = "index.php" type="button" class="btn btn-warning">Voltar</a>
</body>
</html>