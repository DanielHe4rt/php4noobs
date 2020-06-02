# 3.12 - Operador de Execução

Os backticks ``` `` ```, também conhecidos como backquotes, executam o conteúdo fechado como um shell
comando e são equivalentes a `shell_exec()`.
`exec()`, `shell_exec()` e `system()`, todos são capazes de executar comandos no nível do shell.

```php
<?php

$output = `ls -al`;
echo "<pre>$output</pre>";
```

Ir para: [3.12 Recapitulação](https://github.com/DanielHe4rt/php4noobs/blob/master/3-Basico/13-Recapitulacao.md)