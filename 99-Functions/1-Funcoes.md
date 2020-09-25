# 4.1 - Funções / Métodos

Quando falamos em funções para pessoas que não são programadoras, com toda certeza a primeira coisa que vem na cabeça são aquelas contas super difíceis de se aplicar da matemática onde são usadas variáveis e nunca retornam um resultado legível para as pessoas que não entendem do assunto, certo?

Bom, é isso que eu penso e até entender o que era de fato, foi sempre isso ai. E agora vou te ajudar a desmistificar essa maravilha da programação então vem comigo.

## O que é uma função?

Em poucas palavras: **Função é um bloco de código reutilizável** onde você pode atrelar uma responsabilidade única.

Ficou confuso? Vamos entender sobre o que é preciso pra se escrever uma função:

- Palavra reservada **function**;
- Um nome para a função (como se fosse uma variável);
- Parâmetros (opcional)
- Um bloco de código.

Com isso ai podemos escrever uma função bem simples e começar a entender a metodologia da coisa toda.

## Escrevendo a primeira função

Vamos escrever uma função simples e analisar os elementos citados acima no bloco abaixo.

```php
function recepcionar ($nomePessoa)
{
    echo 'Olá ' . $nomePessoa;
}

recepcionar('danielhe4rt');
```

<p align="center"><i>Arquivo encontrado em: exemplos/funcoes0.php</i></p>

Olhando bem por cima, podemos ver os pontos citados porém vamos listar pra ficar o mais claro possível:

- Palavra reservada function;
- Nome da função (recepcionar);
- Parâmetros: \$nomePessoa (opcionais);
- Bloco de código {tudo que estiver entre as chaves}.

Para executar uma função, basta digitar o seu nome e adicionar os parâmetros caso tenha e tá pronto a funçãozinha!

Vamos ver o exemplo acima em funcionamento:

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/4-Intermediario/exemplos$ php funcoes0.php
Olá danielhe4rt
```

Agora vamos detalhar melhor como uma função deve ser criada de fato e suas responsabilidades.

## Nomes de Funções

Ao criar uma função, assim como uma variável ela deve ser objetiva no que ela deve fazer para que você não se perca em algum momento durante o desenvolvimento.

Pra isso, temos que evitar nomes de funções:

- resposta()
- essecodigotaumamerda()
- fgts()
- fixaBug()

Sim, coisas como essa realmente acontecem em cenários reais e você tem o DEVER de seguir um padrão de desenvolvimento pra ajudar tanto a você que está trabalhando no projeto quanto as próximas pessoas que forem mexer no seu código.

Tá, mas como podemos padronizar essas funções? Vamos falar primeiro sobre **PascalCase,snake_case e camelCase**.

### PascalCase

PascalCase se trata de capitalizar todas as primeiras letras de palavras que você for colocar em algum nome, removendo os espaços. Vamos entender escrevendo algumas funções abaixo:

```php
function RecepcionarUsuario()
{
}

function AlterarUsuario()
{
}

function DeletarUsuarioAutenticado()
{
}
```

Essa padronização é bastante usada, porém não é a recomendação para escrita de funções e sim para classes.

## snake_case

O snake_case consista-se em escrever a variável sem capitalização e separando as palavras por **"\_"**.

Exemplos:

```php
function recepcionar_usuario()
{
}

function alterar_usuario()
{
}

function deletar_usuario_autenticado()
{
}
```

Esta padronização, já foi mais popular no passado, mas provavelmente em sua jornada como programador PHP, irá se deparar com diversas vezes com este padrão, visto que temos ainda grandes ecossistemas como Worpress que o utiliza como o seu padrão. Dentro da linguagem ainda há DIVERSAS, funções nativas utilizando este padrão, segue um breve exemplo:

```php
 preg_replace("(\w+)", "He4rth Developers", "Devs");
 is_int(10);
