# Wordpress + Tailwind

Este projeto é um boilerplate (modelo inicial) de WordPress integrado com Tailwind CSS. Ele foi criado para ajudar a iniciar rapidamente o desenvolvimento de temas personalizados do WordPress com a poderosa biblioteca de classes utilitárias do Tailwind CSS.

Esta é uma impletação do texto descrito em: https://css-tricks.com/adding-tailwind-css-to-wordpress-themes/

## Instalação

Antes de começar, certifique-se de ter o Node.js e o npm instalados em sua máquina.

1. Clone este repositório para o seu ambiente local:
```shell
git clone https://github.com/seu-usuario/seu-projeto.git
cd seu-projeto
```

2. Instale as dependências do projeto utilizando o npm:
```shell
npm install
```

## Executando o projeto

Para iniciar o projeto, você pode usar o comando:

```shell
npx tailwindcss -i ./css/tailwind.css -o ./css/style.css --watch
```

Este comando utiliza o `npx`, uma ferramenta do npm que permite executar pacotes sem a necessidade de instalá-los globalmente. Ele executa o tailwindcss, um pacote do Tailwind CSS, com as seguintes opções:

- `-i ./css/tailwind.css`: indica o arquivo de entrada (input) do Tailwind CSS, onde você pode definir suas configurações personalizadas.

- `-o ./css/style.css`: especifica o arquivo de saída (output) onde o CSS resultante será gerado. Você pode ajustar o caminho e o nome do arquivo conforme necessário.

- `--watch`: habilita o modo de observação (watch mode), fazendo com que o Tailwind CSS recompile automaticamente o CSS sempre que houver alterações no arquivo de entrada. Isso é útil durante o desenvolvimento, pois permite ver as mudanças em tempo real.

Certifique-se de que o caminho para os arquivos de entrada e saída esteja correto de acordo com a estrutura do seu projeto.