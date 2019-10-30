<?php
session_start();

if(isset($_POST['resultado']) && !empty($_POST['resultado'])){
   $resultadoUsuario = addslashes($_POST['resultado']);

   if($resultadoUsuario == $_SESSION['r']){
   	?>
   	  <h1>HUMANO</h1>
   	<?php
   }else{
   	?>
   	  <h1>FAKE</h1>
   	<?php
   }
}else{
	header("Location: index.php");
}

?>
<a href="sair.php">Voltar</a>
