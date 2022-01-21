<?php
	
	class Usuario
	{

		//cadastrar novo usuario 
		public static function cadastrarUsuarios($nome,$cpf,$email,$dtnascto,$password){
			//formatando campo date
			$nascimento = date('Y-m-d', strtotime($dtnascto));
			$datehora = date('Y-m-d H:i:s');
			//
			$sql = MySql::conectar()->prepare("INSERT INTO usuario VALUES (null,?,?,?,?,?,?)");
			if($sql->execute(array($nome,$cpf,$email,$nascimento,$password,$datehora))){
				return true;
			}else{
				return false;
			}
		}

	} 

?>