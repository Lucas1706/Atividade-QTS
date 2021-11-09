<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <?php
    
    $peso=$_GET['peso'];
    $altura=$_GET['altura'];

    if(!is_numeric($peso)|| $peso<=0){
        echo"h2>Atenção, o campo peso deve ser número!</h2><p>";

        echo"<a href=\"javascript:window.history.back();\">
        <input type=\"button\"value=\"Voltar\"></a>";
        exit;
    }
    $imc=$peso/($altura * $altura);
    $imc=number_format($imc, 2);

    if($imc<18){
        echo "<img src=magro.jpg width'100' height='100'>";
    }
    else if (($imc>=18)&&($imc<=25)){
        echo "<img src=normal1.jpg width'100' height='100'>";
    }
    else if (($imc>=25)&&($imc<=30)){
        echo "<img src=obeso.jpg width'100' height='100'>";
    }
    else if (($imc>=30)&&($imc<=35)){
        echo "<img src=obeso1.jpg width'100' height='100'>";
    }
    else if (($imc>=35)&&($imc<=40)){
        echo "<img src=obeso2.jpg width'100' height='100'>";
    }
    else if ($imc>40){
        echo "<img src=obeso2.jpg width'100 height='100'>";
    }

         echo"<p>Seu resultado:<br>IMC:$imc";
    ?>



</body>
</html>