```

O snake_case, deve ser utilizado para variáveis e funções. Deve se tomar cuidado para não mistura-lo, com outras padronizações.

### camelCase

Esse é o padrão usado pela comunidade em quesito de funções, sendo ela escrita com a primeira palavra sem capitalização e seguindo das próximas com capitalização.

Vamos pros exemplos:

```php
function recepcionarUsuario()
{
}

function alterarUsuario()
{
}

function deletarUsuarioAutenticado()
{
}
```

Como padrão de comunidade, camelCase deve ser seguido à risca para criação de funções e é extremamente importante para padronização de código dentro de empresas. Logo, isso vai ser usado em um cenário real e seria bom você já estar acostumado/preparado.

PS: seria muito interessante também você padronizar nomes de funções/variáveis em **inglês** e já ir se acostumando com esse tipo de nome de função.

## Parametrização

Parâmetros são váriaveis que deixam sua função flexível para o seu uso. Elas são opcionais, porém é quase certeza que você vai usar funções parametrizadas e vamos entender um pouco sobre.

Pense no parâmetro como uma entrada dentro de uma variável que sua função irá receber e processar, tal como nossa primeira função **recepcionar()** que recebe o parâmetro **\$nomePessoa** e printa ela na tela junto com mais algumas coisas.

#### Parâmetro com valor Padrão

```php
function greetings($name)
{
    echo "Hello " . $name;
}

greetings('DanielHe4rt');
```

Caso eu não passe nenhum parâmetro dentro da chamada de **greetings()** ele irá dar erro e dizer que é algo **necessário** para que a aplicação continue sendo executada. Pra evitar que algo do tipo aconteça caso for um parâmetro que possa ser opcional, você deve atribuir um valor inicial sendo **\$name = "danielhe4rt"**.

Olha o exemplo abaixo:

```php
function greetings($name = 'danielhe4rt')
{
    echo 'Hello ' . $name;
}

greetings();
```

<p align="center"><i>Arquivo encontrado em: exemplos/funcoes1.php</i></p>

```console
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/4-Intermediario/exemplos$ php funcoes1.php
Hello danielhe4rt
```

Executando o código podemos que não houve um padrão passado pelo usuário e ele simplesmente consumiu o que estava por padrão. Lembre-se de usar parâmetros opcionais apenas quando você tiver a **EXTREMA CERTEZA** que eles podem ser opcionais para não bugar nenhuma aplicação em produção.

#### Tipagem de parâmetros

Vamos falar sobre o assunto que toda comunidade de desenvolvedores aborda quando o assunto é PHP: **tipagem**.

O PHP não te obriga a colocar os tipos de dados que devem ser usados em funções, porém à partir da versão 7 eles deram essa opção de tipagem.

Quando falamos em tipagem, pensamos logo em linguagens altamente tipadas como Java, C, C# etc. Essas linguagens te pedem que você declare as variáveis já com algum tipo pré-definido. Já no PHP vocẽ só coloca um `$` e um nome e pronto.

Agora vamos entender os tipos que você pode usar nas funções, sendo eles: `string`, `int`, `bool`, `array`, `float` e `classes`.

Vamos pros exemplos e esclarecer essa bagunça acima:

```php
function greetings(string $name, bool $welcome = false)
{
    if ($welcome) {
        echo 'Hello ' . $name;
    } else {
        echo 'Get the fuck out of here ' . $name;
    }

}

