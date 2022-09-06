# Requisição de arquivos

Em Linguagens de script, precisamos incluir dentro de nosso programa outros arquivos, e 
para fazer isso usamos as requisições de arquivos que podem incluir funções, constantes,
configurações do banco, ou até mesmo um arquivo que contem toda definição de uma classe.

### Qual a diferença entre include & require?

A diferença entre include e require é como um erro é tratado.

``Require`` - produz um erro E_COMPILE_ERROR, fazendo com que a execução do script seja encerrada.

``include`` - produz um E_WARNING, apenas produz um warning, não chega a encerrar a aplicação.
Que pode ser "abafado" com @

``require`` & ``include`` são funções do tipo ``statement``. A semântica correta do uso destas funções é:


```text
include 'arquivo.php' OU  require 'arquivo.php'
```

### Cuidados
- Não use desnecessariamente as requisições.
- Sempre verifique para não fazer requisições de arquivos por acidente.

Assim evitamos a duplicidade de requisições, pois caso seja usado repetidamente na mesma pagína o mesmo será
incluso ou requerido duplicadamente.

### Atenção!
Temos o include_once e o require_once que faz a verificação dos arquivos para não ter nenhuma
requisição duplicada, sendo assim ele verifica se o mesmo já foi Incluído uma vez, caso tenha sido ele não faz uma nova
inclusão. Por tanto sempre que possível use o include_once e o require_once

### Composer

O Composer é uma ferramenta para o gerenciamento de dependências em PHP. 
Ele permite que você declare as bibliotecas que seu projeto necessita e ele gerencia, instala
e atualiza. Com o composer fazemos todo esse trabalho de requisições e muitas outras coisas
composer é uma ferramente muito poderosa.


- Instalação de novas dependências no projeto;
- Atualização das dependências já instaladas no projeto;
- Remoção de dependências instaladas no projeto;
- Autoload para os arquivos do projeto, além dos pacotes de terceiro;
- Execução de scripts;
- Plugins para estender o comportamento padrão;
- Permite determinar dependências que serão instaladas no modo de desenvolvimento ou em modo de produção.


Ir para: [5.1 Include](1-include.md)
