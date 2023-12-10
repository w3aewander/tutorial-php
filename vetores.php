
<div class="card">
    <div class="card-header">
       <div class="card-title">
           <h4>Vetores</h4>
       </div>
    </div>
    <div class="card-body">
        <div >

    <p>
      Em PHP, um vetor (ou array) é uma estrutura de dados que permite armazenar múltiplos valores em uma única variável. Os vetores podem conter elementos de diferentes tipos, como números, strings, booleanos, outros vetores e assim por diante. Aqui estão alguns exemplos de definição e uso de vetores em PHP: 
    </p>

    <p>
        Exemplo de uso de vetores em PHP:
    </p>
    <code>
    
    // Definindo um vetor numérico <br>
    $idades = [25, 30, 35, 40];<br>

    // Definindo um vetor de strings <br>
    $nomes = ["João", "Maria", "Pedro"]; <br>

    // Definindo um vetor misto<br>
    $informacoes = ["João", 25, true];<br>

    // Definindo um vetor associativo<br>
    $aluno = [<br>
        "nome" => "Maria",<br>
        "idade" => 30,<br>
        "cidade" => "São Paulo" <br>
    ];<br>

    // Usando os vetores definidos<br>
    echo "Idades: " . implode(", ", $idades);<br>
    echo "Nomes: " . implode(", ", $nomes);<br>
    echo "Informações: " . implode(", ", $informacoes);<br><br>

    echo "Nome do aluno: " . $aluno["nome"];<br>
    echo "Idade do aluno: " . $aluno["idade"];<br>
    echo "Cidade do aluno: " . $aluno["cidade"];<br>


    </code>

    <p>
    Nesse exemplo, definimos quatro vetores: $idades, $nomes, $informacoes e $aluno. Os primeiros três são exemplos de vetores indexados, onde os elementos são acessados por índices numéricos. O último exemplo é um vetor associativo, onde os elementos são associados a chaves (ou nomes) em vez de índices numéricos. 
    Usamos a função implode() para converter os elementos do vetor em uma string separada por vírgulas, para exibi-los na tela. Também podemos acessar elementos individuais do vetor associativo usando a sintaxe $vetor[chave], onde chave é o nome atribuído ao elemento.
    Esses são apenas exemplos básicos de vetores em PHP. Existem muitas outras operações e funcionalidades que podem ser realizadas com vetores, como adicionar elementos, remover elementos, percorrer o vetor com loops, entre outros.
    </p>
</div>
    </div>
</div>



