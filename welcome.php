<?php
require_once "./auth.php";
AuthSession();
?>
<h1>Welcome, <?php print getDataSession("name"); ?></h1>
<table border="1">
   <tr>
      <th>Name</th>
      <th>Rol</th>
      <th>Age</th>
      <th>Username</th>
      <th>Password</th>
   </tr>
   <tr>
      <td><?php print getDataSession("name"); ?></td>
      <td><?php print getDataSession("rol"); ?></td>
      <td><?php print getDataSession("age"); ?></td>
      <td><?php print getDataSession("username"); ?></td>
      <td><?php print getDataSession("password"); ?></td>
   </tr>
</table>
<br>
<br>
<form action="./logout.php" method="post">
   <input type="hidden" name="session_destroy" value="delete">
   <button type="submit">Cerrar sesion</button>
</form>