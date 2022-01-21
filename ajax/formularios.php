<?php 
    //valida e configura envio das informacoes para o email ou banco de dados  

    //verifica se arquivo existe 
    if(file_exists('../config.php'))
    {
        //configuracao de classificacao instanciar as classes 
        include('../config.php');


        //valida identificador form 
        if($_POST['identificador'] == 'form_FormularioEntrar'){ 

            //echo '<script>alert("Aki 2...")</script>'; 
        
            //percorre array para guardar sucesso ou erro 
            $data = array('sucesso'=>true,'mensagem'=>'Informações validada com sucesso!');

            //variaveis de controle
            $cpf = $_POST['cpf'];
            $password = $_POST['password'];

            //valida od campos chavesdos os campos do formulario
            if($cpf == ""){
                $data = array('sucesso'=>false,'mensagem'=>'O cpf está vázio!');
            }else if($password == ''){
                $data = array('sucesso'=>false,'mensagem'=>'A senha está vázia!');                   
            }
        
            //enviar formulario
            if($data['sucesso']){            

                //valida banco de dados 
                $sql = MySql::conectar()->prepare("SELECT * FROM usuario WHERE cpf = ? AND senha = ?");
                $sql->execute(array($cpf,$password));
                if($sql->rowCount() == 1){
                    $info = $sql->fetch();
                    //Logamos com sucesso.
                    $_SESSION['login'] = true;                    
                    //
                    $data = array('sucesso'=>true,'mensagem'=>'Informações registrada com sucesso!');                
                }else{
                    //
                    $data = array('sucesso'=>false,'mensagem'=>'Erro ao tentar digitar informações!'); 
                }

            }

            //encerra o processo returnando SUCESSO ou ERRO 
            die(json_encode($data));        


        //valida identificador form 
        }else if($_POST['identificador'] == 'form_FormularioCadastrar'){ 

            //echo '<script>alert("Aki 2...")</script>'; 
        
            //percorre array para guardar sucesso ou erro 
            $data = array('sucesso'=>true,'mensagem'=>'Informações validada com sucesso!');
   
            //enviar formulario
            if($data['sucesso']){            

                //valida banco de dados 
                $sql = MySql::conectar()->prepare("SELECT table_name FROM information_schema.tables WHERE table_schema = 'teste_live' AND table_name = 'usuario'"); 
                $sql->execute();
                if($sql->rowCount() != 0){
                    $info = $sql->fetch();
                    //Logamos com sucesso.
                    $_SESSION['login'] = true;                    
                    //
                    $data = array('sucesso'=>true,'mensagem'=>'Tabela existe no banco de dados!');                
                }else{
                    //
                    $data = array('sucesso'=>false,'mensagem'=>'Erro ao tentar acessar banco de dados!'); 
                }

            }

            //encerra o processo returnando SUCESSO ou ERRO  
            die(json_encode($data));        

        }else if($_POST['identificador'] == 'form_FormularioCadastro'){
                
            //percorre array para guardar sucesso ou erro 
            $data = array('sucesso'=>true,'mensagem'=>'Informações validada com sucesso!');

            //variaveis de controle
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $dtnascto = $_POST['dtnascto'];
            $password = $_POST['password'];
            $validpassword = $_POST['validpassword'];

            //instancia a classe USUARIO
            $usuario = new Usuario();

            //valida todos os campos do formulario
            if($nome == ''){
                $data = array('sucesso'=>false,'mensagem'=>'O nome está vázio!');
            }else if($cpf == ''){
                $data = array('sucesso'=>false,'mensagem'=>'O cpf está vázio!');
            }else if($email == ''){
                $data = array('sucesso'=>false,'mensagem'=>'O email está vázio!');
            }else if($email != filter_var($email, FILTER_VALIDATE_EMAIL)){
                $data = array('sucesso'=>false,'mensagem'=>'Email digitado está incorreto!');   
            }else if($dtnascto == ''){
                $data = array('sucesso'=>false,'mensagem'=>'A data de nascimento está vázia!');
            }else if($password == ''){
                $data = array('sucesso'=>false,'mensagem'=>'A senha está vázia!');
            }

            //enviar formulario
            if($data['sucesso']){
                //valida se existe nome  já cadastrado
                $verifica = MySql::conectar()->prepare("SELECT * FROM usuario WHERE nome_completo=?");
                $verifica->execute(array($nome));
                if($verifica->rowCount() == 0){		                    
                    //valida se existe cpf já cadastrado
                    $verifica = MySql::conectar()->prepare("SELECT * FROM usuario WHERE cpf=?");
                    $verifica->execute(array($cpf));
                    if($verifica->rowCount() == 0){		
                        //cadastrar o usuario no bando de dados  
                        if($usuario->cadastrarUsuarios($nome,$cpf,$email,$dtnascto,$password)){		
                            $data = array('sucesso'=>true,'mensagem'=>'O cadastro do usuário foi feito com sucesso!');
                        }else{
                            $data = array('sucesso'=>false,'mensagem'=>'Erro ao cadastrar o usuário!');
                        }
                    }else{
                        $data = array('sucesso'=>false,'mensagem'=>'Já existe um cpf com esse numero!');
                    }
                }else{
                    $data = array('sucesso'=>false,'mensagem'=>'Já existe um usuário com esse nome!');
                }
            } 				            

            //encerra o processo returnando SUCESSO ou ERRO 
            die(json_encode($data));  
        
        //valida identificador form 
        }else if($_POST['identificador'] == 'form_FormularioFaleConosco'){ 

            //percorre array para guardar sucesso ou erro 
            $data = array('sucesso'=>true,'mensagem'=>'Informações enviada com sucesso!');
        
            $assunto = 'Nova mensagem do site!';
            $corpo = ''; 
            foreach ($_POST as $key => $value) {
                $corpo.=ucfirst($key).": ".$value;
                $corpo.="<hr>";
            }                                
            //configuração servidor
            $infoEmail = new Email('dropscode.com.br','contato@dropscode.com.br','Egsjr7268@','EdmurGSilvaJr');
            //adicionar para quem mandar 
            $infoEmail->addAdress('edmurgsjr@hotmail.com','EdmurGSilvaJr');
            //adicionar qual assunto e corpo
            $infoArray = array('assunto'=>$assunto,'corpo'=>$corpo);                                    
            $infoEmail->formatarEmail($infoArray);
            //enviar formulario
            if($infoEmail->enviarEmail()){
                $data = array('sucesso'=>true,'mensagem'=>'Informações enviada com sucesso!');
            } else {                
                $data = array('sucesso'=>false,'mensagem'=>'Ocorreu um erro ao enviar as informações!');
            }         
              
            //encerra o processo returnando SUCESSO ou ERRO  
            die(json_encode($data));
        
        }
        
    }else{

        $data = array('sucesso'=>false,'mensagem'=>'Erro ao tentar enviar informações!');         
        //encerra o processo returnando SUCESSO ou ERRO
        die(json_encode($data)); 

    }

?>
