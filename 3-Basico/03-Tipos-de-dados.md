# 3.3 - Tipos de dados

Programação é uma constante troca de dados entre a memória e o processador, onde a memória PRECISA saber o que está sendo enviado para reservar espaço, armazenar e enviar ao processador para interpretar o código. Conhecer os tipos de dados padrões vai ajudar você a entender um conceito muito básico da programação de baixo nível (não muito bem aplicada em PHP, masss...): a tipagem. <br>

Por que você deveria perder tempo com isso já que o PHP não te obriga a fazer essa parte de tipagem?<br>
Os tipos de dados são MUITO importantes para que sua aplicação não quebre por um erro bobo onde você "deveria tá mandando um número inteiro em vez de um flutuante".<br>

Vamos entender os tipos escalares do PHP:

## Boleanos

Este é o tipo mais simples. Um booleano expressa um valor de verdade. Ele pode ser **TRUE** ou **FALSE** e são valores [*case-insensitives*.](https://pt.wikipedia.org/wiki/Case-sensitive)<br>
Vamos usar a função de saida **var_dump()** para entender um pouco de como é interpretado o dado **boolean** no código abaixo:

```php
<?php
var_dump(True);
var_dump(False);
var_dump(true);
var_dump(false);
var_dump(TrUe);
var_dump(fAlSe);
```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos0.php</i></p>

Você pode executar o exemplo acima com o seguinte comando:<br>

```
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos0.php
bool(true)
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
```

## Inteiros

Um inteiro é um número do conjunto Z = {..., -2, -1, 0, 1, 2, ...}. <br>
Inteiros podem ser especificados em notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2), opcionalmente precedido de sinal (- ou +).

```php
<?php
echo "Exemplos de números inteiros \n";
var_dump(1234); // número decimal
var_dump(-123); // um número negativo
var_dump(0123); // número octal (equivalente a 83 em decimal)
var_dump(0x1A); // número hexadecimal (equivalente a 26 em decimal)
var_dump(0b11111111); // número binário (equivalente ao 255 decimal)
```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos1.php</i></p>

Você pode executar o exemplo acima com o comando abaixo:<br>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos1.php
Exemplos de números inteiros
int(1234)
int(-123)
int(83)
int(26)
int(255)
```

## Números Flutuantes

Números de ponto flutuante (também conhecidos como "floats", "doubles" ou "números reais"), podem ser especificados utilizando qualquer uma das seguintes sintaxes:

```php
<?php

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;

echo $a . "\n";
echo $b . "\n";
echo $c . "\n";
```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos2.php</i></p>

Você pode executar o exemplo acima com o seguinte comando:<br>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos2.php
1.234
1200
7.0E-10
```

## Strings

Uma string é uma série de caracteres, onde 1 caractere é o mesmo que 1 byte para armazenamento na memória. 
Isso significa que o PHP possui suporte a um conjunto de apenas 256 caracteres, e, portanto, não possui suporte nativo a Unicode.
Veja mais detalhes do tipo string:

Uma string é um conjunto de caracteres, formando uma frase e/ou palavra ou até mesmo um caractere único.

Uma string pode ser especificada de quatro formas diferentes, porém só iremos usar duas. Sendo elas com:

- Aspas Simples;
- Aspas Duplas.

Nós já passamos por uma string nos exemplos anteriores de output com **echo** então vai ser mais fácil o entendimento. Segue o exemplo abaixo:

```php
<?php

echo "He4rtDevs <3";
echo "Melhor grupo do mundo para devs iniciantes";
```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos3.php</i></p>
Vamos analisar o exemplo abaixo:

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos3.php
He4rtDevs <3Melhor grupo do mundo para devs iniciantes
```

Podemos ver que a linha não foi quebrada e isso não irá acontecer se você não usar uma sequência de escape, na qual já apareceu em um exemplo nesta sessão.
A sequência **\n** significa que a partir deste ponto será uma nova linha no nosso console e pode ser colocado em qualquer parte da string. Segue o exemplo abaixo:

```php
<?php

