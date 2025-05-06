
# 📈 Painel de Ações B3 – API brapi.dev (PHP)

Este projeto é uma interface web simples feita em PHP que consulta cotações de ações da bolsa brasileira (B3) utilizando a API gratuita [brapi.dev](https://brapi.dev).

## 🔧 Funcionalidades

- Consulta automática das ações: PETR4, VALE3, ITUB4, B3SA3, ABEV3, BBAS3, MGLU3, WEGE3, LREN3, BBDC4
- Tabela com:
  - Ticker da ação
  - Nome da empresa
  - Último preço
  - Variação percentual (verde/vermelho)
  - Preço de abertura, máxima, mínima e volume do dia
- Atualização automática a cada 60 segundos
- Layout responsivo e leve

## ▶️ Como usar

1. Suba o projeto em um servidor com suporte a PHP (ex: XAMPP, Hostinger, VPS etc)
2. Acesse `banner.php` no navegador:
   - `http://localhost/banner.php` (local)
   - `https://seusite.com/banner.php` (online)

## 📌 Observações

- Não é necessário banco de dados.
- Os dados são consumidos diretamente da API brapi.dev.
- Você pode modificar os tickers no início do `banner.php`.

## 📃 Licença

Este projeto está sob a licença MIT.
