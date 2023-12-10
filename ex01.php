<?php
/**
 * Exercício 2
 * Verificar se o número é par ou impar
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

 echo "<h3>1 - Verificar se um número é par ou impar</h3>";
 echo "Nome da função chamada: ehParOuImpar | Parâmetro: número para verificar";


 $numero = 20;
 echo "<h4>Número enviado</h4>";
 
 echo "\$numero = $numero";

 $res = eParOuImpar($numero) ? 'par' : 'ímpar';

 echo "<hr>";
 echo "Resultado : o número informado é: $res";
 echo "<hr>";
 //echo "Dica: você também pode fazer com a função array_sum() do PHP &#128521;";
?>