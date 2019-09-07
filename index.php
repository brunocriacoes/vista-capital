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

    <div class="card_box" >
        <?php var_dump( $GLOBALS['error'] ) ?>
    </div>

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
                <b> [sos-tabela] </b> ou em homologação 
                <b> [homo-sos-tabela] </b>
            </p>
            <div class="pareado">
                <label for="sos-tabela" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="homo-sos-tabela" class="btn_sisten btn_sisten_omo">
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
                <b> [baixar-fia] </b>
            </p>
            <label for="baixar-fia" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>
        
        <div class="card_box">
            <strong>VISTA MULTIESTRATÉGIA FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode <br>
                <b> [baixar-multi] </b>
            </p>
            <label for="baixar-multi" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>

        <div class="card_box">
            <strong>VISTA HEDGE FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode <br>
                <b> [baixar-hedge] </b>
            </p>
            <label for="baixar-hedge" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>

        <div class="card_box">
            <strong>BRAZIL OPPORTUNITIES FIM</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode <br>
                <b> [baixar-brasil] </b>
            </p>
            <label for="baixar-brasil" class="btn_sisten">
                <span class="dashicons dashicons-upload"></span>
                UPLOAD
            </label>
        </div>

    </div>

    <h1>Gráficos</h1>

    <div class="homologados">

        <div class="card_box">
            <strong>VISTA FIA</strong>
            <p> Última atualização <b><?= dateUpdate('') ?></b> </p>
            <p>
                para usar adicione o shortcode 
                <b> [sos-fia] </b> ou em homologação 
                <b> [homo-sos-fia] </b>
            </p>
            <div class="pareado">
                <label for="sos-fia" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="homo-sos-fia" class="btn_sisten btn_sisten_omo">
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
                <b> [sos-ls] </b> ou em homologação 
                <b> [homo-sos-ls] </b>
            </p>
            <div class="pareado">
                <label for="sos-ls" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="homo-sos-ls" class="btn_sisten btn_sisten_omo">
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
                <b> [sos-vh] </b> ou em homologação 
                <b> [homo-sos-vh] </b>
            </p>
            <div class="pareado">
                <label for="sos-vh" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="homo-sos-vh" class="btn_sisten btn_sisten_omo">
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
                <b> [sos-brasil] </b> ou em homologação 
                <b> [homo-sos-brasil] </b>
            </p>
            <div class="pareado">
                <label for="sos-brasil" class="btn_sisten">
                    <span class="dashicons dashicons-upload"></span>
                    PRODUÇÃO                   
                </label>
                <label for="homo-sos-brasil" class="btn_sisten btn_sisten_omo">
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
        
        <input type="file" name="sos-tabela" id="sos-tabela" hidden>
        <input type="file" name="homo-sos-tabela" id="homo-sos-tabela" hidden>

        <input type="file" name="baixar-fia" id="baixar-fia" hidden>
        <input type="file" name="baixar-multi" id="baixar-multi" hidden>
        <input type="file" name="baixar-hedge" id="baixar-hedge" hidden>
        <input type="file" name="baixar-brasil" id="baixar-brasil" hidden>

        <input type="file" name="sos-fia" id="sos-fia" hidden>
        <input type="file" name="homo-sos-fia" id="homo-sos-fia" hidden>

        <input type="file" name="sos-vh" id="sos-vh" hidden>
        <input type="file" name="homo-sos-vh" id="homo-sos-vh" hidden>

        <input type="file" name="sos-brasil" id="sos-brasil" hidden>
        <input type="file" name="homo-sos-brasil" id="homo-sos-brasil" hidden>

        <input type="file" name="sos-ls" id="sos-ls" hidden>
        <input type="file" name="homo-sos-ls" id="homo-sos-ls" hidden>

    </form>
</div>
