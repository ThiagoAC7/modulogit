<?php

	if (isset($_POST['email']) && !empty($_POST['email'])) {

		if (isset($_POST['senha']) && empty($_POST['senha']) == false ) {
			$senha = $_POST['senha'];
			$email = $_POST['email'];
			echo "Meu email eh : ".$email. " e minha senha eh " .$senha;
		}
	} 

?>
<hr>
<form method="POST">

	E-MAIl : <br>

	<input type="text" name="email"> <br><br>

	SENHA : <br>

	<input type="text" name="senha"> <br><br>

	<input type="submit" value="Enviar Dados"> <br><br>

</form>