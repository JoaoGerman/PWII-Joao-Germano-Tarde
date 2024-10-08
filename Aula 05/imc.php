<?php
$peso = 50;
$altura = 1.50;
$quadrado=($altura*$altura);
$imc = ($peso/$quadrado);

if($imc < 16){
    echo("(desnutrição severa) ");
}
else if($imc > 16 and $imc < 18.5){
    echo("(desnutrição moderada) ");
}
else if($imc > 18.5 and $imc < 23){
    echo("(baixo peso) ");
}
else if($imc > 22 and $imc < 25){
    echo("(peso normal) ");
}
else if($imc >24  and $imc < 30){
    echo("(sobrepeso) ");
}
else if($imc > 29 and $imc < 35){
    echo("(obesidade tipo 1) ");
}
else if($imc > 34 and $imc < 40  ){
    echo("(obesidade tipo 2) ");
}
else if($imc > 40){
    echo("(obesidade tipo 3) ");
};
?>