# AureusERP no Dokploy

Este guia torna o AureusERP **plug-and-play** no [Dokploy](https://dokploy.com).
O `Dockerfile` na raiz do projeto compila a partir do **código-fonte local**
(suas traduções e personalizações são incluídas na imagem).

## Pré-requisitos no Dokploy

1. Um servidor com Dokploy instalado.
2. Um domínio/apontamento DNS configurado (ex: `erp.seudominio.com`).

---

## Opção A — Aplicação via Dockerfile (recomendado)

### 1. Criar o banco de dados MySQL

No painel do Dokploy: **Databases → MySQL → Create**.

Anote os dados gerados:
- **Host**, **Port**, **Database name**, **Username**, **Password**

Crie o banco manualmente (via phpMyadro/Dokploy) com:
```sql
CREATE DATABASE aureus CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 2. Criar a aplicação

No painel do Dokploy: **Applications → Create**.

| Campo              | Valor                                      |
|--------------------|--------------------------------------------|
| **Type**           | Dockerfile                                 |
| **Name**           | aureus-erp                                 |
| **Source**         | GitHub (seu repositório)                   |
| **Port**           | 80                                         |
| **Build Path**     | `/` (raiz)                                 |

### 3. Variáveis de ambiente

Na aba **Environment Variables** da aplicação, adicione:

```env
APP_NAME=AureusERP
APP_ENV=production
APP_DEBUG=false
APP_URL=https://erp.seudominio.com
APP_LOCALE=pt_BR
APP_CURRENCY=BRL
APP_TIMEZONE=America/Sao_Paulo

DB_CONNECTION=mysql
DB_HOST=<host-do-mysql-do-dokploy>
DB_PORT=3306
DB_DATABASE=aureus
DB_USERNAME=<usuario-do-mysql>
DB_PASSWORD=<senha-do-mysql>

ADMIN_NAME=Administrador
ADMIN_EMAIL=admin@suaempresa.com
ADMIN_PASSWORD=trocar-esta-senha
```

### 4. Domínio e SSL

Na aba **Domains**, adicione `erp.seudominio.com` e ative **Let's Encrypt**
para SSL automático (Dokploy/Traefik cuida do HTTPS).

### 5. Deploy

Clique em **Deploy**. Na primeira inicialização o container:
1. Aguarda o MySQL ficar disponível.
2. Executa `php artisan erp:install` (migrações + seeders + admin).
3. Inicia Nginx + PHP-FPM + queue worker + scheduler via Supervisor.

Acesse `https://erp.seudominio.com/admin` e faça login com o admin criado.

---

## Opção B — Aplicação via Docker Compose

1. **Applications → Create → Type: Docker Compose**
2. Defina o compose file como `docker-compose.dokploy.yml`.
3. Configure as mesmas variáveis de ambiente da Opção A.

---

## Pós-instalação

| Ação                                | Comando no terminal do container                |
|-------------------------------------|--------------------------------------------------|
| Trocar a senha do admin imediatamente | `php artisan tinker` → alterar o usuário admin |
| Rodar migrations manuais            | `php artisan migrate --force`                   |
| Limpar cache                        | `php artisan optimize:clear`                    |
| Status dos serviços (Supervisor)    | `supervisorctl status`                          |

## Persistência

Monte um volume em `/var/www/aureuserp/storage` para preservar
uploads, sessões e logs entre reinícios.

## Idioma

O locale **pt_BR** (Português do Brasil) já vem instalado e é o padrão.
Altere em tempo de execução com a variável `APP_LOCALE` ou pelo seletor
de idioma no painel administrativo.
