# Desafio Técnico RZ Code - To-Do List
 Aplicação de lista de tarefas (To-Do List) desenvolvida como parte do processo seletivo para o teste de Backend da RZ Code.
 

 ## 🎯 Objetivo
 A aplicação tem como objetivo permitir que um usuário se registre, faça login e gerencie a sua própria lista de tarefas, podendo **adicionar**, **listar**, **editar**, **concluir**, **apagar** e **restaurar** tarefas.

 ## ✨ Diferenciais Implementados
 Além dos requisitos obrigatórios, este projeto inclui:
 - **Autenticação Completa:** Sistema de registo e login para garantir que cada utilizador só aceda às suas próprias tarefas.
   
 - **Banco de Dados:** Utilização do MySQL para persistência de dados, gerido de forma isolada com Docker.
   
 - **Interface Reativa (SPA-like):** A interface foi construída com o stack TALL (TailwindCSS, Alpine.js, Laravel, Livewire) e TallStackUi, proporcionando uma experiência de utilizador fluida e sem recarregamento de página.
   
 - **Padrão de Código e Commits:** Utilização do Laravel Pint e Husky para garantir automaticamente o padrão de estilo do código e a formatação das mensagens de commit antes de cada submissão.

 ## Tecnologias Utilizadas

- Backend: Laravel 12, PHP 8.3

- Frontend: Livewire 3, TallStackUi, Tailwind CSS, Alpine.js

- Banco de Dados: MySQL

- Ambiente de Desenvolvimento: Docker com Laravel Sail

- Qualidade de Commits e Padrão de Código: Husky e Laravel Pint
  

## 🚀 Como Rodar a Aplicação

Este projeto utiliza Laravel Sail, a ferramenta oficial do Laravel para gerir um ambiente de desenvolvimento Docker. As instruções de configuração do banco de dados já estão automatizadas.

### Pré-requisitos

- Docker e Docker Compose instalados na sua máquina.

- Composer

- NPM (Node.js)

### Passo a passo

1- Clonar o repositório

`
git clone [URL_DO_SEU_REPOSITÓRIO_AQUI]
`


`
cd nome-do-projeto
`

2- Instalar as dependências do PHP

`
composer install
`

3- Configurar o Ambiente

- Copie o ficheiro de exemplo .env.example para .env. O Laravel Sail irá ler este ficheiro para configurar o ambiente.

`
cp .env.example .env
`

4- Subir os containers Docker com Sail

- Antes de rodar os comandos, no seu terminal, rode:
  
  `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
  `
- Esse comando vai permitir que você defina um apelido para os comandos do Sail

- Depois, rode:

  `
  sail up -d
  `

5- Gerar a Chave da Aplicação

`
sail artisan key:generate
`

6- Instalar Dependências do Frontend

`
sail npm install
`

7- Em outro terminal, compilar os assets do frontend

`
sail npm run dev
`

8- Executar as Migrations e Popular o Banco

`
sail artisan migrate:fresh --seed
`
