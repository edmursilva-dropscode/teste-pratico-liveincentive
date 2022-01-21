<!--cadastro de usuarios-->             
<div class="box-content-cadastro w100"> 

    <div class="container">

        <div class="box-cadastro">                     

            <div class="section-title">
                <h2>Cadastro</h2>                         
            </div>                    

            <div class="row justify-content-center">              

                <div class="php-cadastro-form">                            

                    <div class="row"> 
                        
                        <form class="ajax-form" id="formFormularioCadastro" method="post">

                            <div class="form-group mt-3">
                                <label class="form-check-label mr-2 col-form-label" for="nome"><b>Nome</b></label>
                                <input id="nome" type="text" class="form-control" maxlength="255" name="nome" >
                            </div>           
                            <div class="form-group mt-3">
                                <label class="form-check-label mr-2 col-form-label" for="cpf"><b>Cpf</b></label>                                    
                                <input id="cpf" type="text" class="form-control" maxlength="15" name="cpf" onkeydown="javascript: fMasc( this, mCPF );">   
                            </div>                            
                            <div class="form-group mt-3">
                                <label class="form-check-label mr-2 col-form-label" for="email"><b>Email</b></label>                                    
                                <input id="email" type="text" class="form-control" maxlength="255" name="email">   
                            </div>                            
                            <div class="form-group mt-3">
                                <label class="form-check-label mr-2 col-form-label" for="dtnascto"><b>Data de nascimento</b></label>                                    
                                <input id="dtnascto" type="text" class="form-control" maxlength="10" name="dtnascto" onkeydown="javascript: fMasc( this, mDATA );">   
                            </div>                              
                            <div class="form-group">
                                <label class="form-check-label mr-2 col-form-label" for="password"><b>Senha</b></label>                                    
                                <input id="password" type="password" class="form-control" maxlength="255" name="password" autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label class="form-check-label mr-2 col-form-label" for="validpassword"><b>Confirmar senha</b></label>                                    
                                <input id="validpassword" type="password" class="form-control" maxlength="255" name="validpassword" autocomplete="off" >
                            </div>
                            <div class="form-group mt-3">
                                <div class="text-end">     
                                    <input type="hidden" name="identificador" value="form_FormularioCadastro">           <!--campos ocultos para servir de referencia-->
                                    <input type="submit" name="acao" value="Salvar">
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div><!--box-content-cadastro-->
