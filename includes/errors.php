<?php


function show_errors()
{
  if (isset($_SESSION["form_errors"])) {
    $errors = $_SESSION["form_errors"];

    foreach ($errors as $error) {
      echo "<p class='error'>" . htmlspecialchars($error) . "</p>";
    }

    unset($_SESSION["form_errors"]);
  } else if (isset($_GET["adicionadp"]) && $_GET["adicionado"] === "success") {
    echo "<p class='success'>" . "Produto adicionado com sucesso!" . "</p>";
  }
}
