<?php
$largura = $_GET["largura"];
$comprimento = $_GET["comprimento"];
$altura = $_GET["altura"];

$larguraComDecimal = number_format($largura, 1, '.', '');
$comprimentoComDecimal = number_format($comprimento, 1, '.', '');
$alturaComDecimal = number_format($altura, 1, '.', '');
echo "largura=$larguraComDecimal<br> comprimento=$comprimentoComDecimal<br> altura=$alturaComDecimal<br>";


$area = $largura*$comprimento*$altura;
$areaComDecimal = number_format($area, 2, '.', '');
echo "area = $areaComDecimal <br>";
$preco = $area *200;
echo "preço= ";
echo number_format($preco, 2, '.', '');

/*$number = 1234.56;

// Notação Inglesa (padrão)
$english_format_number = number_format($number);
// 1,234

// Notação Francesa
$nombre_format_francais = number_format($number, 2, ',', ' ');
// 1 234,56

$number = 1234.5678;

// Notação Inglesa com separador de milhar
$english_format_number = number_format($number, 2, '.', '');
// 1234.57*/