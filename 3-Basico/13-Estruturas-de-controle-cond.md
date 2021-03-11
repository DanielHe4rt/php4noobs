# 3.13 Estruturas de Controle

Estruturas de controle remetem a decisões de um trecho de código que deverá ser executado baseado em um teste lógico. Para verificar se a resposta é **VERDADEIRA** ou **FALSA**, você precisará usar alguma das estruturas de controle de decisão.

Vamos exemplificar com [pseudocódigo](https://pt.wikipedia.org/wiki/Pseudoc%C3%B3digo):

## Exemplo #1 - Trancando a casa:

```
- Vá até o seu portão.
- Tente trancar o portão.
- Se você tiver a CHAVE, faça:
    - Tranque Portão.
- Se NÃO:
    - Busque a chave;
    - Volte ao portão;
    - Tranque o portão.
```

## Exemplo #2 - Trocar a Lâmpada:

```
- Ligue o interruptor.
- Se a LÂMPADA NÃO acender, faça:
    - Procure uma lâmpada nova;
    - Remova a lâmpada queimada;
    - Insira a nova lâmpada.
```

Foram dados exemplos de como funcionaria estruturas de condições, agora vamos analisar cada uma delas.

## Condição: if / else:

A estrutura condicional `if` recebe um valor e resolve, colocando a resposta como um valor **BOOLEANO**. Ou seja: você poderá retornar apenas um valor **VERDADEIRO**, representado por **if (condição)** ou **FALSO**, representado por **else** (como os exemplos de SE dados acima).

Estrutura de código para a condição **IF/ELSE**:

```
if (condition) {
    // condição verdadeira
    // faça algo
} else {
    // condição falsa
}
```

[Link para documentação - IF](https://www.php.net/manual/pt_BR/control-structures.if.php)
[Link para documentação - ELSE](https://www.php.net/manual/pt_BR/control-structures.else.php)

A estrutura acima representa exatamente como será feito em código, abaixo alguns exemplos:

## Exemplo #1 - Maior de idade:

```php
$idade = 17;

if ($idade >= 18) {
    echo "Você é maior de idade";
} else {
    echo "Você é menor de idade";
}
// Result: "Você é menor de idade"
```

## Exemplo #2 - Melhor grupo de Devs:

```php
$grupo = "ZezinhoDevs";

if ($grupo == "He4rtDevs") {
    echo "Sim, esse é o melhor grupo de devs do brasil";
} else {
    echo "Isso nem existe velho tá maluco";
}
// Result: "Isso nem existe velho tá maluco"
```

## Exemplo #3 - Retratando checagem de autenticação:

```php
$estouLogado = true;

if ($estouLogado) {
    echo "Continue acessando sua aplicação";
} else {
    echo "Redirecionando para o login";
}
// Result: "Continue acessando sua aplicação"
```

## Exemplo #4 - Condição com dois parâmetros:

```php
$usuario = "danielhe4rt";
$senha = "secret123";

if ($usuario == "danielhe4rt" && $senha == "secret123") {
    echo "Olá danielhe4rt, seja bem vindo";
} else {
    echo "Credenciais incorretas";
}
// Result: "Olá danielhe4rt, seja bem vindo"
```

## Condição: if / else if / else:

Quando vemos algum tipo de condição de if/else, o IDEAL é que sejam duas possibilidades de escolha. Porém, toda linguagem de programação existe a condicional extra chamada **else if**, na qual adiciona mais uma possibilidade de retorno VERDADEIRA para a condição.

Na prática, você pode ter N checagens para interpretar uma resposta retornando VERDADEIRO, até chegar na condição FALSA. Entenda o exemplo abaixo:

```
if (first condition) {
    // condição verdadeira
} else if(second condition) {
    // condição verdadeira
} else if(third condition) {
    // condição verdadeira
} else {
    // condição falsa
}
```

Você pode adicionar quantos Else if's você quiser no código, mas lembre-se de terminar usando else para ter uma interpretação de condição FALSA.

[Link para documentação](https://www.php.net/manual/pt_BR/control-structures.elseif.php)

Abaixo alguns exemplos:

### Exemplo 01:
```php
$userDaniel = "danielhe4rt";
$passDaniel = "secret123";

$userCaio = "caioarruda";
$passCaio = "caiozin123";

if ($userDaniel == "danielhe4rt" && $passDaniel == "secret123") {
    echo "Olá danielhe4rt, seja bem vindo";
} else if ($userCaio == "caiozin" && $passCaio == "321321") {
    echo "Olá caiozin, seja bem vindo";
} else {
    echo "Credenciais incorretas";
}
```

### Exemplo 02:
Você também pode utilizar, elseif (a palavra junta). A lógica é a mesma.
```php
$userDanoel = "danoelCoracion";
$passDanoel = "Pssword";

$userArthur = "arthurabreu00";
$passArthur = "tutututututsussuussusw";

if ($userDanoel == "danoelCoracion" && $passDanoel == "Pssword") {
    echo "Olá danoelCoracion, seja bem vindo";
} elseif ($userArthur == "arthurdeabreu" && $passArthur == "321321") {
    echo "Olá Arthur, seja bem vindo";
} else {
    echo "Credenciais incorretas";
}
```

## Condição: switch-case:

O construtor **switch** parece bastante com a lógica do if/else if, porém há uma estrutura melhor para comportar o que você deseja colocar como valores predefinidos.

A declaração tem como base uma condição e N casos de uso dependendo do valor inserido na condição, e é finalizado após a palavra reservada **break** ser acionada, que pode ser interpretado como o fim de um bloco de código...

Caso não haja nenhuma opção elegível dentro dos casos citados, você pode usar a opção **default** para retornar um valor padrão.

Um bom exemplo de quando usar o **switch case** é quando você está em um jogo/chat e há comandos onde um bot te responde baseado no que você inseriu no chat.

Estrutura do switch-case:

```
switch (cond) {
    case val1:
        // faça algo
        break;
    case val2:
        // faça algo
        break;
    case val3:
        // faça algo
        break;
    defaut:
        // faça algo quando nenhuma das opções for selecionada
        break;
}
```

## Exemplo #1
Lista de comandos

```php
$comando = "!he4rt";

switch($comando){
    case "!site":
        echo "Link: https://heartdevs.com";
        echo "Esse é o site oficial";
        break;
    case "!he4rt":
        echo "Entre no nosso discord: https://discord.com/he4rt";
        echo "Esse é o discord oficial";
        break;
    case "!comandos":
        echo "Segue a lista de comandos";
        echo "!he4rt !site";
        break;
    default:
        echo "nada acontece feijoada";
        break;
}
// return Entre no nosso discord: https://discord.com/he4rt Esse é o discord oficial
```

## Exemplo #2
Comando não existente

```php
$comando = "!teste";

switch($comando){
    case "!site":
        echo "Link: https://heartdevs.com";
        echo "Esse é o site oficial";
        break;
    case "!he4rt":
        echo "Entre no nosso discord: https://discord.com/he4rt";
        echo "Esse é o discord oficial";
        break;
    case "!comandos":
        echo "Segue a lista de comandos";
        echo "!he4rt !site";
        break;
    default:
        echo "nada acontece feijoada";
        break;
}
// return Nada acontece feijoada
```

## Condição: match
O Match é uma novidade do PHP 8, com ela ganhamos uma nova opção para fazer comparações multiplas, além dos classico if e else e do switch, visto anteriomente.

O **match** apróxima-se bastante do switch, em sua lógica. Onde ele pecorre as opções e retorna a primeira que é compativel com suas condicionais. As diferenças entre eles é sua sintaxe mais elegante e suas operações sempre, são acompanhadas pela comparação com os tipos (===).

Outra vantagem do **match**, é a relização de operações, entre cenário positivos (Exemplo 02), onde podemos fazer novas comparações, para encontrar um resultado esperado.

[Link para documentação](https://www.php.net/manual/en/control-structures.match.php)

### Exemplo 01
```php
$comando = "!he4rt";
echo match($comando) {
    "!site" => "Link: https://heartdevs.com",
    "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
    default => "nada acontece feijoada"
}; // "Entre no nosso discord: https://discord.com/he4rt"
```

### Exemplo 02
Caso, não seja uma opção assertiva, sempre caíra no 'default':
```php
echo match("heart devs") {
    "!site" => "Link: https://heartdevs.com",
    "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
    default => "nada acontece feijoada"
}; // "nada acontece feijoada"
```

### Exemplo 03
Neste exemplo, vamos classificar a idade do usuario. Em vez de escrevermos um switch ou if/else gigansteco, podemos reduzir esta logica a apenas 6 linhas.
```php

$idade = 21;
$result = match (true) {
    $idade >= 65 => 'Idoso',
    $idade >= 25 => 'Adulto',
    $idade >= 18 => 'Jovem adulto',
    default => 'Criança',
};

echo $result; // "Jovem Adulto"
```
## Condição: ternário

O operador ternário ajuda na escrita de condições if/else diminuindo para uma única linha. Ou seja, será algo para ser usado quando você tem uma fácil comparação e um retorno SIMPLES.

O operador ternário leva alguns símbolos para substituir o uso de parênteses e chaves, sendo eles o **?** e **:**

O Sinal de **?** sinaliza para o interpretador que tudo que for escrito anteriormente, será a condição a ser executada.

Após o sinal de **?** e entre o sinal de **:** é o que irá retornar se a condição for verdadeira e após o sinal de **:** é o que irá retornar caso a condição for falsa.

Abaixo alguns exemplos:

```
Modelos de ternário

condition ? case true : case false;
```

## Exemplo #1

```php
$nickname = 'danielhe4rt';

$who = $nickname == "jorge123" ? "é o jorge online" : "não é o jorge online";

echo $who; //  não é o jorge online

```

## Exemplo #2

```php
$modoTeste = true;

return $modoTeste  ? "MODO DESENVOLVIMENTO ATIVADO" : "MODO DESENVOLVIMENTO DESATIVADO";
// return MODO DESENVOLVIMENTO ATIVADO
```

## Condição: coalescência nula

O operador de coalescência nula (**??**) fornece uma forma conveniente de retornar o valor antes do sinal de **??** caso o valor exista e não seja **NULL** ou retorna o valor após o sinal de **??**.

É especialmente útil quando queremos retornar um valor padrão caso uma chave não exista em um array associativo, pois é um ótimo substituto para o operador ternário ou uma estrutura de if/else nesses casos.

[Link para documentação](https://www.php.net/manual/pt_BR/language.operators.comparison.php#language.operators.comparison.coalesce)

## Exemplo

```php
$descricaoPorCodigo = array(
    1 => 'Este usuário já existe.',
    2 => 'Senha incorreta.',
    3 => 'Este usuário está bloqueado.',
);

// Exemplo utilizando operador ternário - Retorna 'Alguma coisa deu errado', pois a chave 5 não existe
return isset($descricaoPorCodigo[5]) ? $descricaoPorCodigo[5] : 'Alguma coisa deu errado.';

// A lógica acima pode ser simplicada utilizando o operador de coalescência nula
return $descricaoPorCodigo[5] ?? 'Alguma coisa deu errado.';
```

#### Notas
 
- `isset` verifica a existência de uma variável ou uma chave e retorna um valor boleano. Se a variável/chave existir e **não possuir** o valor igual a `NULL` o resultado retornado será `TRUE`, caso for `NULL` ou não existir, o resultado retornará `FALSE`.

Ir para: [3.14 Estruturas de Controle: Loops](14-Estruturas-de-controle-loops.md)

