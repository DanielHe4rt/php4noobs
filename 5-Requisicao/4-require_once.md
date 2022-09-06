# Requisição de arquivos

## O que é require_once?

O require_once Tem a mesma funcionalidade que o require, sua diferença é que ele não
faz a inclusão novamente do arquivo, ele inclui apenas uma vez assim evita sobreposição.

#

```php
<?php

    require_once "arquivo.php";
    
?>
```
