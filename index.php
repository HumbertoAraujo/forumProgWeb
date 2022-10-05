<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Fórum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header align="center">
    <h1>Formulário Pesquisar Signos</h1>       
    </header>       
    <?php
    //Recebe os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>
    <form method="POST" action="" target="_blank">
       <?php
        $data_inicio = "";
        if (isset($dados['data_inicio'])) {
            $data_inicio = $dados['data_inicio'];
        }
        ?>
        <fieldset>
            <legend>Digite sua Data de Nascimento:</legend>        
            <br>        
            <br>        
            <input class="input-group mb-3" type="date" name="data_inicio" value="<?php echo $data_inicio; ?>"><br><br>      
            <br>
            <br>        
            <input type="reset" value="Limpar" placeholder="Reset" class="btn btn-primary">        
            <input type="submit" value="Enter" placeholder="Pesquisar" class="btn btn-primary" name="PesqEntreData" required formaction="index2.php">
            <a href="base.xml"class="btn btn-primary" target="_blank">Base xml</a>       
            <a href="https://astrologialuzesombra.com.br/"class="btn btn-primary" target="_blank">Site Origem dos dados</a>
        </fieldset>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</body>
</html>