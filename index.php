<?php 
    // include __DIR__ . "/core/bootstrap.php";
    echo "<style>";
    include __DIR__ . "/src/css/style.css";
    echo "</style>";
    $show = ! empty( $_REQUEST['sos-save'] ) ? 'block' : 'none';
?>

<div class="warp">

    <div class="alerta_sisten" style="display: <?= $show ?> ">
        <span class="dashicons dashicons-warning"></span>
        Salvo com sucesso.
    </div>

    <?php
        if( ! empty( $GLOBALS['error'] ) ) 
        {
            var_dump( $GLOBALS['error'] );
        }
    ?>

    <h1>Relatorios</h1>

    <p>
        <strong>Informações importantes</strong>
        O uploads de arquivo para gerar os  Relatorios,
        devem ser necessariamente no formato (<b>*.csv</b>)    
    </p>

    <h1>Tabela</h1>

    <div class="homologados">

        <div class="card_box">
            <strong>Tabela inicio</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode 
                <b> [sos-tabela name="tabela-prod"] </b> ou em homologação 
                <b> [sos-tabela name="tabela-dev"] </b>
            </p>
            <div class="pareado">
                <label for="tabela-prod" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="tabela-dev" class="btn_sisten btn_sisten_omo">
                    <span class="dashicons dashicons-upload"></span>
                    HOMOLOGAÇÃO
                </label>
            </div>
        </div>
    
    </div>

    <h1>Botão Apresentação</h1>

    <div class="apresentacao">

        <div class="card_box">
            <strong>VISTA FIA</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode <br>
                <b> [pdf name="fia"] </b>
            </p>
            <label for="pdf-fia" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>
        
        <div class="card_box">
            <strong>VISTA MULTIESTRATÉGIA FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode <br>
                <b> [pdf name="multi"] </b>
            </p>
            <label for="pdf-multi" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>

        <div class="card_box">
            <strong>VISTA HEDGE FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode <br>
                <b> [pdf name="hedge"] </b>
            </p>
            <label for="pdf-hedge" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>

        <div class="card_box">
            <strong>BRAZIL OPPORTUNITIES FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode <br>
                <b> [pdf name="brasil"] </b>
            </p>
            <label for="pdf-brasil" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>

    </div>

    <h1>Gráficos</h1>

    <div class="homologados">

        <div class="card_box">
            <strong>VISTA FIA</strong>
            <p> Última atualização <b><?= dateUpdate('sos-fia') ?></b> </p>
            <p>
                para usar adicione o shortcode 
                <b> [graph name="fia-prod"] </b> ou em homologação 
                <b> [graph name="fia-dev"] </b>
            </p>
            <div class="pareado">
                <label for="graf-fia-prod" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="graf-fia-dev" class="btn_sisten btn_sisten_omo">
                    <span class="dashicons dashicons-upload"></span>
                    HOMOLOGAÇÃO
                </label>
            </div>
        </div>
        
        <div class="card_box">
            <strong>VISTA MULTIESTRATÉGIA FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode 
                <b> [graph name="multi-prod"] </b> ou em homologação 
                <b> [graph name="multi-dev"] </b>
            </p>
            <div class="pareado">
                <label for="graf-multi-prod" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="graf-multi-dev" class="btn_sisten btn_sisten_omo">
                    <span class="dashicons dashicons-upload"></span>
                    HOMOLOGAÇÃO
                </label>
            </div>
        </div>

        <div class="card_box">
            <strong>VISTA HEDGE FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode 
                <b> [graph name="hedge-prod"] </b> ou em homologação 
                <b> [graph name="hedge-dev"] </b>
            </p>
            <div class="pareado">
                <label for="graf-hedge-prod" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="graf-hedge-dev" class="btn_sisten btn_sisten_omo">
                    <span class="dashicons dashicons-upload"></span>
                    HOMOLOGAÇÃO
                </label>
            </div>
        </div>

        <div class="card_box">
            <strong>BRAZIL OPPORTUNITIES FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode 
                <b> [graph name="brasil-prod"] </b> ou em homologação 
                <b> [graph name="brasil-dev"] </b>
            </p>
            <div class="pareado">
                <label for="graf-brasil-prod" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="graf-brasil-dev" class="btn_sisten btn_sisten_omo">
                    <span class="dashicons dashicons-upload"></span>
                    HOMOLOGAÇÃO
                </label>
            </div>
        </div>

    </div>

    <form action="" method="post" enctype="multipart/form-data">

        <label for="sos-save" class="btn_sisten btn_sisten_save">
            <span class="dashicons dashicons-yes-alt"></span>
            SALVAR
        </label>

        <input type="submit" id="sos-save" name="sos-save"  value="ok" hidden>
        
        <input type="file" name="tabela-prod" id="tabela-prod" hidden>
        <input type="file" name="tabela-dev" id="tabela-dev" hidden>

        <input type="file" name="pdf-fia" id="pdf-fia" hidden>
        <input type="file" name="pdf-multi" id="pdf-multi" hidden>
        <input type="file" name="pdf-hedge" id="pdf-hedge" hidden>
        <input type="file" name="pdf-brasil" id="pdf-brasil" hidden>

        <input type="file" name="graf-fia-prod" id="graf-fia-prod" hidden>
        <input type="file" name="graf-multi-prod" id="graf-multi-prod" hidden>
        <input type="file" name="graf-hedge-prod" id="graf-hedge-prod" hidden>
        <input type="file" name="graf-brasil-prod" id="graf-brasil-prod" hidden>

        <input type="file" name="graf-fia-dev" id="graf-fia-dev" hidden>
        <input type="file" name="graf-multi-dev" id="graf-multi-dev" hidden>
        <input type="file" name="graf-hedge-dev" id="graf-hedge-dev" hidden>
        <input type="file" name="graf-brasil-dev" id="graf-brasil-dev" hidden>
        

    </form>
</div>
