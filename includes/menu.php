<div id="left">
<?php
    $username = $_SESSION['username'];?>
  
<ul>
    <li><a href="portada.php">Portada</a></li>
</ul>
<ul>
    <li><a href="modulo_<?php echo $username['idarea'] ?>.php"><?php echo $username['nomarea'] ?></a></li>
</ul>
<ul>
    <li><a href="logout.php">Salir</a></li>
</ul>

</div>

