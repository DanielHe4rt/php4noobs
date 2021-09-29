# 3.5 Operadores Aritméticos

Quando falamos de linguagens de programação, podemos esperar que existam os operadores aritméticos como em todas as outras linguagens. Vamos conhecer quais são eles:

- Adição `+`
- Subtração `-`
- Multiplicação `*`
- Divisão `/`
- Módulo (resto de uma divisão) `%`

## Exemplos

## Adição
Realiza a soma de duas ou mais variáveis.

```php
<?php

$a = 10; //a = 10
$b = 20; //b = 20
$soma = $a + $b; //Realizando a soma com sinal de + das variáveis $a e $b
echo $soma . "\n";
```

<p align="center"><i>Arquivo encontrado em: exemplos/operadoresA2.php</i></p>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php operadoresA2.php
30
```

## Subtração
Realiza a subtração de duas ou mais variáveis.

```php
$a = 100; //a = 100
$b = 50; //b = 50

$subtracao = $a - $b; //Realizando a subtração com sinal de - das variáveis $a e $b

echo $subtracao . "\n";

```

<p align="center"><i>Arquivo encontrado em: exemplos/operadoresA3.php</i></p>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php operadoresA3.php
50
```

## Multiplicação
Multiplica duas ou mais variáveis.

```php
$a = 500; //a = 500
$b = 50; // b = 50

$multiplicacao = $a * $b; // Realizando a multiplicação com sinal de * das variáveis $a e $b

echo $multiplicacao . "\n";

```

<p align="center"><i>Arquivo encontrado em: exemplos/operadoresA4.php</i></p>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php operadoresA4.php
25000
```

## Divisão
Divide duas ou mais variáveis.

```php
$a = 100; //a = 100
$b = 2; // b = 2

$divisao = $a / $b; // Realizando a divisão com sinal de / das variáveis $a e $b

echo $divisao;

```

_Resultado_

![Resultado do Quinto Exemplo](https://i.imgur.com/NFIjLcW.png)

## Modulos
Retorna o resto de uma divisão.

```php
$a = 3; //a = 3
$b = 2; // b = 2

$resto = $a % $b; // Irá efetuar a divisão de $a por $b e depois retornar o resto da divisão

echo $resto;

```

_Resultado_

![Resultado do Quinto Exemplo](https://i.imgur.com/TBtUD1x.png)

_Resultado_

![Resultado do Quinto Exemplo](https://i.imgur.com/3i83LR3.png)

## Considerações

<p>No PHP também é possível fazer diversas operações matemáticas na mesma linha(como uma expressão), veja exemplos abaixo.</p>

## Exemplo

```php
//Exemplo em que utilizamos várias operações matemáticas na mesma linha
echo (50 + 10 - 30) * (5.2 / 2);
/*
Como podem ver, a expressão acima contém parênteses, significa qual expressão será executada primeiro.
A primeira expressão resulta em 30 pois é efetuada a soma de 50 + 10 e depois a subtração de - 30.
O resultado de 30 será multiplicado pela segunda expressão ( divisão de 5.2 / 2 ) que é igual a (2.6).
30 * 2.6 = 78, que será nosso resultado.
*/
```

_Resultado_

![Resultado do Sexto Exemplo](https://i.imgur.com/SGW4rSH.png)

## Exemplo2

```php
//É possivel também criar variáveis dentro de parênteses e fazer operações com a mesma.
$a = 2;
echo $a * ($b = 3 );
```

_Resultado_

![Resultado do Sétimo Exemplo](https://i.imgur.com/rn8oTN7.png)

## Exemplo3

```php
//Veja o que acontece quando utilizamos varias operações matemáticas sem parênteses:
echo 50 + 10 - 30 * 5.2 / 2;

```

_Resultado_

<p>A expressão será calculada de acordo com a ordem de precedência dos operadores aritméticos</p>

### Notas

* O operador subtração `-`, antes de uma varíavel ou número transforma o número ou variável para o oposto, se for negativo vira positivo, se for positivo vira negativo.
```php
<?php
$num1 = 77; //Variável num igual a 77 positivo
$num2 = -$num1; //Variável num2 vai ser igual ao oposto de num(77), ou seja, 77 negativo

echo $num1 . "\n";
echo $num2 . "\n";

```

* O operador exponencial `**`, retorna o resultado de uma variável elevada a outra, implementada a partir do PHP 5.6.
```php
$a = 10; // a = 5
$b = 2; // b = 5

$exponencial = $a ** $b; //Aqui fazemos que a variável $a = 10 seja elevada a $b = 2, ou seja, 10x10 = 100

echo $exponencial;

```

## Ordem de precedência dos operadores aritméticos

![Resultado do Oitavo Exemplo](https://i.imgur.com/S8RXKIc.png)

Sendo que os operadores de uma expressão tem a mesma prioridade, a expressão será lida da esquerda para direita e será determinada pelo o que vier primeiro.

Supondo que temos a expressão -> ( a + a1 / b \* c % d ).

Primeiro será efetuada a divisão ( / ), depois a multiplicação ( \* ), depois o módulo ( % ) e depois o restante.

Ir para: [3.6 Operadores BitWise](06-Operadores-bitwise.md)
