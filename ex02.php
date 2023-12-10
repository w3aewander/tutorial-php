<?php
/**
 * Exercício 2
 * Verificar se o número é par ou impar
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

 echo "<h3>2 - Retornar o tamanho do texto - quantidade de caracteres</h3>";
 echo "Nome da função chamada: ehParOuImpar | Parâmetro: número para verificar";


 $texto = "PHP é a melhor linguagem de programação do mundo!";
 echo "<h4>Número enviado</h4>";
 
 echo "\$texto = $texto";

 $res = contarQuantosCaracteres($texto);

 echo "<hr>";
 echo "Resultado : O texto tem  $res caracteres";
 echo "<hr>";
 //echo "Dica: você também pode fazer com a função array_sum() do PHP &#128521;";
?>