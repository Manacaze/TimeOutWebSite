<?php 

function conectarBD(){
	try{
$conectPDO=new PDO("mysql:host=localhost;dbname=precadastro1", "root", "");
}catch(PDOException $e){
	echo $e->getMessage();

}
return $conectPDO;
}


 ?>