greetings('DanielHe4rt', true);
```

No exemplo, foram usadas duas variáveis com seus respectivos tipos atribuidos, sendo:

- `$name` - uma String;
- `$welcome` - um Booleano;

Agora que você atribuiu tipos, você sabe exatamente o que essa função espera que você envie e o seu desenvolvimento vai ser mais semântico e legível tanto por você quando para outras pessoas.

O que eu pensava sobre isso:

"[...] mas sou eu que estou desenvolvendo, eu sei o que isso significa".

Hoje eu entendo que código não é escrito apenas para um compilador/interpretador mas sim para outros desenvolvedores que irão dar manutenção em algum momento no seu código.

## Funções Anônimas

[Documentação](https://www.php.net/manual/pt_BR/functions.anonymous.php)

No PHP, também podemos criar função sem nome especifico, elas normalmente são utilizadas, como [**callback**](###callbacks) de alguma outra ação.

É Importante saber, que as funções anônimas, enxergaram apenas escopo próprio, e não herdam automaticamente o escopo anterior, por este motivo não se deve utilizar `$this` ou `globals` por exemplo, para realizar alguma ação dentro da função.

Mas afinal, como vamos utilizar no dia a dia, para a sua utilização como callback, como citado anteriromente , vamos utilizar de exemplo a sua utilização na função `array_filter()
`:

```php
// Buscando e criando um novo vetor(array) apenas com números, pares entre 1,2,3,4.
$numerosPares = array_filter([1,2,3,4], function($numero)
{
    return $numero % 2 == 0;
}); // Resultado: [2,4]
```

Támbem pode-se atribuir uma função anônima, a uma variavel, como:

```php
$funcaoExemplo = function($nome)
{
printf("Melhor grupo de desenvolvedores é a: %s\r\n", $nome);
};

$funcaoExemplo('He4rtDevs'); //Resultado:  O Melhor grupo de desenvolvedores é a He4rtDevs
```

Para a função utilizar alguma variavel do escopo anterior, é necessário passar o complemento `use()`, como o exemplo a seguir:

```php
$mensagem = "He4rtDevs";
$exemplo = function () use ($mensagem)
{
    echo $mensagem;
};
$exemplo(); // Resultado: He4rtDevs

```
### Callbacks
Bom com alguns conceitos explicados, pode ter ficado com um nó na cabeça, mas afinal o que é um **CALLBACK** ?

Resumidamente, é um nome para uma função, que vai ser passada como paramêtro dentro de outra função, calma... Vamos aos exemplos.

Primeiramente, vamos tentar algo mais simples, por exemplo podemos passar uma função da propria linguagem para execução de uma tarefa:
```php
    array_map('trim',['  oi tudo bem ? ', ' Como vai você?', 'Beleza ?  ']); // Resultado: ['oi tudo bem?', 'Como vai você ?', 'Beleza ?']
```

Bom, explicando de uma maneira, mais declarativa, podemos interpretar, como quando sua mãe fala explicitamente para você:
    - "Filho, por favor lave a louça para mim, enquanto vou ao mercado. Se fizer lhe dou um doce. Se não, vou te colocar de castigo."

```php
function pedirParaLavarLouca($filho, $callback)
{
    $resultado = lavouLouca();

    if($resultado === true) {
        echo $callback('pirulito', null);  // Resultado: Ebaaa Joãozinho, ganhou um pirulito.
    } else {
        echo $callback(null, '1 Semana sem video game'); // Resultado: Que pena! Joãozinho vai ficar 1 Semana sem video game.
    }
}

function lavouLouca()
{
    return true;
}

$filho = 'Joãozinho';
pedirParaLavarLouca($filho, function($doce, $castigo) use ($filho)
{
    if($doce !== null) {
        return "Ebaaa $filho, ganhou um $doce."; 
    } else if($castigo !== null) {
        return "Que pena! $filho vai ficar $castigo.";
    }
});
```

## Funções de exemplo

Abaixo estão algumas funções usando o que aprendemos até o momento sobre esse tópico.

Soma de dois números:

```php
function twoNumbersSum(int $x, int $y)
{
    return $x + $y;
}

$result = twoNumbersSum(5,13);

echo 'Result: ' . $result;
// Result: 18
```

Fake Login

```php

function authenticateUser(string $username, string $password)
{
    $database = [
        'username' => 'danielhe4rt',
        'password' => '5b3097aa10de9db25cebe494beee6c28' // He4rtDevs
    ];

    if ($database['username'] != $username) {
        return 'This user doesnt exists';
    }
    if ($database['password'] != md5($password)) {
        return 'Wrong password';
    }

    return 'Login Successful';
}
```

Ir para: [4.2 - Funções de manipulação de String](2-Funcoes-strings.md)