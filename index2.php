<?php
    include_once "index.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>   
    <?php
      if (!empty($dados['PesqEntreData'])) {
      $dataNasc = $dados['data_inicio'];
      $xml = simplexml_load_file('base.xml');
      $dia = date('d', strtotime($dataNasc));
      $mes = date('m', strtotime($dataNasc));

      if(($dia>=21&&$mes==3)||($dia<=20&&$mes==4))
          $signoInput = "Áries";
      if(($dia>=23&&$mes==9)||($dia<=22&&$mes==10))
          $signoInput = "Libra";
      if(($dia>=21&&$mes==4)||($dia<=20&&$mes==5))
          $signoInput = "Touro";
      if(($dia>=23&&$mes==10)||($dia<=21&&$mes==11))
          $signoInput = "Escorpião";
      if(($dia>=21&&$mes==5)||($dia<=20&&$mes==6))
          $signoInput = "Gêmeos";
      if(($dia>=22&&$mes==11)||($dia<=21&&$mes==12))
          $signoInput = "Sagitário";
      if(($dia>=21&&$mes==6)||($dia<=22&&$mes==7))
          $signoInput = "Câncer";
      if(($dia>=22&&$mes==12)||($dia<=20&&$mes==1))
          $signoInput = "Capricórnio";
      if(($dia>=23&&$mes==7)||($dia<=22&&$mes==8))
          $signoInput = "Leão";
      if(($dia>=21&&$mes==1)||($dia<=19&&$mes==2))        
          $signoInput = "Aquário";
      if(($dia>=23&&$mes==8)||($dia<=22&&$mes==9))        
          $signoInput = "Virgem";
      if(($dia>=22&&$mes==2)||($dia<=20&&$mes==3))
          $signoInput = "Peixes";

    foreach ($xml->signo as $signos) :    
      if (($signos->signoNome == $signoInput)) {
        echo "<hr>";
        echo "<h1>Seu Signo é : " . $signos->signoNome . "</h1><br>";
        echo "<h2>Descrição : </h2><p>" . $signos->descricao . "</p><br>";
        echo "<hr>";
      }
    endforeach;
    }
    ?>
</body>
</html>