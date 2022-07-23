<?php
  // Página 1

  session_start();

  // Exibir um texto na tela do usuário
  echo "Esta é a página 01, onde a sessão será criada";

  // Vamos criar uma sessão com o nome da variável aula e hora
  $_SESSION["aula"] = "PHP";
  $_SESSION["hora"] = time();

?>

<a href="pagina02.php">Clique para ir à página 02</a>