<html> 

<head> 
<title></title> 
<script> 
function sumar() { 
var n1 = parseInt(document.MyForm.numero1.value); 
var n2 = parseInt(document.MyForm.numero2.value); 
document.MyForm.resultado.value=n1*n2; 
} 
</script> 
</head> 

<body> 

<form name="MyForm"> 
<input type="text" name="numero1" size="20"> 
<input type="text" name="numero2" size="20"> 
<input type="text" name="resultado" size="20"> 

<input type="button" value="Sumar" onclick="sumar()"> 
</form> 

</body> 

</html>

