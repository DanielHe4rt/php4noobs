# 3.7 Operadores de Atribuição

Uma atribuição é uma maneira de guardar um valor na memória e referenciá-lo com um
identificador, por exemplo: uma variável ou uma constante.

## Atribuição `=`

O operador básico de atribuição no PHP é `=`, não pense nele como "igual a", pense
como "recebe o valor de". Então `$a = 3;` significa que a variável `$a` recebe o valor `3`.

#### Exemplo de atribuição

```php
<?php

$resultado = 10;

echo $resultado;

//Retorna: "10"
```
## Formas abreviadas de atribuição

Também dá pra escrever uma atribuição de forma abreviada, essa forma funciona com
qualquer operador aritmético: `+`, `-`, `*`, `/`, `%`, etc.

### Exemplos de atribuição abreviada

#### Soma `+=`

```php
<?php

$resultado = 10;
$resultado +=10;

echo $resultado;

//Retorna: "20"
```

#### Subtração `-=`

```php
<?php

$resultado = 10;
$resultado -=5;

echo $resultado;

//Retorna: "5"
```

#### Multiplicação `*=`

```php
<?php

$resultado = 10;
$resultado *=10;

echo $resultado;

//Retorna: "100"
```

#### Divisão `/=`

```php
<?php

$resultado = 10;
$resultado /=2;

echo $resultado;

//Retorna: "5"
```

#### Módulo(retorna o resto da divisão) `%=`

```php
<?php

$resultado = 10;
$resultado %=2;

echo $resultado;

//Retorna: "0"
```
## Operador de concatenação `.`

Concatenar significa **juntar as coisas**, no PHP existe um operador pra isso, é o ponto `.`
dá pra usar esse operador de forma abreviada também.

#### Só concatenando

```php
<?php

$euQuero = 'Eu quero ser um programador' . ' PHP';

echo $euQuero;

//Retorna: "Eu quero ser um programador PHP"
```

#### Concatenando de forma abreviada

```php
<?php

$euQuero = 'Eu quero ser um programador';
$euQuero .= ' PHP';

echo $euQuero;

//Retorna: "Eu quero ser um programador PHP"
```

#### Concatenando variáveis

```php
<?php

$euQuero = 'Eu quero ser um programador';
$php = ' PHP';

echo $euQuero . $php;

//Retorna: "Eu quero ser um programador PHP"
```

## Operador de incremento `++` e decremento `--`

O PHP suporta operadores de incremento e decremento, a ordem do operador é importante aqui.
Colocar um `++` antes de uma variável em um `echo` **incrementa a variável em um
antes da avaliação**. Colocar o operador após a variável incrementa `após a avaliação`.
A mesma regra serve para o operador de decremento `--`.

#### Exemplo de incremento e decremento

```php
<?php

$variavelInteira = 10;

echo 'O valor da variável foi incrementado e agora é  = ' . ++$variavelInteira . '<br>';
echo 'O valor da variável foi incrementado, mas ainda não mudou então continua sendo = ' . $variavelInteira++ . '<br>';
echo 'O valor da variável agora é  = ' . $variavelInteira . '<br>';

/** -- Retorna
O valor da variável foi incrementado e agora é = 11
O valor da variável foi incrementado, mas ainda não mudou então continua sendo = 11
O valor da variável agora é = 12
**/
```

#### Notas
 
- Algumas linguagens usam o sinal `+`, para concatenar;
- Quando não precisar interpretar variáveis use aspas simples `''`, isso poupa processamento;
- `<br>` é uma tag HTML que serve para pular linhas.