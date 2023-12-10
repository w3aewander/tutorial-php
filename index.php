<?php 

 include __DIR__ . "/header.php"; 
?>

<!-- header -->
<?php include __DIR__ . "/headerinfo.php";?>

    
<!-- navbar -->
<?php include __DIR__ .  "/navbar.php";?>


<div class="container-fluid">

<!-- constantes -->
<div id="constante">
<?php require __DIR__ . "/constantes.php" ; ?>
<a  class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>

<!-- variaveis -->
<div id="variaveis" >
<?php require __DIR__ . "/variaveis.php" ; ?>
<a  class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>

<!-- vetores -->
<div id="vetores">
<?php require __DIR__ . "/vetores.php" ; ?>
<a a class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>

<!-- funções -->
<div id="funcs">
    
<?php require __DIR__ . "/funcs.php" ; ?>
<a class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>

<!-- laços de repetição FOR -->
<div id="_for">
    
<?php require __DIR__ . "/_for.php" ; ?>
<a class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>

<!-- laços de repetição FOREACH -->
<div id="_foreach">
    
<?php require __DIR__ . "/_foreach.php" ; ?>

<a class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>

<!-- laços de repetição WHILE -->
<div id="_while">
    
<?php require __DIR__ . "/_while.php" ; ?>
<a class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>

  <!-- manipulação de arquivos -->
  <div id="arquivos" >
    <?php require __DIR__ . "/arquivos.php" ; ?>
    <a class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
  </div>

  <!-- video aulas -->
  <div id="videos">
    <?php require __DIR__ . "/videos.php" ; ?>
  </div>
  
 
<br>
<div>
  <a  class="btn btn-secondary my-2" href="javascript:scrollTo(0,0);">Voltar ao topo</a>
</div>
  
</div>

<?php include __DIR__ . "/footer.php"; ?>