<?php 
 include 'dados/produtos.php';
 include 'function/real.php';?>

  <div class="slider">
  <div class="slider--controls"  style="height: 600px">
    <div class="slider--control" onclick="goPrev()"><img src="images/setaesquerda.png" width="50px"></div>
    <div class="slider--control" onclick="goNext()"><img src="images/setadireita.png" width="50px"></div>
  </div>
  <div class="slider--width" style="width: calc(100vw * 2)">
    <div class="slider--item" style="background-image: url('images/banner1.jpg');"></div>    
    <div class="slider--item" style=" background-image: url('images/banner2.jpg');"></div>     
  </div>  
  <h1 class="h1s">As melhores marmitas da cidade</h1>
  <p>Qualidade e  sabores inigualáveis</p>  
  <div class="produtos">
  <?php
    foreach($produto as $pdt):    
  ?>   
   <div class="Marmita">       
        <a id="product" href="index.php?p=produto.php&id=<?=$pdt['id']?>">     
        <img src="<?=$pdt['imagem']?>" style="width:200px; border-radius: 10%;">    
        <p><?=$pdt['nome']?></p>
        <p id="valor"><?=BRL($pdt['valor'])?></p></a>    
    </div>  
  <?php 
  endforeach;?> 
  </div>
</div>
