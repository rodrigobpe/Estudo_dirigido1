<?php

//5. Calcule o tempo de uma viagem de carro. Pergunte a distância a percorrer e a velocidade média esperad para a viagem.

    print "Distância a percorrer (em Km): ";
    $distancia_a_percorrer = (float) fgets (STDIN);

    print "Velocidade média da viagem (em Km/h): ";
    $velocidade_media = (float) fgets (STDIN);


    $tempo_da_viagem = $distancia_a_percorrer/$velocidade_media;

    print "Tempo da Viagem: $tempo_da_viagem Horas \n";