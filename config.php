<?php 

    //configuracao do banco de dados        
    include('class/mysql.php');   
	//configuracao do site
	include('class/painel.php');  
	include('class/usuario.php');
	
	//trabalhando com sessao para armazenagem de dados    
	session_start(); 
	//trabalhando com data e hora de são paulo atual
	date_default_timezone_set('America/Sao_Paulo');    
	
    // funcao disparar email
	$autoload = function($class){
		if($class == 'Email'){
			require_once('class/phpmailer/PHPMailerAutoload.php');			
			include('class/email.php/'.$class.'.php');	
		}			
	};
	spl_autoload_register($autoload);   	
    
    //define o caminho padrao do site para as contantes
    define('INCLUDE_PATH','http://localhost/wwwedmurgsjr/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH); 

	//define o caminho padrao do diretorio /INDEX no site 
	define('BASE_DIR_PATH',__DIR__);

	//Conectar com banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','teste_live');	

	//variavel/contante da empresa desenvolvedora do site
	define('NOME_EMPRESA','SECTOTECH');

	//Funções do painel
	function selecionadoMenu($par){		
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="menu-active"';
		}
	}

?> 