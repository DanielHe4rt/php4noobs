## 2.2 Ambiente Windows

Para o windows vamos usar o servidor web embutido do PHP, que pode ser usado para o
desenvolvimento e testes/estudos.

### Passo a passo:

* Baixe os arquivos zipados da última versão do PHP no link: https://windows.php.net/download;
* Descompacte os arquivos que você baixou dentro da pasta `C:\Program Files`;   
* Renomeie a pasta que você descompactou para `php`;
* Edite as variáveis de ambiente do Windows;
    * No menu iniciar pesquise por “Exibir configurações avançadas do sistema” abra o utilitário;
    * Na guia “Avançado” clique em “Variáveis de Ambiente“;
    * Em variáveis sistema escolha a opção “Path” e clique em editar;
    * Na nova janela “Editar variável de ambiente” clique no botão novo informe o caminho onde está o PHP “C:\Program Files\php”;
    * Clique no botão “OK”.
* Abra o CMD/Terminal do Windows e digite `php -v`, você verá a versão do PHP instalado no seu Windows.

### Exemplo - Iniciando o servidor web

* Abra um CMD na pasta que contém seus códigos;
* Digite `php -S localhost:8000`;
* Acesse seu navegador de internet e digite o endereço: `http://localhost:8000`;
* Pronto, seu código está sendo executado no servidor embutido do PHP.

Para mais informações sobre o servidor embutido do PHP consulte o link abaixo:

https://www.php.net/manual/pt_BR/features.commandline.webserver.php

Ir para: [2.3 Ambiente Linux](3-Ambiente-linux.md)