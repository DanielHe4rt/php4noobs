# 3.14 Estruturas de Controle: Loops

As estruturas de controle relacionadas a Loops tendem a ter regras para continuar executando instruções do código até que essa regra seja quebrada.

Em outras palavras, você tem uma condição que é interpretada como um valor lógico que é checada e enquanto ela for verdadeira, o bloco de código é executado até que o valor a ser checado mude para falso.

## Repetição: **for**

O laço `for` funciona baseado em três argumentos dentro de parênteses, separados por vírgulas como uma condição para ser executado até que essa condição acabe.

Quando vemos uma condição que leva três argumentos no inicio, parece um pouco estranho. Mas vamos entender primeiro como funciona e como se aplica.

Quando falamos dos argumentos, temos que entender primeiramente que o FOR trata-se de um loop baseado num incrementador/decrementador até que a condição seja realizada.

```
for (valor inicial; condição; incremento/decremento) {
    // Faça algo maneiro aqui
}

for ($i = 0; $i < 10; $i++) {
    // Faça algo maneiro aqui
}
```

Agora falaremos dos parâmetros do for:

#### Primeiro parâmetro: índice inicial no qual você quer trabalhar.

Esse índice é um número inteiro onde você trabalhará com incrementação ou decrementação.

#### Segundo parâmetro: condição para que o laço seja finalizado.

Se você tem um índice como primeiro parâmetro, a cada vez que esse loop rodar você terá incrementado ou decrementado, fazendo a mesma pergunta da condição até que ela seja satisfeita.

#### Terceiro parâmetro: incrementador/decrementador.

Esse parâmetro será responsável por dizer ao loop se ele vai incrementar ou decrementar o índice do laço.

Agora vamos para alguns exemplos:

## Exemplo #1 - Contando até 10:

```php
$contador = 10;
echo "Script pra contar até" . $contador . PHP_EOL;
for($i = 1; $i <= $contador; $i++){
    echo $i . "... ";
}
echo PHP_EOL . "Script finalizado!";

// Resultado
// "Script pra contar até 10"
// "1... 2... 3... 4... 5... 6... 7... 8... 9... 10..."
// "Script Finalizado!"
```

## Exemplo #2 - Tabuada do 5:

```php
$multiplicador = 5;
echo "Script pra imprimir a tabuada do $multiplicador" . PHP_EOL;
for($i = 1; $i <= 10; $i++){
    echo $multiplicador . " x " . $i  . " = " . ($multiplicador * $i) . PHP_EOL;
}
echo "Script finalizado!";

// Resultado
// "Script pra imprimir a tabuada do 5"
// "5 x 1 = 5"
// "5 x 2 = 10"
// "5 x 3 = 15"
// "5 x 4 = 20"
// "5 x 5 = 25"
// "5 x 6 = 30"
// "5 x 7 = 35"
// "5 x 8 = 40"
// "5 x 9 = 45"
// "5 x 10 = 50"
// "Script Finalizado!"
```

## Repetição: **while**

A estrutura de condição while leva uma condição booleana no começo que é executada eternamente enquanto o valor passado for verdadeiro.

Ele só tem uma condição a ser lida e vai ficar em execução até que essa condição seja declarada como falsa.

```
while(condição){
    // faça algo maneiro
}
```

Vamos dar os mesmos exemplos da condição **for** só que com o laço **while**:

## Exemplo #1 Contando até 10:

```php
$continuaLoop = true;
$i = 1;
echo "Script pra contar até 10"  . PHP_EOL;
while ($continuaLoop){
    echo $i . "... ";
    if ($i == 10){
        $continuaLoop = false;
    }
    $i++;
}
echo PHP_EOL . "Script finalizado!";

// Resultado
// "Script pra contar até 10"
// "1... 2... 3... 4... 5... 6... 7... 8... 9... 10..."
// "Script Finalizado!"
```

Vocês perceberam que foi utilizado mais código fazendo com o while do que com o for? Isso é por quê quando tratamos de situações incrementais, o laço for é a melhor solução pra isso. Porém, nada te impede de fazer a mesma coisa junto ao while.

Você também pode usar a expressão **while($i++ < $contador)** mas raramente é usado pra algo em códigos que serão utilizados em produção.

## Repetição: **foreach**

O laço de repetição **foreach** é usado para iterar arrays ou objetos. O foreach funciona passando por cada elemento do array e atribuindo à ele variáveis do escopo da estrutura, para uma melhor manipulação dos elementos.

O foreach acontece enquanto houver iteráveis dentro do array e pode parar com a condição **break**, caso não, ele continua até o final do array.

A estrutura do foreach leva dois ou três parâmetros para ser iterado, com a possiblidade de não declarar o valor do índice. Entenda abaixo:

```php
$names = ["waasleey", "leozin044", "rychillie", "jpbrabo"];
// Iteração sem a indíce
foreach($names as $name){
    echo $name . " ";
}
// Retorno: waasley leozin044 rychillie jpbrabo

// Iteração com a indíce
foreach($names as $key => $name){
    echo $key . "." . $name . " ";
}
// Retorno: 0.waasley 1.leozin044 2.rychillie 3.jpbrabo
```

Como primeiro parâmetro, o foreach espera um array ou objeto onde ele possa percorrer os índices.

