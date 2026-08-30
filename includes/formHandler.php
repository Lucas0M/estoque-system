<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // pegar dados do form
  $nome = htmlspecialchars($_POST["nome"]);
  $preco = htmlspecialchars($_POST["preco"]);
  $quantidade = htmlspecialchars($_POST["quantidade"]);
  $categoria = htmlspecialchars($_POST["categoria"]);

  // tratar erros
  $errors = [];

  if (empty($nome) || empty($preco) || empty($quantidade) || $categoria === "none") {
    $errors["input_vazio"] = "Preencha todos os campos.";
  }

  if (!is_numeric($preco) || !is_numeric($quantidade)) {
    $errors["nao_numerico"] = "Os campos de preço e quantidade devem ser números.";
  }

  if ($preco <= 0 || $quantidade <= 0) {
    $errors["quantidade_vazia"] = "Quantidade e preço não podem ser menor ou igual a zero.";
  }

  if ($errors) {
    foreach ($errors as $error) {
      echo "<p>" . $error . "</p>";
    }

    header('Location: ../index.php');
    die();
  }


  header('Location: ../index.php?adicionado=success');
} else {
  header('Location: ../index.php');
}
