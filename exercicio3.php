<?php

    //3. Faça um programa que calcule o aumento de um salário. Ele deve solicitar o valor do salário e a
    //porcentagem do aumento. Exiba o valor do aumento e do novo salário.

    print "Digite o seu salário: \n";
    $salario= fgets(STDIN); 

    print "Agora digite a porcentagem de aumento: \n";
    $porcentagem_de_aumento_salario = fgets(STDIN);

    $porcentagem_real=$porcentagem_de_aumento_salario/100;
    $aumento_salario= ($salario*$porcentagem_real)+$salario;

    $valor_aumentado= $aumento_salario-$salario;

    print "O valor aumentado no seu salário foi de: $valor_aumentado \n";
    print "O seu salário agora é de: $aumento_salario \n";
