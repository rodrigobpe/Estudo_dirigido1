<?php  
  //Converta uma temperatura digitada em Celsius para Fahrenheit. F = 9*C/5 + 32 .

  print "Digite a temperatura em Celsius: \n";
  $temp_celsius= fgets(STDIN);

  print "\nconvertendo...\n\n";

  $conversor_fahrenheit = (((9*$temp_celsius)/5)+32);

  print "A temperatura $temp_celsius"; print " °C equivale a $conversor_fahrenheit °F \n";


