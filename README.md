## Crie um Projeto em Laravel ✔️

Laravel é um framework PHP moderno, elegante e robusto para desenvolvimento web. Ele facilita a criação de aplicações escaláveis e com código limpo, utilizando uma estrutura MVC e ferramentas nativas poderosas.

---

### 💠 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

* **PHP 8.1+**
* **Composer** (gerenciador de dependências do PHP)
* **Node.js + npm** (para assets frontend com Vite)
* **Um banco de dados** (MySQL, PostgreSQL ou SQLite)
* **Laravel Installer** (opcional, mas recomendado)

---

### 📚 Passo a Passo

---

### 🛠 Creating an Application

Após instalar o PHP, o Composer e o instalador do Laravel, você pode criar uma nova aplicação com:

```bash
laravel new example-app
```

O instalador pode perguntar sobre seu framework de testes, banco de dados e kit inicial (starter kit) desejado.

---

#### 📂 Acesse a pasta do projeto

```bash
cd example-app
```

---

#### 📦 Instale dependências do frontend e compile os assets

```bash
npm install && npm run build
```

---

#### ⚙️ Inicie o ambiente completo de desenvolvimento

```bash
composer run dev
```

Esse comando inicia:

* O **servidor local Laravel** (`php artisan serve`)
* O **queue worker** para processamento de filas
* O **servidor do Vite** para atualizar automaticamente os assets frontend

---

### 🔧 Configuração do ambiente

Copie o arquivo `.env` e gere a chave da aplicação:

```bash
cp .env.example .env
php artisan key:generate
```

---

### 🗄 Configure seu banco de dados

Edite o arquivo `.env` com as informações do seu banco:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=exemplo
DB_USERNAME=root
DB_PASSWORD=secret
```

---

### 🧱 Rode as migrations (opcional)

```bash
php artisan migrate
```

---

### 🧪 Teste no navegador

Acesse:
`http://localhost:8000`
Você verá a página de boas-vindas do Laravel.

---


Para gerar um controller:

```bash
php artisan make:controller HelloController
```

---

### 🌐 Links úteis

* [Documentação oficial do Laravel](https://laravel.com/docs)
* [Laracasts (vídeos e tutoriais)](https://laracasts.com)
* [Documentação do PHP](https://www.php.net)

---

✅ **Pronto! Você criou seu projeto Laravel com ambiente completo!**