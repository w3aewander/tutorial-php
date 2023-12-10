<?php
/**
 * Exercicio número 5
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

//Escreva uma função que receba uma data no formato "dd/mm/aaaa"
//e retorne ela no formato "aaaa-mm-dd".


echo "<h3>5 - Retornar a data no formato aaaa-mm-dd. </h3>";
echo "Nome da função chamada: retornaData | Parâmetro: data no formato dd/mm/aaaa";

$data = "14/05/2023";
       
echo "<h4>Data enviado</h4>";

echo "\$data = $data";

$res = retornaData($data);

echo "<hr>";
echo "Resultado: $res";
echo "<hr>";


