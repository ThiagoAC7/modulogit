<?php
	if (isset($_POST['email']) && !empty($_POST['email'])) {

		$email = $_POST['email'];
		file_put_contents("teste.txt", $email, FILE_APPEND);

		header("Location: recebedorForm.php");
	} 
?>