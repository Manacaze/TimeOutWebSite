<?php 

/**
* 
*//*
include ("conexao.php");
$conect=conectarBD();
*/



$nome=$_POST["nome"];
$email=$_POST["email"];
$login=$_POST["login"];

$senha=password_hash($_POST["senha"], PASSWORD_DEFAULT) ;



			//$nome_foto = 'padrao.jpg';



//prepara o cadastro
				if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0){ 


				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false){
			       echo "<h1>Extensão Inválida!</h1>";
			       echo "B";
			       exit;
			    }
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])){
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")){  
			               mkdir("fotos"); 
			          } 
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name']; 
			          
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)){  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          }  
			     } 
			}
$insertCad=$conect->prepare("INSERT INTO usuarios(nome,email,login,senha,fotoUser)VALUES(:nome,:email,:login,:senha,:foto)");

$insertCad->bindValue(":nome",$nome);
$insertCad->bindValue(":email",$email);
$insertCad->bindValue(":login",$login);
$insertCad->bindValue(":senha",$senha);
$insertCad->bindValue(":foto",$nome_foto);


//valida cadastro se nao hover registo identico
$validarEmail=$conect->prepare("SELECT * FROM usuarios WHERE email=?");
$validarNome=$conect->prepare("SELECT * FROM usuarios WHERE nome=?");
$validarId=$conect->prepare("SELECT * FROM usuarios WHERE nome=?");
$validarId->execute(array($idResponsavel));
$validarEmail->execute(array($email));
$validarNome->execute(array($nome));
//$validar->execute(array($login));

	if($validarEmail->rowCount() == 0 && $validarNome->rowCount() == 0){
//Exacuta o cadasteo
$insertCad->execute();
echo "<div class='alert alert-success' role='alert'>Cadastrado com sucesso, aguarde a aprovacao ...</div>";
}else{
	echo "<div class='alert alert-danger' role='alert'>Existe Usuario identico</div>";
}