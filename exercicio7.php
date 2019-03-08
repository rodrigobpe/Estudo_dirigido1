<?php

    /*7. Escreva um programa que pergunte a quantidade de km percorridos por um carro alugado pelo usuário,
    assim como a quantidade de dias pelos quais o carro foi alugado. Calcule o preço a pagar, sabendo que o
    carro custa R$ 60,00 por dia e R$ 0,15 por km rodado.*/

    print "Quantidade Km percorridos pelo usuário: ";
    $km_percorridos = (float) fgets (STDIN);

    print "Quantidade de dias alugado: ";
    $quantidade_de_dias_que_o_carro_foi_alugado = (float) fgets (STDIN);

    $preco_de_km_percorridos = $km_percorridos*0.15;
    $preco_de_quantidade_de_dias_que_o_carro_foi_alugado = $quantidade_de_dias_que_o_carro_foi_alugado*60;
    $preco_total_do_aluguel_do_carro = $preco_de_km_percorridos+$preco_de_quantidade_de_dias_que_o_carro_foi_alugado;

    print "Preço a pagar pelo carro alugado: $preco_total_do_aluguel_do_carro \n";