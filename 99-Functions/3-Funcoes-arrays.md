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

## array_map

A função **`array_map`** compõe o grupo das excelentes funções de transformação no PHP. Espera 1 callback e 1 ou N arrays como argumento. Pode ser utilizado no lugar de um foreach por exemplo e deixa explicito que um novo array será gerado.

Argumentos/Parâmetros:
- Função que será executada para cada elemento do array (Recebe como parâmetro o elemento que está sendo iterado)
- Array a ser iterado
- ...

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-map)

### Exemplos

Exemplo #1
Função nativa

```php
$languages = array_map('strtoupper', ['php', 'elixir', 'clojure']);

// Result
//
// [
//  "PHP",
//  "ELIXIR",
//  "CLOJURE"
// ]
```

Exemplo #2
Função personalizada

```php
$languages = array_map(function($language) {
    return md5(ucfirst($language));
}, ['php', 'elixir', 'clojure']);

// Result
// 
// [
//  "2ec543bde83a1a3ed7eb0676e664a8bc",
//  "a12eb062eca9d1e6c69fcf8b603787c3",
//  "3ce4a9c4043142965234ee0c40cef1d0"
// ]
```

Exemplo #3
Combinação de arrays

```php
$languages = array_map(function($language1, $language2) {
    return sprintf('%s - %s', ucfirst($language1), ucfirst($language2));
}, ['php', 'elixir', 'clojure'], ['haskell', 'c#', 'java']);

// Result
//
// [
//  "Php - Haskell",
//  "Elixir - C#",
//  "Clojure - Java"
// ]
```

## array_filter

Similar à função anterior o **`array_filter`** cria um novo array mas dessa vez esperando uma condição. É de fato um filtro.

Argumentos/Parâmetros:
- Array a ser iterado
- Função que será executada para cada elemento do array (Recebe como parâmetro o elemento que está sendo iterado)
- ...

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-filter)

### Exemplos
Exemplo #1 
Retornar somente valores que forem diferente de dada condição

```php
$drinks = array_filter(['tequila', 'vodka', 'whisky'], function($drink){
    return $drink != 'tequila';
});

// Result
//
// [
//  'vodka',
//  'whisky'
// ]
```

Exemplo #2
Retornar somente números (utilizando função nativa como callback)
```php
$numbers = array_filter(['teste', 123456, '123', 0, 'lisp'], 'is_numeric');

// Result
// [
//  123456,
//  123,
//  0
// ]

```

## array_reduce

A função **`array_reduce`** reduz um array de N elementos para 1 único elemento. Muito útil para cálculos ou operações que resultam em um único valor

Argumentos/Parâmetros:
- Array a ser iterado
- Função que será executada para cada elemento do array (Recebe uma variável acumuladora e o elemento que está sendo iterado)

[Link para documentação](https://www.php.net/manual/pt_BR/function.array-reduce)

### Exemplos
Exemplo #1 Soma de todos os itens de um array

```php
$total = array_reduce([10, 20, 10], function($somatoria, $valor){
    $somatoria += $valor;
    return $somatoria;
});

// Result
//
// 40
```

## explode

A função **`explode()`** retorna um array de strings à partir de uma string, separando essa string a partir de uma condição

[Link para documentação](https://www.php.net/manual/pt_BR/function.explode)

### Exemplos

Exemplo #1
RandomExample

```php
$string = "Eu gostaria de separar essa string em espaços";
$arraySeparado = explode(' ', $string);

print_r($arraySeparado); // Array ( [0] => Eu [1] => gostaria [2] => de [3] => separar [4] => essa [5] => string [6] => em [7] => espaços )
```


Ir para: [4.4 - Funções de manipulação de Arquivos](4-Funcoes-arquivos.md)