echo "He4rtDevs <3\n";
echo "Melhor grupo do mundo para devs iniciantes";
```

OU

```php
<?php

echo "He4rtDevs <3";
echo "\n";
echo "Melhor grupo do mundo para devs iniciantes";
```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos4.php</i></p>
Vamos ver o resultado, onde é esperado que seja quebrada a linha e separado o conteúdo das strings.

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos4.php
He4rtDevs <3
Melhor grupo do mundo para devs iniciantes
```

Com essa base você já consegue fazer vários exemplos com strings e sempre tendo uma saída com uma fácil legibilidade.

## Arrays (Vetores)

Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores à chaves. Este tipo é otimizado para vários usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais.

Um array pode ser criado com o construtor de linguagem **array()** ou por **[]**. Ele leva qualquer quantidade de pares separados por vírgula chave => valor como argumentos.

```
array(
    chave  => valor,
    chave2 => valor2,
    chave3 => valor3,
    ...
)
```

Caso você não queira uma "chave", ele utilizará o mapa incremental padrão de vetores, começando pelo 0,1,2,3... Veja os exemplos abaixo:

```php
<?php

$array1 = array(
    "dev" => "danielhe4rt",
    "group" => "he4rtdevs"
);

// Ou se você quiser um jeito mais simples de instanciar um array:

$array2 = [
    "dev" => "danielhe4rt",
    "group" => "he4rtdevs"
];

var_dump($array1);
var_dump($array2);

```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos5.php</i></p>
Vejamos o resultado abaixo:

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos5.php
array(2) {
  ["dev"]=>
  string(11) "danielhe4rt"
  ["group"]=>
  string(9) "he4rtdevs"
}
array(2) {
  ["dev"]=>
  string(11) "danielhe4rt"
  ["group"]=>
  string(9) "he4rtdevs"
}
```

Mostramos dois jeitos de declarar arrays e os dois estão **certos**, porém usando **[]** é um jeito mais simples de expressar um array.

Agora vamos para outro exemplo de como ficaria se você não colocasse chaves nos seus arrays:

```php
<?php

$array1 = array(
    "danielhe4rt",
    "he4rtdevs"
);

// Ou se você quiser um jeito mais simples de instanciar um array:

$array2 = [
    "danielhe4rt",
    "he4rtdevs"
];

var_dump($array1);
var_dump($array2);

```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos6.php</i></p>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos6.php
array(2) {
  [0]=>
  string(11) "danielhe4rt"
  [1]=>
  string(9) "he4rtdevs"
}
array(2) {
  [0]=>
  string(11) "danielhe4rt"
  [1]=>
  string(9) "he4rtdevs"
}
```

Vamos comparar o resultado abaixo com o nosso último teste acima e anotar algumas diferenças:

- No primeiro usamos chaves como string
- No segundo usamos chaves incrementais padrões de um array

Ao colocar um dado dentro de um array sem uma chave, ele automaticamente atribui o primeiro valor incremental, sendo ele iniciado **sempre** do 0.

Agora vamos entender como mostrar a saída de um vetor. Vamos declarar dois vetores e trabalhar com eles:

```php
<?php

$array1 = [
    'dev' => 'danielhe4rt',
    'group' => 'he4rtdevs'
];

$array2 = [
    'danielhe4rt',
    'he4rtdevs'
];

// Array associativo
echo $array1['dev'] . "\n";
echo $array1['group'] . "\n";

// Array não associativo
echo $array2[0] . "\n";
echo $array2[1] . "\n";
```

<p align="center"><i>Arquivo encontrado em: exemplos/tipos7.php</i></p>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php tipos7.php
danielhe4rt
he4rtdevs
danielhe4rt
he4rtdevs
```

Com isso podemos entender que é possível acessar tanto com a posição do nosso vetor quanto a uma chave específica atribuída.

Ir para: [3.4 Variáveis](04-Variaveis.md)
