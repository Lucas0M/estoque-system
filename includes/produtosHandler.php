<?php


function mostrarProdutos()
{
  // pega os produtos do json
  $data = file_get_contents('./produtos.json');
  $dataToPhp = json_decode($data, true);

  $produtos = $dataToPhp['produtos'];

  if ($produtos) {
    // itera todos os produtos da lista produtos
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
  // pega a DATA de produtos.json
  $produtosJson = file_get_contents('../produtos.json');
  $produtosToPhp = json_decode($produtosJson, true);

  // pega ultimo id dos produtos pra somar 1 depois
  $ultimoIndex = array_key_last($produtosToPhp['produtos']);
  $ultimoId = $produtosToPhp['produtos'][$ultimoIndex]['id'] ?? 0;

  // cria novo produto em array
  $newData = [
    "id" => $ultimoId + 1,
    "nome" => $nome,
    "quantidade" => $quantidade,
    "preco" => $preco,
    "categoria" => $categoria
  ];

  // adiciona novo produto array no array de produtos
  $produtosToPhp['produtos'][] = $newData;

  // adiciona o novo produto pro produtos.json
  file_put_contents('../produtos.json', json_encode($produtosToPhp, JSON_PRETTY_PRINT));
}

// ainda desenvolver (n sei como)
function removerProduto() {}
