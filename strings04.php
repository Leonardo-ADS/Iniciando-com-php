<?php
/**
 * Tudo o que estiver do lado direito de uma variável, é calculado primeiro para depois ser adicionado na variável
 * 
 */

 $variavel = "School of net";

 //concatenação
 $string1 = "School of Net";
 $string2 = "Iniciano com PHP";

 echo "\n";
// . faz a concatenação
 echo $string1 . $string2;
 echo "\n";
 echo $string1 . " " . $string2;
 echo "\n";
 
 //variavel string3 recebendo $string1 e $string2
 $string3 = $string1 . " " . $string2;
 echo $string3;
 echo "\n";

 //  ao colocar uma variavel entre "" o PHP identifica que estamos querendo colcoar uma variavel e não armazenar um texto
 // se colcoar a variavel entre '' vai ficar como texto
 $string4 = "$string1 $string2";
 echo $string4;
 echo "\n";
 $string5 = '$string1 $string2';
 echo $string5;
 echo "\n";