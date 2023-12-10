<?php

/**
 * Biblioteca de função para respostas aos exercícios propostos em aula
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 */

/**
 * Verifica se o número informado é maior, menos ou igual a zero.
 * @param $numero int O número que se deseja saber se é par ou impar
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @return $res String A mensagem informando se é maior, menor ou igual a zero 
 */
function x($num1)
{

    $resposta = "";

    if ($num1 > 0) {
        $resposta = "o número digitado é maior que zero";
    } else if ($num1 < 0) {
        $resposta = "o número digitado é menor que zero";
    } else {
        $resposta =  "o número digitado é igual a zero";
    }
    return $resposta;
}

/**
 * somar os valores dos conteúdos de um vetor
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

/**
 * Esta função verifica se um número informado no parâmetro enviado é par ou impar
 * Para saber se um número é par ou impar usamos o operador "%" que faz a operação de divisão de inteiros
 * Se o resultado for 0 então o número é par senão o número informado é impar.
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @param $numero int O número que se deseja saber se é par ou impar
 * @return $res String A informação se é par  ou ímpar
 */
function eParOuImpar2($numero)
{
    $res = "";

    if ($numero % 2 == 0) {
        $res = "o número informado é par";
    } else {
        $res = "o número informado é ímpar";
    }
    //poderia simplificar assim:
    // return $numero % 2 == 0; //retornaria false ou true... 
    return $res;
}
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
/**
 * Multiplicação dos números de um vetor...
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @param $vetor array
 * @return $produto int o produto dos vetores
 */
function multiplicarValoresVetor($vetor)
{
    $tamanho_vetor = count($vetor);
    $produto = 1;
    $valor = 0;
    //percorrer cada elemento do vetor e acumular o valor na variável soma...
    for ($i = 0; $i <= $tamanho_vetor - 1; $i++) {
        $produto *= intval($vetor[$i]);
    }
    return $produto;
}

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

/**
 * Devolve o texto informado com todos os caracteres invertidos
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @param $texto string
 * @return $res String O texto invertido
 */
function lerTextoAoContrario($texto)
{
    $aoContrario = "";

    for ($i = strlen($texto) - 1; $i > 0; $i--) {
        $aoContrario .= $texto[$i];
    }

    return $aoContrario;
}

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
