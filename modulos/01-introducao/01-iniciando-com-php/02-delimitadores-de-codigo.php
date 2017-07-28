<?php
header('Content-Type: Text/html; charset=utf-8');

echo "Olá Mundo!";

//Comentário

/*
 * Comentário recursivo
 */

/*
 Comentário de várias linhas
 */

$ola = "Olá Mundo!";

$nome = "Erivaldo";

echo $ola;
echo "<hr>";

echo '$ola';
echo "<br>";
echo "$ola";
echo "<br>";
echo $ola;
echo "<br>";
echo "{$ola}s";
echo "{$ola}, meu nome é {$nome}.";
echo "<hr>";

print("{$ola}<br>");

$Arr = array(
	"ola" => "Olá Mundo!",
	"nome" => "Erivaldo"
);

print_r($Arr);
echo "<br>";
$idade = 32;

var_dump($idade);
echo "<br>";
var_dump($Arr);
echo "<br>";
var_dump($ola);
echo "<hr>";
?>

<article>
    <h1><?= $ola ?></h1>
    <p>Meu nome é: <?php echo $nome; ?>. </p>
</article>


