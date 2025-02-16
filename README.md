# Plataforma de Cursos Online

## 📌 Sobre o Projeto

Este projeto é uma plataforma de cursos online desenvolvida como parte da conclusão de curso. O sistema permite que instrutores cadastrem cursos, gerenciem conteúdos e que alunos possam se inscrever, assistir aulas e obter certificados de conclusão.

## 🚀 Tecnologias Utilizadas

- **Backend:** Laravel (PHP Framework)
- **Frontend:** HTML, CSS, JavaScript
- **Banco de Dados:** MySQL
- **Outros:** Blade Templates, Bootstrap, Axios
- **Autenticação:** Laravel Passport ou Sanctum
- **Gerenciamento de Dependências:** Composer, NPM

## 🎯 Funcionalidades

✅ Cadastro e login de usuários (alunos e instrutores) com autenticação segura
✅ Gestão de cursos, módulos e aulas
✅ Upload de vídeos e materiais complementares
✅ Sistema de inscrição e acompanhamento do progresso do aluno
✅ Emissão de certificados de conclusão
✅ Dashboard administrativo com relatórios de desempenho✅ Sistema de avaliações e feedbacks dos cursos ✅ Notificações por e-mail para novos cursos e atualizações ✅ API RESTful para integração com aplicativos móveis

## 📌 Requisitos

Antes de instalar, certifique-se de ter os seguintes requisitos:

- PHP 8+
- Composer
- MySQL
- Node.js e NPM (para compilação de assets)
- Extensões PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML

## ⚙️ Instalação

1. Clone o repositório:

   ```sh
   git clone https://github.com/seuusuario/plataforma-cursos.git
   cd plataforma-cursos
   ```

2. Instale as dependências do projeto:

   ```sh
   composer install
   npm install && npm run dev
   ```

3. Configure o arquivo `.env`:

   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

   Edite o `.env` e configure as credenciais do banco de dados e outros serviços.

4. Rode as migrações e seeders para popular o banco de dados:

   ```sh
   php artisan migrate --seed
   ```

5. Gere a chave JWT (se estiver usando autenticação JWT):

   ```sh
   php artisan jwt:secret
   ```

6. Inicie o servidor localmente:

   ```sh
   php artisan serve
   ```

   Acesse `http://127.0.0.1:8000` para explorar a plataforma.

## 🛠 Uso

- **Instrutores:** Podem criar e gerenciar cursos, acompanhar estatísticas de alunos e responder dúvidas.
- **Alunos:** Podem se inscrever em cursos, assistir vídeos, baixar materiais e emitir certificados após a conclusão.

## 📢 Contribuição

Sinta-se à vontade para abrir issues e enviar pull requests. Toda ajuda é bem-vinda!

## 📜 Licença

Este projeto está sob a licença MIT. Para mais detalhes, consulte o arquivo `LICENSE`.

## 📞 Contato

Se precisar de ajuda ou quiser sugerir melhorias, entre em contato pelo e-mail: `dulciobernardo90@gmail.com` .

