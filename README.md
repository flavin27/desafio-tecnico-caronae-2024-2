# Caronae - Teste Técnico

Bem-vindo ao teste técnico do projeto **Caronae**. Este projeto é uma aplicação de vizualização de caronas desenvolvida com Laravel 11 e PHP 8.2. Este README fornecerá instruções sobre como configurar e executar o projeto em seu ambiente local.

## Requisitos

| Tecnologia | Versão |
|------------|--------|
| PHP        | 8.2    |
| Laravel    | 11     |


## Instalação

Siga os passos abaixo para configurar e executar o projeto em seu ambiente local.

### 1. Clonar o Repositório

Clone o repositório para o seu ambiente local:

```bash
git clone https://github.com/flavin27/desafio-tecnico-caronae-2024-2.git
cd desafio-tecnico-caronae-2024-2
```

### 2. Instalar Dependências

Instale as dependências do Laravel usando Composer:

```bash
composer install
```
### 3. Configure o Ambiente

Copie o arquivo .env.example para criar o seu próprio arquivo .env:

```bash
cp .env.example .env
```

Abra o arquivo .env e configure a URL da API:

```env
API_URL=http://url-da-sua-api.com
```

### 7. Rodar o Servidor

Inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

## Testes

Para executar os testes automatizados, utilize o comando:

```bash
php artisan test
```

ou 

```bash
vendor/bin/phpunit
```

## Contribuição
Se você deseja contribuir para o projeto, sinta-se à vontade para abrir um pull request ou relatar problemas.

## Licença
Este projeto está licenciado sob a MIT License.



