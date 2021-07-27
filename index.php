  <?php
  $COMISSAO = 5;

  $pagamentos = [
    [
      "ID" => 1,
      "COLABORADOR" => "José",
      "SALARIOFIXO" => 2000.30,
      "VENDASEMANA1" => 1500.10,
      "VENDASEMANA2" => 2250.00,
      "VENDASEMANA3" => 2800.00,
      "VENDASEMANA4" => 1900.00,
    ],
    [
      "ID" => 2,
      "COLABORADOR" => "Tadeu",
      "SALARIOFIXO" => 2500.00,
      "VENDASEMANA1" => 1500.00,
      "VENDASEMANA2" => 4150.20,
      "VENDASEMANA3" => 3500.00,
      "VENDASEMANA4" => 2100.00,
    ],
    [
      "ID" => 3,
      "COLABORADOR" => "Amanda",
      "SALARIOFIXO" => 1800.00,
      "VENDASEMANA1" => 1500.00,
      "VENDASEMANA2" => 6950.00,
      "VENDASEMANA3" => 4800.40,
      "VENDASEMANA4" => 2250.00,
    ],
    [
      "ID" => 4,
      "COLABORADOR" => "Tsara",
      "SALARIOFIXO" => 2200.00,
      "VENDASEMANA1" => 1500.00,
      "VENDASEMANA2" => 4250.80,
      "VENDASEMANA3" => 3200.00,
      "VENDASEMANA4" => 1980.00,
    ],
    [
      "ID" => 5,
      "COLABORADOR" => "Marcos",
      "SALARIOFIXO" => 1800.00,
      "VENDASEMANA1" => 2250.00,
      "VENDASEMANA2" => 5580.80,
      "VENDASEMANA3" => 3000.00,
      "VENDASEMANA4" => 1500.00,
    ]
  ];
  ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style> 
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
  
  <title>TECINFO - Pagamentos</title>

</head>

<body>
  <h2>Extrato de Pagamentos</h2>

  <table>
    <tr>
      <th>Colaborador</th>
      <th>Salário Fixo</th>
      <th>Venda Semana 1</th>
      <th>Venda Semana 2</th>
      <th>Venda Semana 3</th>
      <th>Venda Semana 4</th>
      <th>Total Vendas</th>
      <th>Comissão</th>
      <th>Salário Final</th>
    </tr>
    <?php foreach($pagamentos as $pagamento):
      $vendasTotais = $pagamento["VENDASEMANA1"] + $pagamento["VENDASEMANA2"] + $pagamento["VENDASEMANA3"] + $pagamento["VENDASEMANA4"];
      $comissaoVendas = ($vendasTotais * $COMISSAO ) / 100;
      $salarioFinal = ($pagamento["SALARIOFIXO"] + $comissaoVendas);
    ?>
    <tr>
      <td><?php echo $pagamento["COLABORADOR"] ?></td>
      <td><?php echo 'R$' . ' ' .  number_format($pagamento["SALARIOFIXO"], 2, ",", ".") ?></td>
      <td><?php echo 'R$' . ' ' .  number_format($pagamento["VENDASEMANA1"], 2, ",", ".")?></td>
      <td><?php echo 'R$' . ' ' .  number_format($pagamento["VENDASEMANA2"], 2, ",", ".") ?></td>
      <td><?php echo 'R$' . ' ' .  number_format($pagamento["VENDASEMANA3"], 2, ",", ".") ?></td>
      <td><?php echo 'R$' . ' ' .  number_format($pagamento["VENDASEMANA4"], 2, ",", ".") ?></td>
      <td><?php echo 'R$' . ' ' .  number_format($vendasTotais, 2, ",", "."); ?></td>
      <td><?php echo 'R$' . ' ' .  number_format($comissaoVendas, 2, ",", "."); ?></td>
      <td><?php echo 'R$' . ' ' .  number_format($salarioFinal, 2, ",", "."); ?></td>
    </tr>
    <?php endforeach;?>

  </table>
</body>

</html>