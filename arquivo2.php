<html>

<head>
    <title>Aula de PHP</title>
</head>

<body>
    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste cumque at nobis repellendus, ut magni saepe neque corrupti fugiat ullam earum laboriosam excepturi necessitatibus vel repellat eum beatae! Magnam, illo.</P>

<?php
    echo "Edson Rodrigues";
?>

<br>

<?php

    print "Senac marília"

?>

<br>

<!-- Comentario em HTML -->

<?php
// Comentario em PHP

/*
    varias
    linhas
*/

$nomeCompleto = "Edson Rodrigues";
$idade = 40;
$status = true;
$salario = 1320.50;

echo $nomeCompleto." ".$idade;
echo "<br>";
echo "$nomeCompleto $idade anos";
echo '<br>';
echo '$nomeCompleto $idade anos';

$logoSenac="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";

?>

<img src="<?php echo $logoSenac ?>" allt="Senac Marília">

<img src="<?=$logoSenac ?>" allt="Senac Marília">

</body>

</html>