<div class="card">
  <div class="card-header">
    <div class="card-title">
      <h4> Laço de repetição FOREACH </h4>
    </div>
  </div>
  <div class="card-body">

    <div>
      <p>Funciona de maneira análoga ao "for" mas para cada elemento na iteração ele armazena este elemento em uma variável
        <br>Ideal para usar com vetores associativos, do tipo chave=>valor."
        <br>Vamos utilizar um vetor associativo para o exemplo."
      </p>
      <code>
        <pre>
        //vamos criar um vetor para percorrermos seus elementos um a um 
        //para exibir o valor nele contido
        $dados = [
          [
            "nome" => "Wanderlei Silva",
            "profissao" => "Professor"
          ],
          [
            "nome" => "Joaquim da Silva",
            "profissao" => "Jardineiro"
          ],
          [
            "nome" => "Maria da Silva",
            "profissao" => "Manicure"
          ]
        ];
              

        echo "Percorrendo os elementos e exibindo seu valor";


        foreach($dados as $dado){
            echo "Nome: " . $dado['nome'] ;
            echo "Profissão: " . $dado['profissao']";
            
        }

        </pre>
      </code>

    </div>

  </div>

<div>