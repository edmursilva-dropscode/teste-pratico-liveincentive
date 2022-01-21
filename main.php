<?php 
    //valida a configuracao de loggout    
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}  
?>
<!DOCTYPE html>
<html lang="pt"> 

    <head>  

        <!--incorporando fontes do googlefonts--> 
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">    <!--font-family: 'Spartan', sans-serif;-->
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@200&display=swap" rel="stylesheet">    <!--font-family: 'Montserrat', sans-serif;-->
        

        <!-- Favicons -->
        <link href="<?php echo INCLUDE_PATH; ?>img/icon.png" rel="icon">
        <link href="<?php echo INCLUDE_PATH; ?>img/icon.png" rel="apple-touch-icon">        

        <!--linkando o arquivo externo CSS-->
        <link href="<?php echo INCLUDE_PATH; ?>providers/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="<?php echo INCLUDE_PATH; ?>providers/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

        <!--linkando o arquivo proprio interno CSS-->
        <link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet" type="text/css" >          

        <!--formatoção de caracteres/acentuação utilizado no projeto-->
        <meta charset="utf-8">

        <!--configuração para dispositivo movel-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!--conteúdo resumido do projeto-->
        <meta name="description" content="Conteúdo do meu projeto">

        <!--palavras do resumo para uma busca do projeto-->
        <meta name="keywords" content="palavras,separadas,por,virgula">

        <!--nome do autor ou empresa do projeto-->
        <meta name="author" content="Edmur G Silva Jr">

        <!--título do projeto-->
        <title>Teste prático</title>   

    </head>  

    <!--<body onload="javascript:autoRefresh();">--> 
    <body>

        <!--valida BASE para carregar paginas na hora, automaticamente - REALTIME-->
        <base base="<?php echo INCLUDE_PATH; ?>" />

        <!--configura logo de espera quando botao ACAO é acionado para enviar informacoes ao email-->
        <div class="overlay-loading">
            <img src="<?php echo INCLUDE_PATH ?>img/logo-espera-ajax.gif"/>
        </div><!--overlay-loading--> 

        <!--exibe mensagem de informacoes enviada com sucesso-->
        <div id="sucesso">Informações enviada com sucesso!</div>

        <!--exibe mensagem de informacoes tentada enviar e que deu erro-->
        <div id="erro">Erro ao tentar enviar informações!</div>   

        <!--configura o qual opção do menu esta ativo-->
        <div id="menu-ativo">1</div>          

        <!--codigo do projeto(parte00)-->   
        <section id="leaf-menu" class="leaf-menu">

            <div class="container">            
                <div class="row">

                    <div class="col-md-4 text-center">
                        <div class="box-nav">
                            <a class="navbar-brand" href="#logo">
                                <div class="leaf-header-logo">
                                    <div class="logo"></div><!--logo1-->
                                    <h2 class="text-logo">Teste</h2>
                                </div>                     
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row-reverse">
                        <nav class="desktop-menu">
                            <ul id="desktop-menu">
                                <li><a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout">  Home</a> |</li>
                                <li><a  <?php selecionadoMenu('cadastro'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastro">  Cadastro</a> |</li>
                                <li><a  <?php selecionadoMenu('novidades'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>novidades">  Novidades</a> |</li>
                                <li><a  <?php selecionadoMenu('faleconosco'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>faleconosco">  Fale conosco</a></li>                               
                            </ul>
                        </nav><!--desktop-menu-->           
                    </div>
                </div>                
            </div><!--container-->

            <!--carrega pagina do painel de controle--> 
            <?php Painel::carregarPagina(); ?>       
        
        </section><!--leaf-menu-->            
        
        <!--codigo do projeto(parte04)-->
        <section id="footer" class="footer section-bg">

            <div class="container">

                <div class="row">
                    
                    <div class="box-start-leaf">

                        <div class="box-start">
                            <li><a class="btn-start" href="#start">Start tour</a></li>                            
                            <div class="arrow-tour">
                                <h2><i class="bi bi-caret-down-fill"></i></h2>
                            </div>
                        </div>

                    </div>                   
                    
                    <div class="box-start-leaf">

                        <div class="box-devices">
                            <li><a class="btn-start" href="#start">For all devices</a></li>                            
                            <div class="arrow-devices">
                                <h2><i class="bi bi-caret-down-fill"></i></h2>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-stretch">

                        <div class="info">          
                            <!--imagem de avulso-->
                        </div>

                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">

                        <div class="info-form">

                            <h2>Fully Reponsive</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies arcu ante, vitae mattis mauris hendrerit in. Suspendisse et suscipit purus, nec rutrum nibh. Suspendisse vehicula quam in tincidunt commodo. Curabitur tellus ex, aliquam nec neque non, vehicula dignissim sapien. Maecenas augue nisl, tempus sed ultrices et, blandit id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> 

                            <li><a class="btn-tour" href="#tour">START TOUR</a></li>   

                        </div>                                                 

                    </div>
                </div>

                <div class="clear"></div><!--limpa flutuações-->

            </div>

        </section><!--footer-->

        <!--linkando o arquivo fornecedor externo JS--> 
        <script src="<?php echo INCLUDE_PATH; ?>/providers/bootstrap/js/bootstrap.bundle.min.js"></script>     
        <script src="<?php echo INCLUDE_PATH; ?>/providers/bootstrap/js/bootstrap.min.js"></script> 
        <script src="<?php echo INCLUDE_PATH; ?>/providers/jquery-v3.6.0/jquery.js"></script>  

        <!--linkando o arquivo proprio interno JS--> 
        <script src="<?php echo INCLUDE_PATH; ?>/js/constants.js"></script>  
        <script src="<?php echo INCLUDE_PATH; ?>/js/formularios.js"></script>       
        
        <!--configura funcoes que executa na pagina-->
        <script>
            function fMasc(objeto,mascara) {
                obj=objeto
                masc=mascara
                setTimeout("fMascEx()",1)
            }

            function fMascEx() {
                obj.value=masc(obj.value)
            }

            function mCPF(cpf){
                cpf=cpf.replace(/\D/g,"")
                cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
                cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
                cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
                return cpf
            }    
            
            function mDATA(data){
                data=data.replace(/\D/g,"");                    
                data=data.replace(/(\d{2})(\d)/,"$1/$2");
                data=data.replace(/(\d{2})(\d)/,"$1/$2");
                data=data.replace(/(\d{2})(\d{2})$/,"$1$2");
                return data;
            }            
        </script>            

    </body>
</html>

