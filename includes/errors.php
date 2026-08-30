<?php


function show_errors()
{
  if (isset($_SESSION["form_errors"])) {
    $errors = $_SESSION["form_errors"];

    foreach ($errors as $error) {
      echo "<div class='alert alert-danger' role='alert'>" . htmlspecialchars($error) . "</div>";
    }

    unset($_SESSION["form_errors"]);
  } else if (isset($_GET["adicionado"]) && $_GET["adicionado"] === "success") {
    echo "<div class='alert alert-success'>" . "Produto adicionado com sucesso!" . "</div>";
  }
}
