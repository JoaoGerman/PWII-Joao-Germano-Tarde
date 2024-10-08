<?php
$peso = 50;
$altura = 1.50;
$quadrado=($altura*$altura);
$imc = ($peso/$quadrado);

switch ($imc) {
case $imc < 16:
    echo "desnutrição severa";
    break;
case $imc > 16 and $imc < 18.5:
    echo "desnutrição moderada";
    break;
case $imc > 18.5 and $imc < 23:
    echo "baixo peso";
    break;
case $imc > 22 and $imc < 25:
    echo "peso normal";
    break;
case $imc >24  and $imc < 30:
    echo "sobrepeso";
    break;
case $imc > 29 and $imc < 35:
    echo "obesidade tipo 1";
    break;
case $imc > 34 and $imc < 40:
    echo "obesidade tipo 2";
    break;
case $imc > 40:
    echo "obesidade tipo 3";
    break;
default:
echo "aparentemente você não existe";
}
?>