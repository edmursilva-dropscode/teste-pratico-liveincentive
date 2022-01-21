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
        <div id="menu-ativo">0</div>           

        <!--codigo do projeto(parte01)--> 
        <header class="header" id="header">
            
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

                        <form class="form-inline ajax-form" id="formFormularioEntrar" method="post">
                            <div class="row">
                                <div class="col-sm-4 form-group mt-3">                                    
                                    <label for="cpf" class="visually-hidden">CPF</label>
                                    <input id="cpf" type="text" class="form-control" maxlength="15" name="cpf" placeholder="CPF" onkeydown="javascript: fMasc( this, mCPF );">   
                                </div>
                                <div class="col-sm-4 form-group mt-3">
                                    <label for="password" class="visually-hidden">Senha</label>
                                    <input id="password" type="password" class="form-control" maxlength="255" name="password" placeholder="Senha">                              
                                </div>
                                <div class="col-sm-4 form-group mt-3 text-center">     
                                    <input type="hidden" name="identificador" value="form_FormularioEntrar">       <!--campos ocultos para servir de referencia-->
                                    <input type="submit" name="acao" value="Entrar">
                                </div>                                
                            </div>                            

                        </form>                   

                    </div>
                </div>
            </div>

            <div class="clear"></div><!--limpa flutuações-->

        </header><!--header-->

        <!--codigo do projeto(parte02)-->
        <section class="leaf-quite-first" id="leaf-quite-first">

            <div class="container">

                <div class="box-content"> 
                    <div class="box-text">
                        <h2>Entre Neste Mundo</h2>                               
                        <div class="text-ccenter"> 
                            <form class="form-inline ajax-form" id="formFormularioCadastrar" method="post">
                                <div class="form-group mt-3">   
                                    <input type="hidden" name="identificador" value="form_FormularioCadastrar">       <!--campos ocultos para servir de referencia-->                                              
                                    <input type="submit" name="acao" value="Cadastra-se">                                
                                </div>                                
                            </form>
                        </div>
                    </div><!--box-text-->
                </div><!--box-content-->                

                <div class="clear"></div><!--limpa flutuações-->

            </div><!--container-->

            <div class="clear"></div><!--limpa flutuações-->
            
        </section><!--hero-->

        <!--codigo do projeto(parte03)-->
        <section id="leaf-quite-second" class="leaf-quite-second section-bg">
            <div class="container"> 

                <div class="row">
                    <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch">-->  
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="<?php echo INCLUDE_PATH; ?>img/imagem04.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">web design</h5>
                                <div class="linha-horizontal"></div>
                                <div class="card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend auctor sapien. Integer blandit rhoncus leo, at sodales justo. Etiam dignissim lectus vel viverra lobortis. Sed id ipsum neque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch">--> 
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="<?php echo INCLUDE_PATH; ?>img/imagem03.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">graphic design</h5>
                                <div class="linha-horizontal"></div>                                
                                <div class="card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend auctor sapien. Integer blandit rhoncus leo, at sodales justo. Etiam dignissim lectus vel viverra lobortis. Sed id ipsum neque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch">-->
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="<?php echo INCLUDE_PATH; ?>img/imagem05.png" class="card-img-top" alt="...">
                            <div class="card-body">                                
                                <h5 class="card-title">programming</h5>
                                <div class="linha-horizontal"></div>
                                <div class="card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend auctor sapien. Integer blandit rhoncus leo, at sodales justo. Etiam dignissim lectus vel viverra lobortis. Sed id ipsum neque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-md-6 d-flex align-items-stretch">--> 
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="<?php echo INCLUDE_PATH; ?>img/imagem06.png" class="card-img-top" alt="...">
                            <div class="card-body">                                
                                <h5 class="card-title">photography</h5>
                                <div class="linha-horizontal"></div>
                                <div class="card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend auctor sapien. Integer blandit rhoncus leo, at sodales justo. Etiam dignissim lectus vel viverra lobortis. Sed id ipsum neque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="clear"></div><!--limpa flutuações-->

            </div>
        </section><!--leaf-quite-second--> 

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