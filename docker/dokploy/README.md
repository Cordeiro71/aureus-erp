# AureusERP no Dokploy

O `docker-compose.yml` na raiz do projeto sobe **aplicação + MySQL** juntos.
Basta conectar o repositório no Dokploy e clicar em Deploy — sem configurar
banco de dados separado.

## Deploy rápido (3 passos)

### 1. Criar a aplicação no Dokploy

**Applications → Create**

| Campo         | Valor                                  |
|---------------|----------------------------------------|
| **Type**      | Docker Compose                         |
| **Name**      | aureus-erp                             |
| **Source**    | GitHub → `Cordeiro71/aureus-erp`       |
| **Port**      | 80                                     |

O Dokploy detecta o `docker-compose.yml` automaticamente.

### 2. Variáveis de ambiente (opcionais — tudo tem defaults)

Na aba **Environment Variables**, recomenda-se ajustar:

```env
APP_URL=https://erp.seudominio.com
ADMIN_EMAIL=admin@suaempresa.com
ADMIN_PASSWORD=trocar-esta-senha
DB_PASSWORD=trocar-esta-senha
DB_ROOT_PASSWORD=trocar-esta-senha-root
```

### 3. Domínio + SSL

Na aba **Domains**: adicione `erp.seudominio.com` e ative **Let's Encrypt**
para HTTPS automático (Dokploy/Traefik cuida do certificado).

Clique em **Deploy**.

## O que acontece no primeiro boot

1. O serviço **MySQL** sobe e cria o banco `aureus` + usuário automaticamente.
2. O serviço **app** aguarda o MySQL ficar saudável (`healthcheck`).
3. O `entrypoint.sh` gera a `APP_KEY`, executa `php artisan erp:install`
   (migrações + seeders + admin) e inicia Nginx + PHP-FPM + queue + scheduler.
4. Acesse `https://erp.seudominio.com/admin` e faça login com o admin criado.

## Persistência

O compose declara dois volumes nomeados (preservam dados entre reinícios):

| Volume            | Container path                       | Conteúdo                |
|-------------------|--------------------------------------|-------------------------|
| `aureus-mysql`    | `/var/lib/mysql`                     | Banco de dados          |
| `aureus-storage`  | `/var/www/aureuserp/storage`         | Uploads, sessões, logs  |

## Variáveis disponíveis

| Variável          | Default                | Descrição                          |
|-------------------|------------------------|------------------------------------|
| `APP_NAME`        | `AureusERP`            | Nome da aplicação                  |
| `APP_URL`         | `http://localhost`     | URL pública                        |
| `APP_LOCALE`      | `pt_BR`                | Idioma (Português do Brasil)       |
| `APP_CURRENCY`    | `BRL`                  | Moeda padrão                       |
| `APP_TIMEZONE`    | `America/Sao_Paulo`    | Fuso horário                       |
| `DB_DATABASE`     | `aureus`               | Nome do banco                      |
| `DB_USERNAME`     | `aureus`               | Usuário do banco                   |
| `DB_PASSWORD`     | `aureus`               | Senha do banco                     |
| `DB_ROOT_PASSWORD`| `root-secret-change-me`| Senha root do MySQL                |
| `ADMIN_NAME`      | `Administrador`        | Nome do admin inicial              |
| `ADMIN_EMAIL`     | `admin@example.com`    | E-mail do admin inicial            |
| `ADMIN_PASSWORD`  | `password`             | Senha do admin inicial             |

## Desenvolvimento local

Para desenvolvimento local com Laravel Sail, use o arquivo separado:

```bash
docker compose -f docker-compose.sail.yml up -d
```

Ou simplesmente `composer run dev` (PHP + Vite + queue + logs).
