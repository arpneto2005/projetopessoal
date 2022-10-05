<?php
	require_once 'database.php';
	$pdo = bd();

	if(isset($_POST['idUser']) && isset($_POST['nomeUser']) && isset($_POST['emailUser']) && isset($_POST['senhaUser'])){
		if($pdo != null){
			$inserirUsuer = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
			$inserirUsuer->bindValue(":id", $_POST['idUser']);
			$inserirUsuer->bindValue(":nome", $_POST['nomeUser']);
			$inserirUsuer->bindValue(":email", $_POST['emailUser']);
			$inserirUsuer->bindValue(":senha", $_POST['senhaUser']);
			$inserirUsuer->execute();

			//verificando se deu certo
			$id;
			$nome;
			$email;
			$senha;

			$inserirUser = $pdo->prepare("SELECT nome, email, senha FROM usuario");
			$inserirUser->execute();
			$v = $inserirUser->fetchAll(PDO::FETCH_OBJ);
			foreach ($v as $user){
				$nome 	= isset($user->nome) ? (string)$user->nome : 'parametro_nao_definido';
				$email 	= isset($user->email) ? (string)$user->email : 'parametro_nao_definido';
				$senha 	= isset($user->senha) ? (string)$user->senha : 'parametro_nao_definido';;
			}
			if($nome == $_POST['nomeUser'] && $email == $_POST['emailUser'] && $senha == $_POST['senhaUser']){
				echo "<script> 
					alert('Usuario Alterado com Sucesso!');
					location.href='http:../lendo.php';
				</script>";
			}else{
				echo "<script> 
					alert('Usuario Não Alterado!');
					location.href='http:../alterar.php';
				</script>";
			}
		}
	}elseif(isset($_POST['idProd']) && isset($_POST['nomeProd']) && isset($_POST['descricaoProd'])){
		if($pdo != null){
			$inserirUsuer = $pdo->prepare("UPDATE produto SET nome = :nome, descrcao = :descricao WHERE id = :id");
			$inserirUsuer->bindValue(":id", $_POST['idProd']);
			$inserirUsuer->bindValue(":nome", $_POST['nomeProd']);
			$inserirUsuer->bindValue(":descricao", $_POST['descricaoProd']);
			$inserirUsuer->execute();

			//verificando se deu certo
			$id;
			$nome;
			$descricao;

			$inserirUser = $pdo->prepare("SELECT * FROM produto");
			$inserirUser->execute();
			$v = $inserirUser->fetchAll(PDO::FETCH_OBJ);
			foreach ($v as $user){
				$id 		= isset($user->id) ? (string)$user->id : 'parametro_nao_definido';
				$nome 		= isset($user->nome) ? (string)$user->nome : 'parametro_nao_definido';
				$descricao 	= isset($user->descrcao) ? (string)$user->descrcao : 'parametro_nao_definido';
			}
			
			if($nome == $_POST['nomeProd'] && $descricao == $_POST['descricaoProd']){
				echo "<script> 
					alert('Produto Alterado com Sucesso!');
					location.href='http:../lendo.php';
				</script>";
			}else{
				echo "<script> 
					alert('Produto Não Alterado!');
					location.href='http:../alterar.php';
				</script>";
			}
		}
	}
?>