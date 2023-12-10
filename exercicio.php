
<?php 
   include __DIR__ . "/libs/libexercicios.php"; 
   include __DIR__ . "/header.php";   
?>
  
<!-- header -->
<?php include __DIR__ . "/headerinfo.php"; ?>
    
        
<div class="list-group list-group-horizontal-sm  justify-content-center my-2">
   <a class="list-group-item  text-start" href="index.php"> <i class="fa fa-home"></i> Inicio </a>
  <a class="list-group-item text-start" href="./docs/exercicios01.pdf" target="__BLANK"> <i class="fa fa-file"></i> Lista de exercícios </a>
  
  <a class="list-group-item  text-start" href="#ex01"> 1 </a>
  <a class="list-group-item  text-start" href="#ex02"> 2 </a>
  <a class="list-group-item text-start" href="#ex03"> 3 </a>
  <a class="list-group-item  text-start" href="#ex04"> 4 </a>
  <a class="list-group-item text-start" href="#ex05"> 5 </a>
  <a class="list-group-item  text-start" href="#ex06"> 6 </a>
  <a class="list-group-item  text-start" href="#ex07"> 7 </a>
  <a class="list-group-item text-start" href="#ex08"> 8 </a>
  <a class="list-group-item  text-start" href="#ex09"> 9 </a>
  <a class="list-group-item  text-start" href="#ex10"> 10 </a>
  
