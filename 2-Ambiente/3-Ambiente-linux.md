## 2.3 Ambiente Linux

Nosso ambiente de desenvolvimento nas distribuições Linux será bem simples de se instalar (Linux tem dessas né).

Vamos instalar o PHP com alguns módulos para ajudar no desenvolvimento posteriormente.

Pra instalar tudo de uma vez, basta rodar o comando abaixo:
- Debian, Ubuntu e distribuições derivadas(apt):
```bash
sudo apt install php php-mysql php-zip php-curl
```
- Arch Linux, Manjaro e distribuições derivadas(pacman):
```bash
sudo pacman -S php
```
após a instalação no arquivo `/etc/php/php.ini` mude a linha `;extension=mysqli` para `extension=mysqli`.

Caso sua distribuição não seja baseada no Debian (apt) você deve usar o gerenciador de pacotes apropriado para a sua distribuição (yum, pacman, zypper, ...).

Após finalizar com sucesso a instalação do PHP e dos módulos, você pode conferir a versão instalada rodando o comando abaixo:

```bash
$ php -v
```

O retorno do comando acima deve exibir algo parecido com:

```bash
PHP 7.4.11-0ubuntu0.19.10.3 (cli) (built: Feb 12 2020 15:22:33) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.11, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.3.11-0ubuntu0.19.10.3, Copyright (c) 1999-2018, by Zend Technologies
```

Para verificar os módulos instalados, basta rodar o comando abaixo:

```bash
$ php -m
```

Para identificar os arquivos de configuração do PHP (php.ini), basta rodar o comando abaixo:

```bash
$ php --ini
```

Ir para: [2.4 Ambiente MacOS](4-Ambiente-macos.md)
