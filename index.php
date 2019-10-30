<?php
session_start();
   $n1 = rand(0,9);
   $n2 = rand(0,9);

   $_SESSION['r'] = $n1 + $n2;

   
?>
<form method="POST" action="verificador.php">
  <?php echo $n1." + ".$n2." = ";?>
  <input type="number" name="resultado">
  <input type="submit" value="verificar">
</form>

