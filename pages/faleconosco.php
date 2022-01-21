<!--envio de email-->            
<div class="box-content-faleconosco w100"> 

    <div class="container">

        <div class="box-faleconosco">                     

            <div class="section-title">
                <h2>Fale conosco</h2>                         
            </div>                    

            <div class="section-text"> 
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies dapibus turpis, eget pharetra massa tristique id. Nunc lobortis dapibus nisl. Cras maximus, dui id aliquet vestibulum, felis elit ultricies ligula, sed euismod nisi nisl ut nisi. Vestibulum consequat vitae risus in scelerisque.
                </p>        
            </div>

            <div class="row justify-content-center">              
            
                <div class="php-email-form">

                    <div class="row">
                    
                        <form class="ajax-form" id="formFormularioFaleConosco" method="post">

                            <div class="row">
                                <div class="col-md-6 form-group">
                                <label class="form-check-label mr-2 col-form-label" for="nome"><b>Nome</b></label>
                                    <input id="name" type="text" class="form-control" name="name">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label class="form-check-label mr-2 col-form-label" for="email"><b>Email</b></label>
                                    <input id="email" type="email" class="form-control" maxlength="255" name="email">
                                </div>
                            </div>                        

                            <div class="form-group mt-3">
                                <label class="form-check-label mr-2 col-form-label" for="nessage"><b>Mensagem</b></label>
                                <textarea id="message" class="form-control" name="message" maxlength="1000" rows="5"></textarea>
                            </div>

                            <div class="text-end">     
                                <input type="hidden" name="identificador" value="form_FormularioFaleConosco">       <!--campos ocultos para servir de referencia-->
                                <input type="submit" name="acao" value="Enviar">
                            </div>

                        </form> 

                    </div> 

                </div>

            </div>

        </div>

    </div>

</div><!--box-content-faleconosco-->
