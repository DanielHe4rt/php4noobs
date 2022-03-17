# 3.12 - Operador de Execução

Os backticks ` `` `, também conhecidos como *backquotes*, executam o conteúdo como um comando shell e são equivalentes a `shell_exec()`.
`exec()`, `shell_exec()` e `system()`, todos são capazes de executar comandos no nível do shell.

```php
<?php

$output = `ls -al`;
echo "<pre>$output</pre>";
```
#### Notas
Um **comando shell** é uma ou mais palavras que representam uma instrução enviada pelo usuário e seus programas para o kernel através de um interpretador de comandos. 

Ir para: [3.13 Estruturas de Controle: Condicioinais](13-Estruturas-de-controle-cond.md)
