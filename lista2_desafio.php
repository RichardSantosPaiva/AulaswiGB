<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laços de Repetição </h1>
    <h3>Programa para exibi todos os valores entre 1 e um valor informado pelo usuário</h3>
    <a href="../Lista2">Voltar</a>
    <form action="" method="GET">
        <p>Informe um valor maior que 1:</br>
            <input type="text" name="num" /></br>
        </p>
        <input type="submit" name="exibir" value="Exibir" />
    </form>
</body>
    <?php
    //entrada

    if(isset($_GET['exibir'])) {
        $num = $_GET['num'];
        if($num > 1) {
             $i =1;
             while ($1 <= $num) {
                echo "</br> Valor : $i";
                $i++;
             }
        }
        else {
            echo "Favor inserir um valor maior que 1"
        }
    }
    else {
        echo "Aguardando entrada de dados!";

    }
    ?>
</html>
