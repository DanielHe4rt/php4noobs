# 3.0 - Sintaxe

Como em toda lingua, nós temos que entender e compreender como ela é escrita e isso se refere diretamente a gramática e suas regras. Na programação, temos também um conjunto de regras para que algo consiga ser lido e interpretado tanto pelo computador, quanto pela pessoa que estará lendo seu código.

Código é feito de simbolos e caracteres e isso é chamado de sintaxe e nesse momento iremos entender as **regras** que devem ser seguidas para você programar no PHP.

## Pontuação

Pontuação é algo obrigatório para escrita de textos formais, independente da língua que você estiver praticando e na programação ela também tem um papel fundamental.

Entenda que você estará trabalhando com uma língua, (como se fosse português ou inglês) e em ambas a pontuação deve ser respeitada para uma fácil interpretação.

O PHP tem um interpretador que irá checar cada linha escrita com essas pontuações e caso você não siga essa regra de sintaxe, ele irá te retornar uma mensagem de erro indicando a linha e o tipo de "erro gramátical" que você cometeu.

PS: jogue esse erro no google pra um melhor resultado.

## Ponto e virgula (;)

Ponto e virgula é a declaração que uma linha de código foi finalizada no PHP.

Declarações de código em PHP **devem** acabar com ponto e virgula **(;)** pois é exatamente esse caractére que indica pro interpretador executar essa linha de código.

Declarações de código que não terminarem com ; indicam pro interpretador continuar para a próxima linha e caso a linha anterior **não tenha ;** ele emite um erro de sintaxe, também conhecido como **parse error**

Exemplo Funcionais;

```php
echo "Eu sou um desenvolvedor do coração";

echo "He4rtDevs é o " . "melhor grupo <3";
```

Exemplos não funcionais

```
echo "Eu sou um desenvolvedor do coração"
```

```
echo "He4rtDevs é o " .
     "melhor grupo <3"
```

No segundo exemplo incorreto, usamos um operador de concatenação (.) que indica pro código continuar executando aquela linha de código porém vimos que faltou o ponto e virgula e isso irá jogar uma excessão para o usuário assim que essa linha for executada.

## Tags do PHP

Para que um script seja executado no PHP, primeiro ele deve identificar se há uma tag de abertura de script

```
<?php
```

... até encontrar a linha de finalização de código

```
?>
```

... onde o interpretador identifica que o bloco de código foi finalizado.

Caso você tenha habilitado nas suas configurações a diretiva de **short_open_tags** você pode substituir a abertura padrão pela abaixo:

```
<?php ?>

   \/

<?    ?>
```

Caso você apenas queira imprimir algum dado, você pode usar a "tag de echo" com alguma variavel ou dado que você queira.

```
<?= "He4rtDevs" ?>
```

Todos os comandos **devem** ser encapsulados por alguma tag de abertura e fechamento do PHP ou ele irá jogar uma exception (excessão) para o usuário.

Se o arquivo a ser lido tiver apenas um script em PHP, ele não necessita da tag de finalização **?>** e em algumas situações, não fechar a tag é considerado boa prática.
