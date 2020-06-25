<?php
/**
* Array são matriz de dados
* trabalha com decimal, valores booleanos ou cadeia e caracteres
* pode ter uma matriz de informações agrupadas em um só lugar
* Acessamos o elemento de um array pelo indice de sua posição. Começa com 0
* não é possível declarar um array diretamento no echo EX: echo $array
*/

//chamada de função. Toda palavra no final com () é uma chamada de função  
$array = array (40, 200, 100, 150, "school of Net", true);

//maneira de mostrar/acessar o conteúdo de um array
echo $array[0];
echo "\n";

//declaração flexivel
$array = array (
    40, 
    200, 
    100, 
    150, 
    "school of Net", 
    true
);

echo $array[4];
echo "\n";

//maneira mas usual que os desenvolvedores declaram um array
$array1 = [
    45, 
    210, 
    1010, 
    160, 
    "school of Net", 
    true
];

$array1[5];
echo $array[5];