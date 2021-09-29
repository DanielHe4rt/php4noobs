# 3.1 - Funções de Saída

Após o nosso ambiente montado e configurado com todas as ferramentas necessárias, iremos começar a ver algum código na prática. <br>
Como iremos usar o nosso console em boa parte do curso, precisaremos de algumas funções para nos auxiliar a visualizar qualquer saída de dados do nosso código. E nessa lição, iremos conhecer essas funções.<br>

## Função -> echo()

[Referencia para documentação](https://www.php.net/manual/pt_BR/function.echo.php)

Descrição: Exibe uma ou mais strings e não tem nenhum retorno.<br>

Quando nós fizermos qualquer tipo de código, precisaremos entender se ele funcionou ou não. Enquanto não chegamos num nível mais profissional com a ferramenta, a função **echo** será nossa melhor amiga para fazer debugging do nosso código.

Veja este primeiro exemplo:

```php
<?php

echo "He4rtDevs";
echo 123456;
```

<center><i>Arquivo encontrado em: exemplos/saida1.php</i></center>

Vamos executar o arquivo acima para vermos qual é a saída utilizando o comando abaixo: <br>

```bash
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php saida1.php
He4rtDevs123456
```

## Função -> var_dump()

[Referência para documentação](https://www.php.net/manual/pt_BR/function.var-dump)

Descrição: coleta informações sobre a variável inserida.<br><br>

Como vamos precisar entender que tipo de dados são passados por variáveis e muitas vezes por referência de outras classes, vamos usar bastante a função **var_dump** para entender o que se passa naquele respectivo ambiente. Agora vamos ver um exemplo:

```php
<?php

var_dump("Olá");
var_dump(123);
var_dump(new stdClass());
```

<center><i>Arquivo encontrado em: exemplos/saida2.php</i></center>

Vamos executar o arquivo acima para vermos qual é a saída utilizando o comando abaixo: <br>

```bash
danielhe4rt@he4rt:~/dev/he4rt/php4noobs/3-Basico/exemplos$ php saida2.php
string(4) "Olá"
int(123)
object(stdClass)#1 (0) {
}
```

Podemos ver que ele nos retornou alguns dados sobre o que inserimos dentro da função **var_dump()** e ele descreveu coisas que se fossem passados por referência, não seriam tão óbvias.

Ir para: [3.2 Comentários](02-Comentarios.md)
