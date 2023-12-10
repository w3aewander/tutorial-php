<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h4>Funções</h4>
        </div>
    </div>
    <div class="card-body">
        <div style="margin: 10px auto; padding: 20px;">
 
    <!-- introdução -->
    <p>
       Em PHP, as funções são blocos de código nomeados que podem ser reutilizados em diferentes partes do programa. Elas permitem organizar o código em unidades lógicas e modularizadas. Aqui estão alguns exemplos de definição e uso de funções em PHP:
    </p>


    <!-- exemplo de código -->
    <p>
        Exemplo de uso de funções em PHP:
    </p>
    <code>
 
    // Definindo uma função simples sem parâmetros<br>
    function exibirMensagem()<br>
    {<br>
        echo "Olá, mundo!";<br>
    }<br>
<br>
    // Definindo uma função com parâmetros<br>
    function somar($a, $b)<br>
    {<br>
        $resultado = $a + $b;<br>
        return $resultado;<br>
    }<br>
<br>
    // Chamando as funções definidas<br>
    exibirMensagem();<br>

    $valor1 = 5;<br>
    $valor2 = 3;<br>
    $soma = somar($valor1, $valor2);<br>
    echo "A soma de $valor1 e $valor2 é: $soma";<br>

   
    </code>

    <!-- resumo do conteúdo -->
    <p>
    Nesse exemplo, definimos duas funções. A primeira função, exibirMensagem(), 
    <br>não recebe nenhum parâmetro e apenas exibe a mensagem "Olá, mundo!". 
    <br>A segunda função, somar($a, $b), recebe dois parâmetros $a e $b, realiza a soma e retorna o resultado.
    <br>Para chamar as funções, basta utilizar o nome da função seguido por parênteses. <br>No caso da função somar(), passamos os valores $valor1 e $valor2 como argumentos para os parâmetros $a e $b, respectivamente.
Lembre-se de que as funções podem ter parâmetros opcionais, retornar valores ou não retornar nada (nesse caso, elas executam uma ação). Também é possível criar funções com qualquer quantidade de parâmetros.
    </p>
</div>
    </div>
</div>


