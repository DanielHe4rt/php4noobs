# 3.1 - Funções de Saída

Após o nosso ambiente montado com todas as ferramentas necessárias, iremos começar a ver algum código na prática. <br>
Como iremos usar o nosso console em uma boa parte do curso, precisaremos de algumas funções para nos auxiliar a visualizar qualquer saída de dados do nosso código. E nessa lição, iremos conhecer essas funções.<br>

## Função -> echo()

Descrição: Exibe uma ou mais strings e não tem nenhum retorno.<br><br>

Quando nós fizermos qualquer tipo de código, precisaremos entender se ele funcionou ou não. Na maior parte do tempo, iremos usar o **echo** para fazer essa verificação. <br>
Veja este primeiro exemplo:<br>

```php
<?php

echo "Olá"; // Olá
echo 123; // 123
```

<center><i>Arquivo encontrado em: exemplos/saida1.php</i></center>

Vamos executar o arquivo acima para vermos qual é a saída desse código utilizando o comando abaixo: <br>

```
    php /curso-php/3-PHP-Básico/3.1-Funções-de-saida/exemplos/saida1.php
```

<img src="https://i.imgur.com/AsR09ki.gif">

## Função -> var_dump()

Descrição: coleta informações sobre o dado inserido.<br><br>

O PHP ainda não suporta completamente a tipagem de dados, porém ele consegue interpretar sem maiores problemas os tipos dados como entrada. Serão raras as vezes que iremos usar essa função (caso você aprenda o PHP de um jeito 'certo'), mas conhecer nunca é demais.

```php
<?php

var_dump("Olá");
var_dump(123);
```

<center><i>Arquivo encontrado em: exemplos/saida2.php</i></center>

Vamos executar o arquivo acima para vermos qual é a saída desse código utilizando o comando abaixo: <br>

```
    php /curso-php/3-PHP-Básico/3.1-Funções-de-saida/exemplos/saida2.php
```

<img src="https://i.imgur.com/oiWtGWb.gif">
