<?php
/**
 * Exercicio número 4
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

       echo "<h3>4 - Retorne a string com maior quandade de caracteres. </h3>";
       echo "Nome da função chamada: textoComMaiorQtdeCaracteresNoVetor | Parâmetro: vetor com as palavras";

       $v = [ "laranja","inconstitucional", 
              "casa", "paralelepípedo",
              "acidodesoxiribonucleicoafafadfafafa",
              "encontro", "abacate", 
              "inconstituicionalíssimamente",];
              
       echo "<h4>Vetor enviado</h4>";
       
       echo "\$v = [ ";
       for($i=0;$i<=count($v) -1;$i++){
          echo "<br>$v[$i]";
          if($i != count($v) -1){
            echo ',';
          }
       }
       echo " ]";

       $x = textoComMaiorQtdeCaracteresNoVetor($v);

       echo "<hr>";
       echo "Resultado: $x";
       echo "<hr>";
      
