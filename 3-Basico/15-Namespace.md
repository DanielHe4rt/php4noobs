# 3.15 Namespaces

Namespaces no PHP servem para encapsular códigos e eliminar a possibilidade de
colisão de nomes. É uma forma de agrupar classes, interfaces, funções, métodos, constantes, etc. Que estão relacionadas.

## Declaração

Uma declaração começa com a palavra-chave `namespace` e termina com um ponto e vírgula.

### Declarando um namespace

```php
<?php

namespace Controllers;

class IndexController
{
    //aqui vai o conteúdo/definição da classe
}
```

Observe no exemplo acima, que a declaração de `namespace` é a primeira linha de código em um arquivo.
Todo o código que vem depois é encapsulado no namespace `Controllers`.

## Sub namespace

Também é possível escrever sub-namespaces. Tudo o que está definido no exemplo abaixo fará parte do
namespace `Controllers\Admin`

### Declarando um sub-namespace

```php
<?php

namespace Controllers\Admin;

class AdminController
{
    //aqui vai o conteúdo/definição da classe
}
```

## A instrução `use`

Uma vez que você declarou namespaces em seu sistema é possível importar classes, traits, etc.
Para isso basta usar a instrução `use`.

A instrução `use` substitui a necessidade das variações de `require` e `include` para importação de arquivos de código.
Cada namespace deve ter sua própria instrução `use`.

### Importando códigos com a instrução `use`

```php
<?php

namespace Controllers;

use Symfony\Component\Console\Input\{InputInterface, InputOption};
use Symfony\Component\Console\Output\OutputInterface;
use Zend\Twitter;
```

## Alias em namespaces: `as`

O uso de um namespace também permite [*alias*](https://pt.wikipedia.org/wiki/Alias_(comando)). Isso é feito usando a palavra-chave `as` para reduzir o namespace ou para evitar colisões devido a nomes iguais.

### Exemplo de uso de alias em namespaces:

```php
<?php

namespace Controllers;

use Zend\Twitter as Twit;

```

#### Notas
 
- Vimos algumas coisas aqui que estão relacionadas a orientação a objetos, não se preocupe com isso agora, teremos uma sessão só pra tratar disso.
- Namespaces são [*case-insensitive*](https://pt.wikipedia.org/wiki/Case-sensitive), significa que tanto faz escrever com letras maiúsculas ou minúsculas, mas fique atento aos padrões de PSRs, falaremos sobre isso também.

Ir para: [4.0 Intermediário](../4-Intermediário/0-introducao.md)