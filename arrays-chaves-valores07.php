<?php
/**
 * Cada elemento tem uma posição(indice)
 * posições são considerados chaves, que tem valores únicos
 * se não declararmos as posições o proprio PHP declara automáticamente 
 * se declararmos uma chave(posição) e omitirmos o resto, o PH declara automáticamente iniciando com 0
 */

// array sem declaração de posição
$array = array (
    40, 
    200, 
    100, 
    150, 
    "school of Net", 
    true
);

// array com declaração de posição
$array = array (
    "L" => 40, 
    1 => 200, 
    2 => 100, 
    3 => 150, 
    4 => "school of Net", 
    5 => true
);

echo $array["L"];
echo "\n";
echo $array[1];
echo "\n";

// var_dump -  função que mostra o conteúdo; 
echo var_dump($array);
