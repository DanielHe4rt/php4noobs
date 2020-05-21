## 2.3 Ambiente Linux

Nosso ambiente de desenvolvimento nas distribuições Linux serão bem simples de se instalar (Linux tem dessas né).

Vamos instalar o PHP com alguns pacotes extras para ajudar no desenvolvimento posteriormente sendo eles:

- php 7.4^
- php-mysql
- php-zip
- php-curl

Pra instalar tudo de uma vez, basta rodar o comando abaixo:

```bash
sudo apt install php php-mysql php-zip php-curl
```

Após finalizar a instalação dos pacotes você pode ir no seu terminal e digitar **php -v** para ter uma visualização do seu php.

```bash
danielhe4rt@he4rt:~/dev/he4rt/php4noobs$ php -v
PHP 7.4.11-0ubuntu0.19.10.3 (cli) (built: Feb 12 2020 15:22:33) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.11, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.3.11-0ubuntu0.19.10.3, Copyright (c) 1999-2018, by Zend Technologies
```

Agora você poderá iniciar seus testes de aprendizado, simplesmente rodando:

```bash
php -S localhost:8000
```

Lembrando que este recurso esta disponível para versões 5.4+.
