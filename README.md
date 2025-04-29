# CODEIGNITER + DOCKER

## PROJETO DE TESTE DO FRAMEWORK CODEIGNITER 3 COM DOCKER

Este projeto foi criado com o objetivo de facilitar o desenvolvimento e testes de aplicações web utilizando o framework **CodeIgniter 3**, com **Docker** como ambiente de desenvolvimento.

A aplicação é uma plataforma simples de cursos online, contendo um CRUD básico que permite a criação, leitura, atualização e exclusão de registros de **usuários** e **cursos**.

---

## 🐳 Estrutura do Ambiente

Este projeto utiliza **Docker** com os seguintes serviços:

- **app**: Container com Apache e PHP para executar o CodeIgniter
- **db**: Container com MySQL 5.7

Os containers se comunicam em rede e compartilham volumes para persistência de dados e sincronização de código.

---

## 🚀 Instalação

### Pré-requisitos

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Passos para rodar o projeto

1. Clone este repositório:

   ```bash
   git clone https://github.com/miqueiasfernando/app-ci-docker.git
   cd seu-repositorio
   ```

2. Suba os containers:

   ```bash
   docker-compose up -d --build
   ```

3. Acesse a aplicação:

   Abra seu navegador em: [http://localhost:8080](http://localhost:8080)

---

## 🔐 Acesso ao Banco de Dados

- **Host**: `localhost`
- **Porta**: `3306`
- **Usuário**: `admin`
- **Senha**: `123456`
- **Database**: `sistema`

Você pode acessar o banco utilizando um cliente MySQL como DBeaver, TablePlus, ou até via terminal:

```bash
mysql -h 127.0.0.1 -P 3306 -u admin -p
```

---

## 📁 Estrutura dos Diretórios

```
├── application/         # Código principal do CodeIgniter
├── system/              # Núcleo do CodeIgniter
├── docker/
│   └── Dockerfile       # Imagem personalizada do container PHP + Apache
├── docker-compose.yml   # Orquestração dos serviços
├── index.php
└── ...
```

---

## 🛠️ Desenvolvimento

Qualquer alteração feita nos arquivos do projeto será refletida automaticamente dentro do container, graças ao volume configurado no `docker-compose.yml`.

---

## 🧹 Finalizando

Para parar e remover os containers:

```bash
docker-compose down
```

Se quiser limpar os volumes e imagens também:

```bash
docker-compose down -v --rmi all
```

---

## ✍️ Contribuições

Sinta-se livre para abrir issues ou enviar pull requests com melhorias, correções ou sugestões para o projeto.
