# 3.8 Comparação de Valores

O PHP suporta várias opções de comparação de valores, vamos aprender sobre elas agora mesmo. Mas antes de começar, entenda que:

- `true` significa verdadeiro e `false` é falso;
- Um `1` é a mesma coisa que `true`;
- Zero `0` é a mesma coisa que `false`;
- `PHP_EOL` é uma constante do PHP que serve para quebrar linhas.

Agora sim, vamos aos comparadores de valor no PHP.

## Igualdade `==`

O operador **igual duplo** `==` compara dois valores e retorna `true`, se forem iguais, e `false` se os valores forem diferentes.

### Exemplo
```php
<?php

echo (0 == false) . PHP_EOL; //true
echo ('123' == 123) . PHP_EOL; //true
echo ('um' == 1) . PHP_EOL; //false
echo (123.0 == 123) . PHP_EOL; //true

/**
retorna: 1
         1
          
         1
**/
```

## Diferença `!=`

Um ponto de exclamação `!` com um sinal de igual `=` e pronto, dá isso aqui `!=`.
Com esse operador você pode testar se os valores são diferentes.
Se os valores forem diferentes o retorno é `true`, se forem iguais o retorno é `false`

### Exemplo
```php
<?php

echo (0 != false) . PHP_EOL; //false
echo ('123' != 123) . PHP_EOL; //false
echo ('um' != 1) . PHP_EOL; //true
echo (123.0 != 123) . PHP_EOL; //false

/**
retorna:  
          
         1
         
**/
```

## Idêntico `===` 

O PHP também pode testar se um valor é igual e do mesmo [tipo](3-Tipos-de-dados.md), você pode chamar isso de: "testar se o valor é idêntico".

### Exemplo
```php
<?php

echo (0 === false) . PHP_EOL; //false
echo ('123' === 123) . PHP_EOL; //false
echo ('um' === 1) . PHP_EOL; //false
echo (123.0 === 123) . PHP_EOL; //false

//É tudo falso :(, por isso não retorna nada
```

## Não idêntico `!==`

É possível testar também se o valor não é idêntico, basta usar o operador `!==`, chame isso de: "testar se o valor não é idêntico", e novamente o PHP vai verificar o [tipo](3-Tipos-de-dados.md) do valor.

### Exemplo
```php
<?php

echo (0 !== false) . PHP_EOL; //true
echo ('123' !== 123) . PHP_EOL; //true
echo ('um' !== 1) . PHP_EOL; //true
echo (123.0 !== 123) . PHP_EOL; //true

/**
retorna: 1 
         1
         1
         1
**/
```
## Maior/menor que

O PHP suporta quatro operadores maiores/menores que:

- `<` menor que;
- `>` maior que;
- `<=` menor ou igual a;
- `>=` maior ou igual a.

### Exemplos
```php
<?php

echo (2 < 3) . PHP_EOL; //true
echo (2 > 3) . PHP_EOL; //false
echo (2 <= 3) . PHP_EOL; //true
echo (2 >= 3) . PHP_EOL; //false

/**
retorna: 1 
         
         1
         
**/
```

### Notas

- O PHP tenta converter os valores na comparação de igual duplo `==`, e diferente `!=`;
- Por isso que a `string` `'123'`' é igual `==` ao número `123` e o retorno é `true`, mas **não é** idêntica `===`;
- Na comparação de idênticos `===` o PHP não tenta converter os valores;
- Por isso, quando você tenta comparar se a string `'123'` é idêntica `===` ao número `123`, o retorno é `false`, ou seja, diferente.

Ir para: [3.9 Combinação/concatenação de Strings](09-Combinacao-strings.md)
