<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h4>Constantes</h4>
        </div>
    </div>
    <div class="card-body">
        <div >

        <p>
        // Definindo uma constante simples<br>
        define("PI", 3.14159);<br>

        // Definindo uma constante com um valor de string<br>
        define("MENSAGEM", "Olá, mundo!");<br>

        // Definindo uma constante com um valor booleano<br>
        define("ATIVO", true) <p>
        Em PHP, as constantes são valores que não podem ser alterados durante a execução do programa.
        Elas são úteis para armazenar valores fixos que são usados repetidamente em um script. As constantes são definidas usando a função `define()` e seguem algumas regras:

        - O nome de uma constante deve começar com uma letra ou sublinhado, seguido por qualquer número de letras, números ou sublinhados.
        - Por padrão, as constantes são case-sensitive, o que significa que `MENSAGEM` e `mensagem` são considerados constantes diferentes.
        - Por convenção, os nomes das constantes são escritos em letras maiúsculas.
      
        <p>
            Exemplo de uso de constantes em PHP:
        </p>
        <code>;<br>
    
            // Usando as constantes definidas<br>
            echo "O valor de PI é: " . PI;<br>
            echo MENSAGEM;<br>
            echo "A constante ATIVO está definida como: " . (ATIVO ? "verdadeiro" : "falso");<br>
    
    
        </code>

        <p>
        Nesse exemplo, definimos três constantes: `PI`, `MENSAGEM` e `ATIVO`. Em seguida, usamos essas constantes em um script para exibir seus valores. Note que não podemos atribuir um novo valor a uma constante após sua definição, pois elas são imutáveis durante a execução do programa.

         </p>
    </div>

    </div>
</div>


