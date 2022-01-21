<?php

	//valida pagina de exibicao
	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1; 
	$porPagina = 4;	

    $conteudoNovidade = Painel::selectAll('novidade','id_novidade',($paginaAtual - 1) * $porPagina,$porPagina);
	
?>
<!--novidades-->            
<div class="box-content-novidades w100"> 

    <div class="container">

        <div class="box-novidades">                     

            <div class="section-title">
                <h2>Novidades</h2>                         
            </div>                    

            <div class="section-text"> 
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies dapibus turpis, eget pharetra massa tristique id. Nunc lobortis dapibus nisl. Cras maximus, dui id aliquet vestibulum, felis elit ultricies ligula, sed euismod nisi nisl ut nisi. Vestibulum consequat vitae risus in scelerisque.
                </p>        
            </div>

            <div class="wraper-table">

                <table>
                    <!--
                    <tr>
                        <td>Dia</td>
                        <td>Descrição</td>
                    </tr>
                    -->

                    <?php
                        //lista todos registros da variavel $categoriasPainel  
                        foreach ($conteudoNovidade as $key => $value) {
                    ?>			
                        <tr>
                            <!--validar data-->
                            <?php 
                                $day= date_create($value['novidade_data']);
                                $now = date_format($day, 'd');
                            ?>
                            <td class="coluna-novidade"><?php echo substr($now,0,10); ?></td>
                            <td class="coluna-novidade"><?php echo $value['novidade_completa']; ?></td>
                        </tr>        
                    <?php } ?>

                </table>

            </div>

            <div class="paginacao">
                <?php
                    $totalPaginas = ceil(count(Painel::selectAll('novidade','id_novidade')) / $porPagina);

                    for($i = 1; $i <= $totalPaginas; $i++){
                        if($i == $paginaAtual)
                            echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'novidadess?pagina='.$i.'">'.$i.'</a>';
                        else
                            echo '<a href="'.INCLUDE_PATH_PAINEL.'novidades?pagina='.$i.'">'.$i.'</a>';
                    }

                ?>
            </div><!--paginacao-->	


        </div>

    </div>

</div><!--box-content-novidades-->