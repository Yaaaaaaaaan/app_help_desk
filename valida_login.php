<?php
	$usuarioAutenticado = false;
	$usuariosApp = array(
	array('email' => 'adm@teste.com.br', 'senha' =>'123456'),
	array('email' => 'user@teste.com.br', 'senha' =>'abcdef'),
	);
	foreach ($usuariosApp as $user){
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuarioAutenticado = true;
		
		}
	}

	if($usuarioAutenticado){
		echo "Usuário autenticado";
	}else{
		header('location: index.php?login=erro');
	} 	
 ?>