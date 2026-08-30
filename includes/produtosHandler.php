<?php

function mostrarProdutos() {}

function adicionarProduto(string $nome, int $preco, int $quantidade, string $categoria)
{
  // pega a DATA de produtos.json
  $produtosJson = file_get_contents('../produtos.json');
  $produtosToPhp = json_decode($produtosJson, true);

  // pega ultimo id dos produtos pra somar 1 depois
  $ultimoIndex = array_key_last($produtosToPhp['produtos']);
  $ultimoId = $produtosToPhp['produtos'][$ultimoIndex]['id'];

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

function removerProduto() {}
