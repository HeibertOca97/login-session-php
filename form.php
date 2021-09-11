<?php
if(isset($_GET["status"]) && $_GET["status"] == "false"){
   print '<h3 style="color: red;">Usuario y/o contraseña incorrecta</h3>';
   print 'Haga click en este enlace para volver a intentar: <a href="./login.php">Inicio de session</a>';
}
else{
?>
<h1>Inicio de sesion</h1>
<form action="" method="post">
   <input type="text" name="username" placeholder="username" autocomplete="off"><br>
   <input type="password" name="password" placeholder="password" autocomplete="off"><br>
   <button type="submit">Inciar sesion</button>
</form>
<a href="./">Volver a la pagina de Inicio</a>
<?php
}
