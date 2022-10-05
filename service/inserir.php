<?php
	require_once 'database.php';
	$pdo = bd();

	if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
		if($pdo != null){
			$inserirUsuer = $pdo->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
			$inserirUsuer->bindValue(":nome", $_POST['nome']);
			$inserirUsuer->bindValue(":email", $_POST['email']);
			$inserirUsuer->bindValue(":senha", $_POST['senha']);
			$inserirUsuer->execute();

			//verificando se deu certo
			$nome;
			$email;
			$senha;

			$inserirUser = $pdo->prepare("SELECT nome, email, senha FROM usuario");
			$inserirUser->execute();
			$v = $inserirUser->fetchAll(PDO::FETCH_OBJ);
			foreach ($v as $user){
				$nome = $user->nome;
				$email = $user->email;
				$senha = $user->senha;
			}
			if($nome == $_POST['nome'] && $email == $_POST['email'] && $senha == $_POST['senha']){
				echo "<script> 
					alert('Usuario Inserido com Sucesso!');
					location.href='http:../lendo.php';
				</script>";
			}else{
				echo "<script> 
					alert('Usuario Não Inserido!');
					location.href='http:../inserir.php';
				</script>";
			}
		}
	}elseif(isset($_POST['produto']) && isset($_POST['descricao'])){
		if($pdo != null){
			echo $_POST['produto'];
			echo $_POST['descricao'];
			$inserirprod = $pdo->prepare("INSERT INTO produto (nome, descrcao) VALUES (:produto, :descricao)");
			$inserirprod->bindValue(":produto", $_POST['produto']);
			$inserirprod->bindValue(":descricao", $_POST['descricao']);
			$inserirprod->execute();

			//verificando se deu certo
			$produto;
			$descricao;

			$verificaProd = $pdo->prepare("SELECT nome, descrcao FROM produto");
			$verificaProd->execute();
			$v = $verificaProd->fetchAll(PDO::FETCH_OBJ);
			foreach ($v as $prod){
				$produto = isset($prod->nome) ? (string)$prod->nome : 'parametro_nao_definido';
				$descricao = isset($prod->descrcao) ? (string)$prod->descrcao : 'parametro_nao_definido';;
			}

			if($produto == $_POST['produto'] && $descricao == $_POST['descricao']){
				echo "<script> 
					alert('Produto Inserido com Sucesso!');
					location.href='http:../lendo.php';
				</script>";
			}else{
				echo "<script> 
					alert('Produto Nâo Inserido!');
					location.href='http:../inserir.php';
				</script>";
			}
		}
	}
?>