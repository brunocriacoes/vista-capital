<?php
  $updateJson = '
    {
      "table" : "18/09/1987",
      "ls" : "18/09/1987",
      "fia" : "18/09/1987",
      "multi" : "18/09/1987"
    }
  ';
  if ( ! file_exists ( '../wp-content/uploads/' ) ) mkdir('../wp-content/uploads/');
  if ( ! file_exists ( '../wp-content/uploads/graficos/' ) ) mkdir('../wp-content/uploads/graficos/');
  if ( ! file_exists ( '../wp-content/uploads/graficos/update.json' ) ) file_put_contents ( '../wp-content/uploads/graficos/update.json', $updateJson );
  
  $update = file_get_contents ( '../wp-content/uploads/graficos/update.json' );
  $update = json_decode ( $update );


  if ( ! empty ( $_FILES['quotas']['tmp_name'] ) ) :
    copy( $_FILES['quotas']['tmp_name'], '../wp-content/uploads/graficos/quotas.csv' );
    $update->table = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;

  if ( ! empty ( $_FILES['quotas-4']['tmp_name'] ) ) :
    copy( $_FILES['quotas-4']['tmp_name'], '../wp-content/uploads/graficos/quotes-4.csv' );
    $update->table_4 = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;

  if ( ! empty ( $_FILES['quotas-3']['tmp_name'] ) ) :
    copy( $_FILES['quotas-3']['tmp_name'], '../wp-content/uploads/graficos/quotas-3.csv' );
    $update->table_3 = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;

  if ( ! empty ( $_FILES['quotas-2']['tmp_name'] ) ) :
    copy( $_FILES['quotas-2']['tmp_name'], '../wp-content/uploads/graficos/quotas-2.csv' );
    $update->table_2 = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;
  
  if ( ! empty ( $_FILES['fim']['tmp_name'] ) ) :
    copy( $_FILES['fim']['tmp_name'], '../wp-content/uploads/graficos/fim.csv' );
    $update->multi = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;
  
  if ( ! empty ( $_FILES['fia']['tmp_name'] ) ) :
    copy( $_FILES['fia']['tmp_name'], '../wp-content/uploads/graficos/fia.csv' );
    $update->fia = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;
  
  if ( ! empty ( $_FILES['ls']['tmp_name'] ) ) :
    copy( $_FILES['ls']['tmp_name'], '../wp-content/uploads/graficos/ls.csv' );
    $update->ls = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;

  if ( ! empty ( $_FILES['vh']['tmp_name'] ) ) :
    copy( $_FILES['vh']['tmp_name'], '../wp-content/uploads/graficos/vh.csv' );
    $update->vh = date ( 'd/m/Y' );
    file_put_contents ( '../wp-content/uploads/graficos/update.json', json_encode ( $update ) );
  endif;


  

?>
<div class="warp">
  <h1>Relatorios</h1>
  <form action="" method="post" enctype="multipart/form-data">

    <div class="card">
      <br>
      <strong>Informações importantes</strong>
      <br>
      <br>
      O uploads de arquivo para gerar os gráficos de Relatorios,
      tem que ser necessariamente no formato (<b>*.csv</b>), no
      arquivo de conter somente as linhas com os dados.
      <br>
      <br>
      para usar o gráfico basta colocar o <b>short code</b> onde você
      deseja que aparece o grafico.
      <br>
      <br>
    </div>

    <!-- <div class="card">
      <label for="quotas-2" class="button">Upload</label>
      Quotas: [sos-table-2] <strong> <?= $update->table_2 ?></strong>
    </div> -->
		
    <div class="card">
      <label for="quotas-3" class="button">Upload</label>
      Quotas: [sos-table-3] <strong> <?= $update->table_3 ?></strong>
    </div>
		
    <div class="card">
      <label for="quotas-4" class="button">Upload</label>
      Quotas: [sos-table-4] <strong> <?= $update->table_3 ?> (em homologação)</strong>
    </div>
		

    <div class="card">
      <label for="fim" class="button">Upload</label>
      Vista Multiestrategia FIM: [sos-mult] <strong> <?= $update->multi ?></strong>
    </div>

    <div class="card">
      <label for="fia" class="button">Upload</label>
      Vista FIA: [sos-fia] <strong> <?= $update->fia ?></strong>
    </div>

    <div class="card">
      <label for="ls" class="button">Upload</label>
      Vista LS FIM: [sos-ls] <strong> <?= $update->ls ?></strong>
    </div>

    <div class="card">
      <label for="vh" class="button">Upload</label>
      VISTA HEDGE: [sos-vh] <strong> <?= $update->ls ?></strong>
    </div>

    <input type="file" name="quotas-4" id="quotas-4"  style="display:none"/>
    <input type="file" name="quotas-3" id="quotas-3"  style="display:none"/>
    <input type="file" name="quotas-2" id="quotas-2"  style="display:none"/>
    <input type="file" name="quotas" id="quotas"  style="display:none"/>
    <input type="file" name="fim" id="fim"  style="display:none"/>
    <input type="file" name="fia" id="fia"  style="display:none"/>
    <input type="file" name="ls" id="ls"  style="display:none"/>
    <input type="file" name="vh" id="vh"  style="display:none"/>

    <br>
    <input type="submit" class="button button-primary" value="Salvar">

  </form>
</div>
