
<?php
// URL da API com token e tickers
$url = "https://brapi.dev/api/quote/PETR4,VALE3,ITUB4,B3SA3,ABEV3,BBAS3,MGLU3,WEGE3,LREN3,BBDC4?token=sg2JdbqpASKHMf8UBq8dE3";

// Obtém os dados da API
$response = file_get_contents($url);
$data = json_decode($response, true);

// Formata a data atual
$dataAtual = date("d/m/Y H:i:s");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Painel de Ações B3</title>
  <meta http-equiv="refresh" content="60"> <!-- Atualiza a cada 60 segundos -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #004080;
      color: white;
    }
    .positive { color: green; }
    .negative { color: red; }
  </style>
</head>
<body>

<h1>Painel de Ações – Atualizado em <?php echo $dataAtual; ?></h1>

<table>
  <thead>
    <tr>
      <th>Ticker</th>
      <th>Empresa</th>
      <th>Último Preço</th>
      <th>Variação (%)</th>
      <th>Abertura</th>
      <th>Máxima</th>
      <th>Mínima</th>
      <th>Volume</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['results'] as $acao): ?>
      <tr>
        <td><?= $acao['symbol'] ?></td>
        <td><?= $acao['longName'] ?? '-' ?></td>
        <td>R$ <?= number_format($acao['regularMarketPrice'], 2, ',', '.') ?></td>
        <td class="<?= ($acao['changePercent'] >= 0) ? 'positive' : 'negative' ?>">
          <?= number_format($acao['changePercent'], 2, ',', '.') ?>%
        </td>
        <td>R$ <?= number_format($acao['regularMarketOpen'], 2, ',', '.') ?></td>
        <td>R$ <?= number_format($acao['regularMarketDayHigh'], 2, ',', '.') ?></td>
        <td>R$ <?= number_format($acao['regularMarketDayLow'], 2, ',', '.') ?></td>
        <td><?= number_format($acao['regularMarketVolume'], 0, ',', '.') ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>
