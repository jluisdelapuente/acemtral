 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Suscripción boletín</title> 
<style type="text/css">
h1 { text-align: center; }
td { padding: 0.2em 2em ; }
</style>

</head>
<body>
<h1>Suscripción electronica a nuestro boletín.</h1>
<p>Nota: Este es un formulario de ejemplo en el que los datos aquí escritos se 
trasladan a otra página.</p>
<form action="comprobar.php" method="post"/>

<p>Nombre: <input type="text" name="nombre"/>   
   Apellidos: <input type="text" name="apellidos" size="40"/>   
   e-mail: <input type="text" name="email" size="35"/></p>
<p>contraseña: <input type="password" name="contras"/><br/>
<table>
   <tr>
   <td>
   sexo<br/>
   <input type="radio" name="sexo" value="V"/> Varón<br/>
   <input type="radio" name="sexo" value="M"/> Mujer</p>
   </td>
   <td>
   Nivel de estudios<br/>
   <input type="radio" name="estudios" value="elemental" checked="checked">
     Certificado escolar<br/>
   <input type="radio" name="estudios" value="basico"/> 
     Graduado en E.S.O.<br/>
   <input type="radio" name="estudios" value="bachiller"/> 
     Bachiller - Formación Profesional <br/>
   <input type="radio" name="estudios" value="Diplomado"/> 
     Diplomado<br/>
   <input type="radio" name="estudios" value="licenciado"/> 
     Licenciado o Doctorado<br/>
   </td>
   <td>
   Interesado en los siguientes temas: <br/>
   <input type="checkbox" name="musica"/> Música<br/>
   <input type="checkbox" name="deportes"/> Deportes<br/>
   <input type="checkbox" name="cine"/> Cine<br/>
   <input type="checkbox" name="libros"/> Libros<br/>
   <input type="checkbox" name="ciencia"/> Ciencia</p>
   </td>
   </tr>
</table>
<p>Día de la semana que le interesa recibirlo:</p>
<select name="dia">
    <option>día de la semana:</option> 
    <option value="">lunes</option> 
    <option value="Martes">martes</option> 
    <option value="Miércoles">miercoles</option> 
    <option value="Jueves">jueves</option> 
    <option value="Viernes">viernes</option> 
    <option value="Sábado">sábado</option> 
    <option value="Domingo">domingo</option> 
</select>
</p>
<p>Su opinión: <br/>
<textarea name="comentario" rows="5" cols="50">Comentario: </textarea>
<p><input type="submit" value="Comprobar el formulario"> 
   <input type="reset" value="borrar todo"></p>
</form>
</body>
</html>