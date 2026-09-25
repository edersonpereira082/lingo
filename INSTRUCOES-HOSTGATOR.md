# Instalar o Lingo (XAMPP e HostGator)

## Uso local no XAMPP

1. Ligue **Apache** e **MySQL** no painel do XAMPP.
2. A pasta do projeto deve estar em `C:\xampp\htdocs\lingo`.
3. Abra `http://localhost/lingo/install.php`.
4. Confirme: servidor `localhost`, porta `3306`, banco `lingo`, usuário `root`.
   - A senha do MySQL no XAMPP costuma ser vazia **ou** `root`.
5. Clique em **Instalar banco e conteúdo**.
6. Defina a senha do admin em `http://localhost/lingo/admin/definir-senha.php`.
7. Site: `http://localhost/lingo/` · aluno demo: `demo@lingo.local` / `demo123`.

Se a instalação local já foi feita, o `install.php` fica bloqueado. Para reinstalar, apague `config/install.lock`.

---

# Publicar o Lingo na HostGator


O sistema já está preparado para o cPanel. Siga nesta ordem.

## 1. No cPanel

1. **MultiPHP** — escolha PHP **8.1** ou **8.2** para o domínio (ou para a pasta do site).
2. **Bancos de Dados MySQL**
   - Crie o banco, por exemplo `lingo` (o cPanel coloca o prefixo da conta: `sua_conta_lingo`).
   - Crie um usuário MySQL e uma senha forte.
   - Adicione o usuário ao banco com **ALL PRIVILEGES**.
   - Anote: servidor `localhost`, nome do banco, usuário e senha.
3. **SSL** — ative o certificado (Let’s Encrypt / AutoSSL) e, se quiser, “Force HTTPS Redirect”.

## 2. Enviar os arquivos

Envie **toda a pasta** do Lingo (FTP ou Gerenciador de Arquivos) para:

- `public_html/` — se o site for a página principal do domínio, **ou**
- `public_html/lingo/` — se for uma subpasta.

Não envie a pasta do XAMPP (`mysql`, `php`, etc.). Só os arquivos deste projeto.

Permissões usuais: pastas `755`, arquivos `644`. A pasta `config/` já está protegida por `.htaccess`.

Antes de enviar, você pode apagar `config/install.lock` se o sistema já tiver sido instalado no XAMPP — assim o `install.php` roda de novo na HostGator com os dados do cPanel.

## 3. Instalar o banco

1. Abra no navegador: `https://seu-dominio/install.php`  
   (ou `https://seu-dominio/lingo/install.php` se estiver em subpasta).
2. Informe os dados do MySQL anotados no cPanel (nome do banco e usuário **com o prefixo** da conta).
3. Clique em **Instalar banco e conteúdo**.
4. Abra **Senha do admin** e crie a senha do usuário `admin`.
5. **Apague o arquivo `install.php` do servidor.**

## 4. Primeiro acesso

- Site: `https://seu-dominio/`
- Aluno de teste: `demo@lingo.local` / `demo123` (troque ou desative depois)
- Admin: `https://seu-dominio/admin/login.php` — usuário `admin`

## 5. Conferir

- Página inicial e cadastro de aluno
- Escolha de idioma e caminho das aulas
- Uma aula completa (teoria + exercícios)
- Vocabulário, ranking e perfil
- Painel admin: cursos, unidades, aulas e exercícios

## Se a página não abrir

- Confira o PHP 8.1+ no MultiPHP.
- Confira usuário, senha e nome do banco (com o prefixo da conta).
- Se aparecer “Banco de dados indisponível”, os dados em `config/config.php` não batem com o cPanel. Corrija ou rode `install.php` de novo (apague `config/install.lock` só nesse caso).
- Se o SSL estiver ativo, descomente as 2 linhas HTTPS no `.htaccess` ou use “Force HTTPS Redirect” no cPanel.
