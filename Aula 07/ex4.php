<?php
#Escreva um algoritmo que receba o valor de um produto, 
#acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário 
#o valor da parcela e o valor total da compra.
$valorProduto= 100;
$porcentagem=(16/100)*$valorProduto;
$total = $valorProduto+$porcentagem;
echo "o valor da parcela eh de: ",$total/10;
echo " e o valor total eh de: ",$total;


?>