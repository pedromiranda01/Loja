<?php
include 'cabecalho.php';
require 'conexao.php';
?>

<body>
  <div class="container">
    <h1 class="mb-4">Lista de Produtos</h1>

    <a href="form_cadastrar.php" class="btn btn-primary mb-3">Cadastrar Novo Produto</a>

    <table class="table table-striped align-middle">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Preço (R$)</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Opções</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM produtos";
        $stmt = $pdo->query($sql);
        while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          echo "<td>" . $produto['id'] . "</td>";
          echo "<td>" . htmlspecialchars($produto['nome']) . "</td>";
          echo "<td>" . number_format($produto['preco'], 2, ',', '.') . "</td>";
          echo "<td>" . $produto['quantidade'] . "</td>";
          echo "<td>";
          echo "<div class='btn-group' role='group'>";
          echo "<a href='form_atualizar.php?id=" . $produto['id'] . "' class='btn btn-danger btn-sm me-2'>Atualizar</a>";
          echo "<a href='apagar.php?id=" . $produto['id'] . "' class='btn btn-warning btn-sm' onclick='return confirm(\"Tem certeza que deseja apagar este produto?\");'>Apagar</a>";
          echo "</div>";
          echo "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
  </script>
</body>
