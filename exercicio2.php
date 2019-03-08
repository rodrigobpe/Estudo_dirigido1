<?php

    /*Escreva um programa que leia a quantidade de dias, horas, minutos e segundos do usuário. Calcule o
    total em segundos.*/

    print "Calcule em Segundos!\n\n";

    print "Dias:     ";
    $dias = (float) fgets (STDIN);
    print "Horas:    ";
    $horas = (float) fgets (STDIN);
    print "Minutos:  ";
    $minutos = (float) fgets (STDIN);
    print "Segundos: ";
    $segundos = (float) fgets (STDIN);

    $em_horas = $dias*24;
    $em_minutos = ($em_horas+$horas)*60;
    $em_segundos = ($em_minutos+$minutos)*60+$segundos;

    print "O total em segundos é: $em_segundos \n";