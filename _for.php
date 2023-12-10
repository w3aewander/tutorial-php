
<div class="card">
   <div class="card-header">
      <div class="card-title">
        <h4> Laço de repetição FOR </h4>    
      </div>
   </div>
   <div class="card-body">
    
   <br>O laço de repetição FOR utiliza uma variável de controle que é incrementada ou decrementada a cada iteração.
   <br>Assim sendo, este comando percorre os elementos de um vetor até a quantidade de elementos que ele possui ou até que um condição seja<br>
   definida. Pode ainda para o laço com o comando break, ou também, quando desejável explicitar sua continuação com o comando continue para pular alguma instrução dentro do corpo do laço.   
   <br>

   <div class="p-5">
   <code>
  
   <pre>
    //vamos criar um vetor para percorrermos seus elementos um a um 
    //para exibir o valor nele contido
    $v = [120,45,56,32,1500,150,220,4];
          
    echo "Percorrendo os elementos e exibindo seu valor";

    for($i=0; $i < count($v) -1; $i++){
        echo "Elemento $i: " . $v[$i]; 
    }

  </pre>
  </code>

   
  </div>

  </div>

</div>