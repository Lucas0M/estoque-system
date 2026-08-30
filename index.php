<?php
require_once './includes/config_session.php';
require_once './includes/errors.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de Estoque</title>
</head>

<body>
  <main class="container">
    <div class="formulario">
      <form action="../includes/formHandler.php" method="post">
        <input type="text" name="nome" placeholder="Nome do Produto..." required>
        <input type="number" name="preco" placeholder="Preço do Produto..." required>
        <input type="number" name="quantidade" placeholder="Quantidade no Estoque..." required>
        <select name="categoria">
          <option value="none">Categoria</option>
          <option value="eletrodomesticos">Eletrodomésticos</option>
          <option value="eletronicos">Eletrônicos</option>
          <option value="decoracao">Decoração</option>
        </select>
        <button type="submit">Adicionar</button>
      </form>
      <div class="errors">
      </div>
    </div>
  </main>
</body>

</html>