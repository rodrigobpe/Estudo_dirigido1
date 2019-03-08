<?php 

/*4. Solicite o preço de uma mercadoria e o percentual de desconto. Exiba o valor do desconto e o preço a pagar.*/

print "Preço da mercadoria: ";
$preco_da_mercadoria = (float) fgets (STDIN);

print "Percentual de desconto: ";
$percentual_de_desconto = (float) fgets (STDIN);

$porcentagem = ($percentual_de_desconto/100)*$preco_da_mercadoria;
$preco_final = $preco_da_mercadoria-$porcentagem;


print "Preço Final: $preco_final \n";