</div>
    
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h4>Lista de exercícios</h4>
        </div>
    </div>
    <div class="card-body">
        
    
  <!-- exercicio 1 -->
  <div id="ex01" class="container box-shadow">
    <?php include "ex01.php"; ?>
    <pre>
        /**
         * Esta função verifica se um número informado no parâmetro enviado é par ou impar
         * Para saber se um número é par ou impar usamos o operador "%" que faz a operação de divisão de inteiros
         * Se o resultado for 0 então o número é par senão o número informado é impar.
         * @param $numero int O número que se deseja saber se é par ou impar
         * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
         * @return $res bool false se 'ímpar' e  true se 'par' 
         */
        function eParOuImpar($numero = 0)
        {
            //retorna false ou true  - (falso ou verdadeiro);
            return intval($numero) % 2 == 0;
        }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- exercicio 2 -->
  <div id="ex02"  class="container box-shadow">
    <?php include "ex02.php"; ?>
    <pre>
        /**
         * Contar quantos caracteres tem um texto 
         * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
         * @param $texto String - O texto para retorna a quantidade de caracteres que ele é formado
         * @return none int A quantidade de caracteres que tem o texto
         */
        function contarQuantosCaracteres($texto)
        {
            $tamanho = strlen($texto);
            return $tamanho;
        }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- exercicio 3 -->
  <div id="ex03" class="container box-shadow">
    <?php include "ex03.php"; ?>
    <pre>
    /**
     * somar os valores dos elementos de um vetor
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $vetor array 
     *  
     */
    function somarValoresVetor($vetor)
    {
    
        $tamanho_vetor = count($vetor);
    
        $soma = 0;
        //percorrer cada elemento do vetor e acumular o valor na variável soma...
        for ($i = 0; $i <= $tamanho_vetor - 1; $i++) {
            $soma = $soma + $vetor[$i];
            //$soma += $vetor[$i]; //é o mesmo que a linha de cima, de forma simplificada 
        }
        return $soma;
    }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- exercicio 4 -->
  <div id="ex04" class="container box-shadow">
    <?php include "ex04.php"; ?>
    <pre>
    /**
     * @brief Contar quantos caracteres tem um texto 
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $texto String - O vetor com as palavras
     * @return none int A string com maior quantidade de caracteres
     */
    function textoComMaiorQtdeCaracteresNoVetor($vetor = [])
    {
    
        $tamanho_vetor = count($vetor);
        $maior_palavra = "";
    
        //vamos primeiro ordenar
    
        $i = 0;
        $ordenado = false;
    
        for ($j = 0; $j < $tamanho_vetor; $j++) {
            for ($i = 0; $i < $tamanho_vetor; $i++) {
                if (strlen($vetor[$j]) > strlen($vetor[$i])) {
                    $aux = $vetor[$j];
                    $vetor[$j] = $vetor[$i];
                    $vetor[$i] = $aux;
                }
                $i++;
            }
    
            $maior_palavra = $vetor[0];
        }
    
        printf("<br>Maior palavra é  %s  tem o tamanho de %d  caracteres<br>", $maior_palavra, strlen($maior_palavra));
        //print_r($vetor);
        return $maior_palavra;
    }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
    
  </div>

  <!-- exercicio 5 -->
  <div id="ex05" class="container box-shadow">
    <?php include "ex05.php"; ?>
    <pre>
    /**
     * @brief Recebe data no formato dd/mm/aaaa
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $data String - A data no formato dd/mm/aaaa
     * @return $data String - A data no formato solicitado
     */
    function retornaData($data)
    {
        $arr_data = explode("/", $data);
        $dia = $arr_data[0];
        $mes = $arr_data[1];
        $ano = $arr_data[2];
    
        $resultado = $ano . "-" . str_pad($mes, 2, "0") . "-" . str_pad($dia, 2, "0");
        return $resultado;
    }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>
  
  <!-- exercicio 6 -->
  <div id="ex06" class="container box-shadow">
    <?php include "ex06.php"; ?>
    <pre>
    /**
     * Média aritimética dos números de um vetor...
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $vetor array
     * @return $media int a media aritmética dos números do vetor
     */
    function retornarMediaAritmetica($vetor)
    {
        $tamanho_vetor = count($vetor);
        $produto = 0;
    
        //percorrer cada elemento do vetor e acumular o valor na variável soma...
        for ($i = 0; $i < $tamanho_vetor; $i++) {
            $produto += intval($vetor[$i]);
        }
        return $produto / $tamanho_vetor;
    }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- exercicio 7 -->
  <div id="ex07" class="container box-shadow">
    <?php include "ex07.php"; ?>
    <pre>
    /**
     * Converter o texto enviado para letras maiúsculas
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $texto string
     * @return $res String O texto convertido para letras maiúsculas
     */
    function converterTextoEmLetrasMaiusculas($texto)
    {
        return strtoupper($texto);
    }        
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- exercicio 8 -->
  <div id="ex08" class="container box-shadow">
    <?php include "ex08.php"; ?>
    <pre>
    /**
     * Retorne o maior número presente nele. 
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $vetor array
     * @return $res int o maior número
     */
    function retornaOMaiorNumeroNoVetor($vetor)
    {
        $tamanho_vetor = count($vetor);
        $maior_numero = 0;
    
        //vamos primeiro ordenar
    
        $i = 0;
        $ordenado = false;
    
        for ($j = 0; $j < $tamanho_vetor; $j++) {
            for ($i = 0; $i < $tamanho_vetor; $i++) {
                if (intval($vetor[$j]) > intval($vetor[$i])) {
                    $aux = $vetor[$j];
                    $vetor[$j] = $vetor[$i];
                    $vetor[$i] = $aux;
                }
                $i++;
            }
    
            $maior_numero = $vetor[0];
        }
    
        printf("<br>O Maior número no vetor informado é  %d<br>", $maior_numero);
        //print_r($vetor);
        return $maior_numero;
    }        
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- exercicio 9 -->
  <div id="ex09" class="container box-shadow">
    <?php include "ex09.php"; ?>
    <pre>
    /**
     * Retorno o fatorial de um número informado...
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $numero int - O número para descobrir o fatorial
     * @return $produto int - O fatoria do número informado
     */
    function fatorial($numero)
    {
        if (intval($numero == 0 || intval($numero) == 1)) {
            return 1;
        }
    
        $fat = 1;
    
        //percorrer cada elemento do vetor e acumular o valor na variável soma...
        for ($i = intval($numero); $i > 1; $i--) {
            for ($i = intval($numero); $i > 1; $i--) {
                $fat *= $i;
            }
        }
        return $fat;
    }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- exercicio 10 -->
  <div id="ex10" class="container box-shadow">
    <?php include "ex10.php"; ?>
    <pre>
    /**
     * Retorna a mediana de um vetor informado...
     * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
     * @param $vetor array - O vetor para descobrir a mediana
     * @return $medina int - A mediana do vetor informado
     */
    function medianaVetor($vetor)
    {
    
        $tamanho_vetor = count($vetor);
        $maior_numero = 0;
    
        //vamos primeiro ordenar
    
        $i = 0;
        $ordenado = false;
    
        for ($j = 0; $j < $tamanho_vetor; $j++) {
            for ($i = 0; $i < $tamanho_vetor; $i++) {
                if (intval($vetor[$j]) > intval($vetor[$i])) {
                    $aux = $vetor[$i];
                    $vetor[$i] = $vetor[$j];
                    $vetor[$j] = $aux;
                }
                $i++;
            }
        }
        $elemento_na_metade_do_vetor = ceil($tamanho_vetor / 2);
    
        return $vetor[$elemento_na_metade_do_vetor];
    }
    </pre>
    <a href="javascript:scrollTo(0,0);">Voltar ao topo</a>
   </div>


  </div>
</div>

  <?php include __DIR__ . "/footer.php"; ?>