Como segundo parâmetro, será o nome da váriavel que receberá o valor da iteração. Porém caso você queira colocar o índice e valor da iteração, você deverá atribuir mais uma variável com o sinal de **igual maior =>**, colocando o nome da variável de índice atrás da seta e a variável com o valor a da iteração após a seta.

```
foreach ($array as $iteracao => $valor)
```

Não necessáriamente precisamos colocar o indíce, pois caso não seja usado para algo dentro do loop, só irá consumir mais um espaço na memória.

## Exemplo #1 Iterando um objeto:

```php
$pessoa = new StdClass;
$pessoa->nome = "danielhe4rt";
$pessoa->idade = 21;
$pessoa->trabalho = "Fullstack Developer";

foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}
// Resultado:
// nome: danielhe4rt
// idade: 21
// trabalho: Fullstack Developer
```

## Exemplo #2 Iterando um objeto com chaves e valores:

```php
$pessoa = [
    "nome" => "danielhe4rt",
    "idade" => 21,
    "trabalho" => "Fullstack Developer"
];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

// Resultado:
// nome: danielhe4rt
// idade: 21
// trabalho: Fullstack Developer
```

## Exemplo #3 Iterando um objeto com chaves e valores:

```php
$pessoa = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

// Resultado:
// 0: danielhe4rt
// 1: 21
// 2: Fullstack Developer
```

## Exemplo #4 Iterando um objeto com chaves e valores:

```php
$pessoa = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa as $valor) {
    echo "$valor" . PHP_EOL;
}

// Resultado:
// danielhe4rt
// 21
// Fullstack Developer
```
## Controlando suas reptições

Bom, agora que entendemos sobre loops, podemos encontrar algumas situações, onde queremos controlar o fluxo de interação. Seja pulando uma interação especifica, ou simplesmente interromper sua execução. Para estes casos temos o `continue` e o `break`.

## Continue 

O cotinue, é uma espécime de "comando", que damos para nossa repetição "pular" aquela interação, em especifico.

Vamos imaginar uma situação onde queremos imprimir apenas, números pares, podemos a utilizar para imprimir apenas eles.
### Exemplo #1 - Imprimindo numeros pares
```php
for ($numero = 0; $numero < 5; $numero++) {
    if($numero % 2 === 1){
        continue;
    }

    echo $numero . " é par.";
    // Resultado:
    // 0: 0 é par
    // 2: 2 é par 
    // 4: 4 é par
}
```

O comando continue, é funcional para as estruturas `for`, `while`, `foreach` e `do-while`.

## Break

O `break` assim como o `continue`, é um comando para o controle do fluxo de repetição. Porém sua função é de interromper a interação por completo, normalmente é utilizado quando o loop já satisfez sua funcionalidade e não tem necessidade de ir até o final.

## Exemplo #1 - Loops Infinitos
Um dos exemplos mais claros é em situações que queremos sim um loop, infinito. Vamos pensar na funcionalidade de menu:

```php
while(true){
    echo "Olá seja bem vindo, qual mensagem deseja enviar?"  . PHP_EOL;
    echo "1. Bom dia" . PHP_EOL;
    echo "2. Boa tarde". PHP_EOL;
    echo "3. Boa noite" . PHP_EOL;
    echo "0. SAIR" . PHP_EOL;
    
    // Nota: a função readline, é apenas uma maneira de coletar a informação vinda de um usuario. 
    $resposta = readline ('Digite uma opção: '); // digitei: 1
    
    if($resposta == '1') {
        echo 'Bom dia' . PHP_EOL;
    } else if($resposta == '2') {
        echo 'Boa tarde' . PHP_EOL;
    } else if ($resposta == '3') {
        echo 'Boa noite' . PHP_EOL;;
    }else if($resposta == '0') {
        echo 'Bye!' . PHP_EOL;
        break;
    }
}
```

Perceba que no exemplo acima, assim que o úsuario digitar 0 o programa irá ser "finalizado".


### **Não se confuda**: 
Na sessão anterior [Estruturas de controle de condições](./13-Estruturas-de-controle-cond.md). Nós lhe apresentamos a estrutura `switch` e juntamente a ela já haviamos lhe apresentado o comando `break`. Porém, em uma situação diferente, dentro do switch, neste caso o mesmo não irá ter efetividade sobre o loop.

#### Exemplo #2
Vamos repetir o exemplo anterior, porém desta vez ao inves do conjunto if/else, vamos utilizar switch no lugar.

```
while(true){
    echo "Olá seja bem vindo, qual mensagem deseja enviar?"  . PHP_EOL;
    echo "1. Bom dia" . PHP_EOL;
    echo "2. Boa tarde". PHP_EOL;
    echo "3. Boa noite" . PHP_EOL;
    echo "0. SAIR" . PHP_EOL;
    $resposta = readline ('Digite uma opção: '); 

    switch($resposta){
        case '1':
            echo 'Bom dia' . PHP_EOL;
            break;
        case '2':
            echo 'Boa tarde' . PHP_EOL;
            break;
        case '3':
            echo 'Boa noite' . PHP_EOL;
            break;
        case '0':
            break; // Isso me parece um pouco estranho, não ??????
        break;
    }
}
```

O código acima entrará em *loop infinito*, o comando `break` sempre será utilizado para sua função dentro do switch case, mas **não interromperá** o loop, então *CUIDADO*.

Ir para: [3.15 Namespace](15-Namespace.md)
