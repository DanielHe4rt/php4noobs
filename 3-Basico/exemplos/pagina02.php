<?php
// E esta é a página 02, onde recuperaremos as variáveis de sessão

session_start();

date_default_timezone_set('America/Sao_Paulo');

echo 'Agora estamos na página 02<br />';
echo "Estamos na aula de " . $_SESSION['aula'] . "<br>";

echo "E agora são " . date('H:i:s', $_SESSION['hora']) . " horas";

?>