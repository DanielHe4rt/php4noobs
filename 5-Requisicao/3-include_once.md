# Requisição de arquivos

## O que é include_once?

O include_once tem a mesma funcionalidade que o `include`, sua diferença é que ele não faz a inclusão novamente
do arquivo, ele inclui apenas uma vez assim evita sobreposição. Ele ajudará a evitar problemas como redefinição de funções,
reatribuição de valores de variáveis, etc.

#

```php
<?php

    include_once "arquivo.php";
    
?>
```


Ir para: [5.4 Require Once](4-require_once.md)
