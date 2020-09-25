# 4.3 - Funções de manipulação de Arrays

Nesse tópico, iremos abordar algumas funções importantes para manipulação de arrays e deixar links úteis para você pesquisar mais sobre caso queira.

## implode

A função **`implode()`** retorna uma string à partir de uma array, juntando todos os vetores em ordem crescente com um delimitador selecionado.

[Link para documentação](https://www.php.net/manual/pt_BR/function.implode)

### Exemplos

Exemplo #1
RandomExample

```php
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(',', $array);

echo $comma_separated; // lastname,email,phone
```

## array_push

A função **`array_push()`** insere um novo elemento no final de um array.

Argumentos/Parâmetros:

- Array no qual você quer inserir um novo elemento;
- Novo elemento.

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-push)

### Exemplos

Exemplo #1
Melhores Comunidades

```php
$communities = []; // []

array_push($communities, 'He4rtDevs');

print_r($communities); // ['He4rtDevs']

array_push($communities, 'CodigoFalado');

print_r($communities); // ['He4rtDevs', 'CodigoFalado']
```

Exemplo #2
Array de Arrays

```php
$communities = [
    'communities' => [
        'He4rtDevs',
        'CodigoFalado',
        'php.net',
        'TwitchTV'
    ]
];

array_push($communities, ['Links' => ['https://heartdevs.com'] ]);
// Resultado
// $communities = [
//     'communities' => [
//         'He4rtDevs',
//         'CodigoFalado',
//         'php.net',
//         'TwitchTV'
//     ],
//     'links' => [
//         'https://heartdevs.com'
//     ]
// ];


array_push($communities['links'], 'https://codigofalado.com.br');

// Resultado
// $communities = [
//     'communities' => [
//         'He4rtDevs',
//         'CodigoFalado',
//         'php.net',
//         'TwitchTV'
//     ],
//     'links' => [
//         'https://heartdevs.com',
//         'https://codigofalado.com.br',
//     ]
// ];
```

## array_search

A função **`array_search()`** procura um elemento dentro do valor e retorna sua chave caso encontrado.

Argumentos/Parâmetros:

- Elemento que você deseja buscar no array;
- Array a ser pesquisado.

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-search)

### Exemplos

Exemplo #1
Melhores Comunidades

```php
$communities = ['php.net','CodigoFalado','TwitchTV','He4rtDevs']; // []

$result = array_search('CodigoFalado', $communities); // Return 1
$result = array_search('He4rtDevs', $communities); // Return 3
$result = array_search('foguete roxo', $communities); // Return false
```

## array_diff

A função **`array_diff()`** compara um ou mais arrays e retorna os elementos que divergem tendo o primeiro array como referência.

Argumentos/Parâmetros:

- Primeiro array a ser comparado;
- Segundo array a ser comparado;
- N arrays a serem comparados.

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-diff)

### Exemplos

Exemplo #1
Cores maneiras

```php
$colorPallete1 = ['yellow', 'pink', 'purple', 'red'];
$colorPallete2 = ['yellow', 'pink', 'brown', 'blue'];

$result = array_diff($colorPallete1, $colorPallete2);
// Result
// [
//    'purple',
//    'red'
// ]

```

Exemplo #2
Cores maneiras 2.0

```php
$colorPallete1 = ['black', 'pink', 'purple', 'red'];
$colorPallete2 = ['yellow', 'pink', 'brown', 'blue'];
$colorPallete3 = ['yellow', 'white', 'brown', 'blue'];

$result = array_diff($colorPallete1, $colorPallete2, $colorPallete3);
// Result
// [
//    'black',
//    'purple',
//    'red'
// ]

```

## array_sum

A função **`array_sum()`** soma todos os valores dentro de um array.

Argumentos/Parâmetros:

- Primeiro array a ser comparado.

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-sum.php)

### Exemplos

Exemplo #1
Numeros inteiros

```php
$numbers = [1, 5, 3, 4, 7, 1];
$result = array_sum($numbers); // Result 21
```

Exemplo #2
Números flutuantes

```php
$numbers = [1.5, 6, 2, 8.3, 0.3];
$result = array_sum($numbers); // Result 18.1
```

## array_replace

A função **`array_replace()`** substitui valores do primeiro array passado usando os próximos como critério de comparação.
Os arrays que irão ser passados deverão conter a chave de qual elemento será substituído seguido do seu valor. Os parâmetros após o primeiro são infinitos.

Argumentos/Parâmetros:

- Primeiro array a ser comparado;
- 1o Array com mudanças a serem feitas;
- 2o Array com mudanças a serem feitas.
- ...

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-replace)

### Exemplos

Exemplo #1
Números inteiros

```php
$names = ['danielhe4rt', 'geekcom','Loooooogan_','MaeHe4rt'];
$nick1 = [2 => 'Loogan_'];
$nick2 = [2 => 'kjkGustavo', 3 => 'JuhBotelho'];

$result = array_replace($names, $nick1, $nick2);

// Result
// [
//    'danielhe4rt',
//    'geekcom',
//    'kjkGustavo',
//    'JuhBotelho',
// ]
```

Ir para: [4.4 - Funções de manipulação de Arquivos](4-Funcoes-arquivos.md)