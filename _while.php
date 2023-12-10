<div class="card">
  <div class="card-header">
    <div class="card-title">
      <h3> Laço de repetição WHILE</h3>
    </div>
  </div>
  <div class="card-body">
    <div class="p-5">
       <code>
          <pre>

          //vamos criar um vetor para percorrermos seus elementos um a um 
          //para exibir o valor nele contido
          $v = [120,45,56,32,1500,150,220,4];
                
          echo "Percorrendo os elementos e exibindo seu valor";

          $i = 0;

          while ( $i < count($v)){
              echo "Elemento $i: " . $v[$i];
              $i++; 
          }
          </pre>
       </code> 
    </div>
  </div>
</div>
