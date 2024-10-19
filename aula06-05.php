<?php
// Variávies em tempo execução


$texto = "Bertioga";

$var_dinan= "cidade";

$$var_dinan = $texto;

echo "$cidade é no litoral de SP";

// 19=8/5/23

echo "<h3>Pós incremento </h3>";
$a=5;
echo"Deve ser 5" .$a++."<br/>\n";
echo"Deve ser 6:".$a."<br/>\n";


echo "<h3>Pré-incremento </h3>";
$a= 5;
echo "Deve ser 6:".++$a."<br/>\n";
echo"Deve ser 6:".$a."<br/>\n";


echo "<h3>Pós decremento </h3>";
$a=5;
echo"Deve ser 5" .$a--."<br/>\n";
echo"Deve ser 6:".$a."<br/>\n";


echo "<h3>Pré-incremento </h3>";
$a= 5;
echo "Deve ser 6:".--$a."<br/>\n";
echo"Deve ser 6:".$a."<br/>\n";


$soma = ($valor1= 4)+ 5; //soma é igual a 9agora e $valor1 foi configurado como 4

echo$soma."<br>";
$valor2 =20;
$valor3 = 30;

$soma += 1;echo $soma."<br>"; //$soma fica com 10
$soma += $valor2;echo $soma."<br>"; //$soma fica com 10
$soma += $valor3;echo $soma."<br>"; //$soma fica com 10
$soma += 100;echo $soma."<br>"; //$soma fica com 10

$saudacao ="Bom";
$saudacao ="Dia!";// configura $saudacao para "Bom dia!", como em $saudacao = $saudacao."Dia";

echo $saudacao. "hoje vai ter". $soma  ."% tristeza";
?>

