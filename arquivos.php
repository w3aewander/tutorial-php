<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h4>Manipulando arquivos de texto</h4>
        </div>
    </div>
    <div class="card-body">
        <div >
 
    <!-- introdução -->
    <p>
        Em PHP, existem diversas funções disponíveis para manipulação de arquivos de texto. Vou mostrar alguns exemplos básicos de como realizar operações como ler, escrever, pesquisar e excluir dados de arquivos de texto.
    </p>


    <!-- exemplo de código -->
    <!-- ler dados de um arquivo -->
    <h5>Ler dados em arquivo de texto</h5>
    <p>
        <code>
            
            $nomeArquivo = 'dados.txt';<br>
            $conteudo = file_get_contents($nomeArquivo);<br>
            echo $conteudo;<br>
            
        </code>
    </p>
    <h5>Ler dados em arquivo de texto com fopen()</h5>
    <p>
        <code>
        //variável contendo o caminho do arquivo no sistema.<br>
        $path = "caminho_do_arquivo";  <br>
        
        //abra o arquivo de texto no modo leitura (r)<br>
        $fp = fopen($path, 'r');<br>

        //percorra cada linha do arquivo <br>
        while ( ! feof($p)){ <br>
            echo fgets($fp, 1020); <br>
        }<br>
        //fechar o arquivo<br>
        fclose($fp);<br>

    </code>
    </p>

    <h5>Escrever dados em arquivo de texto</h5>
    <p>
        <code>
        //variável contendo o caminho do arquivo no sistema.<br>
        $path = "caminho_do_arquivo";<br><br>    
        
        //abra o arquivo de texto no modo escrita (r)<br>
        file_put_contents($path, "dados para serem gravados");<br>

        </code>
    </p>
    <p>
        <code>
        //variável contendo o caminho do arquivo no sistema.<br>
        $path = "caminho_do_arquivo";<br><br>
        
        //abra o arquivo de texto no modo leitura (r)<br>
        $fp = fopen($path, 'w');<br><br>

        //grave o conteúdo desejado no arquivo<br>
        fwrite($fp, "conteudo ou a string desejada para gravar", 1024);<br>
        <br>
        //fechar o arquivo<br>
        fclose($fp);<br>

        </code>
    </p>

    <h5>Pesquisar dados em um arquivo de texto</h5>
    <p>
        <code>
        $nomeArquivo = 'dados.txt';<br>
        $conteudo = file_get_contents($nomeArquivo);<br>
        if (strpos($conteudo, 'exemplo') !== false) {<br>
            echo "A palavra 'exemplo' foi encontrada no arquivo.";<br>
        } else {<br>
            echo "A palavra 'exemplo' não foi encontrada no arquivo.";<br>
        }<br>
        </code>
    </p>

    <h5>Excluir dados em arquivo de texto</h5>
    <p>
        <code>
        $nomeArquivo = 'dados.txt';<br>
        file_put_contents($nomeArquivo, '');<br>
        echo "Dados excluídos com sucesso!";<br>
        </code>
    </p>
    <p>Também pode-se abrir o arquivo percorrer linha a linha, enviar 
       apenas o conteúdo da linha que se quer manter para outro arquivo,
       e depois desse procedimento,  apagar o conteúdo do arquivo original e em seguindo gravar o conteudo do arquivo gerado temporariamente para o arquivo original e por último, apagar o arquivo auxliar.. (visto na prática)

    <!-- resumo do conteúdo -->
    <p>
    
    </p>
</div>
    </div>
</div>



