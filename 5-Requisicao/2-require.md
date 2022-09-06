# Requisição de arquivos

## O que é require?

O require faz inclusão do arquivo e uma avaliação, logo após a inclusão, o arquivo se torna
disponível na nossa aplicação. Caso o arquivo não exista, nos retornar um erro `FALTAL ERROR`,
e trava todo a aplicação, ele parará o script enquanto o include
apenas emitirá um alerta (E_WARNING) permitindo que o script continue.

###

```php
<?php
    
    require 'arquivo.php';

?>
```
Ir para: [5.3 Include Once](3-include_once.md)
