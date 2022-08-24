# 3.16 Session 

Trabalhar com o conceito de sessões permite que um conjunto de dados, possam ser utilizados pelos os usuários durante todo o tempo em que acessa e navega dentro da aplicação web sendo persistidos. Então dessa forma, é possível, por exemplo, verificar se o usuário está logado ou não no site, pegar um conteúdo que está dentro de uma carrinho de compras, ou até controlar permissões de execução do usuário, e muito mais.

- Session é uma variável superglobal, é uma array associativo que basicamente, são estruturas onde cada elemento que esta dentro do array, é identificado por uma chave única. 


## Vamos criar a nossa primeira sessão: função session_start()

A função session_start() permite iniciar uma nova sessão ou até resumir (continuar) uma sessão que já existe.


### Iniciar uma sessão

```php

<?php
  session_start(); //Uma nova sessão de usuário é iniciada.
?>

```

O retorno da função

- TRUE sessão iniciada com sucesso.
- FALSE sessão deu falha em iniciar.

## Exemplo de como trabalhar com sessão

Aqui nesse exemplo vamos trabalhar com duas páginas php. Na primeira página, vamos iniciar uma sessão e em seguida, passar os valores para as duas variáveis de sessão criadas.

### Declarando a sessão - $_SESSION.

```php

<?php
  // Página 1

  session_start();

  // Exibir um texto na tela do usuário
  echo "Esta é a página 01, onde a sessão será criada";

  // Vamos criar uma sessão com o nome da variável aula e hora
  $_SESSION["aula"] = "PHP";
  $_SESSION["hora"] = time();

  // Link para a página 02:
  echo '<br /><a href="pagina2.php">Clique para ir à página 02</a>';

?>

```

Após carregar a página 01, a sessão é criada e as variáveis de sessão ‘aula’ e ‘hora’ são declaradas e inicializadas. Elas poderão ser acessadas na página 02, clicando-se no link fornecido.

A seguir está o código do arquivo pagina2.php:

```php

<?php
// E esta é a página 02, onde recuperaremos as variáveis de sessão

session_start();

date_default_timezone_set('America/Sao_Paulo');

echo 'Agora estamos na página 02<br />';
echo "Estamos na aula de " . $_SESSION['aula'] . "<br>";

echo "E agora são " . date('H:i:s', $_SESSION['hora']) . " horas";

?>

```

Neste exemplo, a sessão é criada logo que o usuário carrega a página 01. Porém, é muito comum que se deseje criar uma nova sessão apenas quando algum evento específico ocorrer, como o clique em um botão de formulário. 