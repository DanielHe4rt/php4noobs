## 2.4 Ambiente MacOS

Para o ambiente MacOS, utilizaremos uma ferramenta chamada Homebrew para instalar o PHP.

Homebrew é um gerenciador de pacotes open-source que simplificaa instalação de uma grande variedade de softwares no ambiente MacOS e Linux.

Nota: As versões mais recentes do MacOS já vêm com o PHP pré-instalado, porém é sempre uma boa idéia atualizá-lo.

## Passo a passo:

- Instale o Homebrew executando o seguinte comando em seu terminal (para mais informações: https://brew.sh/):

  ```bash
  /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
  ```

- Caso o passo anterior for executado com sucesso, poderá executar o comando:

  ```bash
  $ brew -v

  # Resultado esperado
  Homebrew 2.7.5 # Ou qualquer outra versão
  ```

- Se desejar instalar a versão do PHP mais recente suportada pelo homebrew, basta executar o seguinte comando:

  ```bash
  # Para installar a versão mais recente
  $ brew install php
  ```

- Caso deseje installar uma versão específica, pode pesquisar por todas as versões disponíveis no homebrew:

  ```bash
  $ brew search php

  # Resultado
  php@7.2    php@7.3   php@7.4    php...


  # Instalar versão desejada
  $ brew install php@7.2
  ```

- Se todos os passos anteriores foram executados com sucesso, o PHP já está instalado em sua máquina.
  Para testá-lo, pode executar o seguinte comando no seu terminal:

  ```bash
  $ php -v

  # Resultado esperado:
  PHP 8.0.1 (cli) (built: Jan  8 2021 12:35:09) ( NTS )
  Copyright (c) The PHP Group
  Zend Engine v4.0.1, Copyright (c) Zend Technologies
    with Zend OPcache v8.0.1, Copyright (c), by Zend Technologies
  ```

Para mais informações sobre como instalar o PHP utilizando homebrew no MacOS:

https://formulae.brew.sh/formula/php

Ir para: [2.5 Dicas Gerais](5-Dicas-gerais.md)
