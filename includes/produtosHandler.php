<?php


function mostrarProdutos()
{
  $data = file_get_contents('./produtos.json');
  $dataToPhp = json_decode($data, true);

  $produtos = $dataToPhp['produtos'];

  if ($produtos) {
    foreach ($produtos as $produto) {
      echo "<div class='card'>";
      echo "<div class='card-body'>";
      echo "<p>Nome: " . htmlspecialchars($produto["nome"]) . "</p>";
      echo "<p>Preço: " . htmlspecialchars($produto["preco"]) . "R$</p>";
      echo "<p>Quantidade: " . htmlspecialchars($produto["quantidade"]) . "</p>";
      echo "<p>Categoria: " . htmlspecialchars($produto["categoria"]) . "</p>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "<div class='nenhum'>";
    echo "<p>" . "Nenhum produto adicionado ao estoque ainda." . "</p>";
    echo "</div>";
  }
}

function adicionarProduto(string $nome, int $preco, int $quantidade, string $categoria)
{
  $produtosJson = file_get_contents('../produtos.json');
  $produtosToPhp = json_decode($produtosJson, true);

  $ultimoIndex = array_key_last($produtosToPhp['produtos']);
  $ultimoId = $produtosToPhp['produtos'][$ultimoIndex]['id'] ?? 0;

  $newData = [
    "id" => $ultimoId + 1,
    "nome" => $nome,
    "quantidade" => $quantidade,
    "preco" => $preco,
    "categoria" => $categoria
  ];

  $produtosToPhp['produtos'][] = $newData;

  file_put_contents('../produtos.json', json_encode($produtosToPhp, JSON_PRETTY_PRINT));
}

// ainda desenvolver (n sei como)
function removerProduto() {}
