<?php
	require_once 'database.php';
	$pdo = bd();

	if(isset($_POST['email'])){
		if($pdo != null){
			$deleteUsuer = $pdo->prepare("DELETE FROM usuario WHERE email = :email");
			$deleteUsuer->bindValue(":email", $_POST['email']);
			$deleteUsuer->execute();
			$count = $deleteUsuer->rowCount();

			//verificando se deu certo
			$id;
			$nome;
			$email;
			$senha;

			$Conferir = $pdo->prepare("SELECT * FROM usuario");
			$Conferir->execute();
			$v = $Conferir->fetchAll(PDO::FETCH_OBJ);

			foreach ($v as $user){
				$id 	= isset($user->id) ? (string)$user->id : 'parametro_nao_definido';
				$nome 	= isset($user->nome) ? (string)$user->nome : 'parametro_nao_definido';
				$email 	= isset($user->email) ? (string)$user->email : 'parametro_nao_definido';
				$senha 	= isset($user->senha) ? (string)$user->senha : 'parametro_nao_definido';
			}

			if($count == 0){
				echo "<script>
					alert('Usuario Não Existe!');
					location.href='http:../lendo.php';
				</script>";
			}

			if($email == $_POST['email']){
				echo "<script> 
					alert('Usuario Não Excluido!');
					location.href='http:../lendo.php';
				</script>";
			}else{
				echo "<script> 
					alert('Usuario Excluido com Sucesso!');
					location.href='http:../lendo.php';
				</script>";
			}
		}
	}elseif(isset($_POST['nome'])){
		if($pdo != null){
			$deleteProd = $pdo->prepare("DELETE FROM produto WHERE nome = :nome");
			$deleteProd->bindValue(":nome", $_POST['nome']);
			$deleteProd->execute();

			//verificando se deu certo
			$id;
			$nome;
			$descricao;

			$Conferir = $pdo->prepare("SELECT * FROM produto");
			$Conferir->execute();
			$v = $Conferir->fetchAll(PDO::FETCH_OBJ);

			foreach ($v as $prod){
				$id 		= isset($prod->id) ? (string)$prod->id : 'parametro_nao_definido';
				$nome 		= isset($prod->nome) ? (string)$prod->nome : 'parametro_nao_definido';
				$descricao 	= isset($prod->descrcao) ? (string)$prod->descrcao : 'parametro_nao_definido';
			}

			if($nome == $_POST['nome']){
				echo "<script> 
					alert('Produto Não Excluido!');
					location.href='http:../lendo.php';
				</script>";
			}else{
				echo "<script> 
					alert('Produto Excluido com Sucesso!');
					location.href='http:../excluir.php';
				</script>";
			}
		}
	}
?>