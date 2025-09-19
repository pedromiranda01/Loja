<?php
include 'cabecalho.php';
?>

<body>
  <div class="container">
    <h2 class="mb-4">Cadastrar Produto</h2>
    <form action="inserir.php" method="POST" class="needs-validation" novalidate>
      <div class="mb-3">
        <label for="produto" class="form-label">Nome do Produto</label>
        <input type="text" name="produto" id="produto" class="form-control" placeholder="Digite o nome do produto" required>
        <div class="invalid-feedback">Por favor, informe o nome do produto.</div>
      </div>

      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" name="preco" id="preco" class="form-control" placeholder="Digite o preço" step="0.01" min="0" required>
        <div class="invalid-feedback">Por favor, informe um preço válido.</div>
      </div>

      <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" placeholder="Digite a quantidade" min="0" required>
        <div class="invalid-feedback">Por favor, informe a quantidade.</div>
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

  <script>
    // Validação Bootstrap 5
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
