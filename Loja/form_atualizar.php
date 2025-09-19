<?php
include 'cabecalho.php';
require 'conexao.php';

if (!isset($_GET['id'])) {
    echo "ID do produto não informado.";
    exit;
}

$id = $_GET['id'];

// Busca os dados atuais do produto
$sql = "SELECT * FROM produtos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$produto = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$produto) {
    echo "Produto não encontrado.";
    exit;
}
?>

<body>
    <div class="container">
        <h2>ATUALIZAR PRODUTO</h2>
        <form action="atualizar.php?id=<?php echo $produto['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="produto" class="form-label">Nome:</label>
                <input id="produto" name="produto" type="text" class="form-control" value="<?php echo htmlspecialchars($produto['nome']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input id="preco" name="preco" type="number" step="0.01" class="form-control" value="<?php echo htmlspecialchars($produto['preco']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input id="quantidade" name="quantidade" type="number" class="form-control" value="<?php echo htmlspecialchars($produto['quantidade']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
