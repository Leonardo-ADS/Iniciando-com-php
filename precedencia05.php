<?php

/**
 * Primeiro é executado do lado ESQUERDO para o DIREITO e só depois armazenado na variável 
 * O mesmo acontece com Strings
 * Ordem de Precedência
 *  ()
 *  ^
 *  * ou /
 *  + ou - 
 *  >  <  >=  <=  =
 *  && - e 
 *  || - ou
 *  != - não(negação) oq é verdadeiro é falso e o que é falso é verdadeiro
 */

 $soma = 5 + 3 * 8;
 echo $soma;
 echo "\n";

 $string = "Scholl of Net " . "Iniciando com PHP";
 echo $string;
 echo "\n";