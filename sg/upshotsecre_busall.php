<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Archivo Central - MINAM</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="../css/mod.css.css" rel="stylesheet" type="text/css" />

</head> <?php include_once 'menuprincipal.php'; ?>
<body>

  <?php
if ( !isset($_POST['buscar']) ){
  echo "Debe indicar nombre del Documento a buscar";
  echo "<p><a href=\"pursuesecre_busall.php\">Volver</p> \n";
  exit;
}
?>
</p>
<p>&nbsp; </p>
<div align='center'><strong><font size='4' face='Verdana, Arial, Helvetica, sans-serif'>Resultado de la Busqueda de Registros: -ASUNTO-</font></strong>
  <table width='80%' border='1' align='center' cellspacing='1' cellpadding='1' bordercolor='#0840A1'>
  <br>
</div>
<tr bgcolor='#0840A1'>

<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Siglas_id</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Documentos</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">Numero</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">a&#241;o</font> </th>
<th align="center"> <font face="Verdana" size="2" color="#FFFFFF">PDF</font> </th>

 
</tr>	


<?php
require_once '../includes/funcionesBD.inc.php';

$link = conectarBD();

$query = "SELECT Id, Siglas_id, Documentos, Numero, Anio, pdf FROM table_all WHERE Numero
    LIKE '%".$_POST['buscar']."%' ORDER BY Documentos";

$result = mysql_query($query, $link)
        or die('Error en el SQL: ' . mysql_error($link));
echo "<a href='pursuesecre_busall.php'>Realizar otra Busqueda...</a></td></tr>";
if (mysql_num_rows($result) > 0) {

while($row = mysql_fetch_array($result)) {

echo '<tr>';

echo '<td>'. $row[1] .'</td>';
echo '<td>'. $row[2] .'</td>';
echo '<td>'. $row[3] .'</td>';
echo '<td>'. $row[4] .'</td>';

echo "<td><a href='../../Minam/pdfs/".$row[5]."' TARGET='_blank' >".$row[5] ."<a/></td>";

echo '</tr>';
  }
  echo "<tr><td colspan='2'><a href='pursuesecre_busall.php'>Realizar otra Busqueda...</a></td></tr>";
} else {
echo "<tr><td colspan='2'>No hay registro.";
echo "<a href='pursuesecre_busall.php'>Realizar otra Busqueda...</a></td></tr>";
}
?>
</table>
</body>
</html>