<?php
require_once './includes/errors.php';
require_once './includes/produtosHandler.php';
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Pagina de Estoque</title>
</head>

<body>
  <main class="container">
    <h3>Estoque CRUD</h3>
    <div class="formulario">
      <form action="./includes/formHandler.php" method="post">
        <input type="text" class="form-control mb-3" style="width: 32rem;" name="nome" placeholder="Nome do Produto..." required>
        <input type="number" class="form-control mb-3" style="width: 32rem;" name="preco" placeholder="Preço do Produto..." required>
        <input type="number" class="form-control mb-3" style="width: 32rem;" name="quantidade" placeholder="Quantidade no Estoque..." required>
        <select class="form-control mb-3" style="width: 32rem;" name="categoria">
          <option value="none" selected>Categoria</option>
          <option value="Eletrodomesticos">Eletrodomésticos</option>
          <option value="Eletronicos">Eletrônicos</option>
          <option value="Decoracao">Decoração</option>
        </select>
        <button class='btn btn-primary mb-3' type="submit">Adicionar</button>
      </form>
    </div>
    <div class="errors">
      <?php
      show_errors();
      ?>
    </div>
    <h3>Produtos</h3>
    <div class="produtos">
      <?php
      mostrarProdutos();
      ?>
    </div>

  </main>
</body>

</html>