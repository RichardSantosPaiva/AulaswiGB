
<?php
//vai dar errado, nn exite a variavel pcampeão
$p = "Penta";
echo "O brasil é $pcampeão <br> <br> ";


//solução, para juntar ao conteudo da variável com a cadeia de caracter (string)

echo "O Brasil é ${p} campeã <br> <br>";
echo "O brasil é ".$p."capeão";
?>