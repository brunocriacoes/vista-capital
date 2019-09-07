  <style>

    #sos_table{

      padding: 15px;

      font-family: sans-serif;

      font-size: 11px;

      margin: 0 auto;

      width: 100%;

      border: 0;

    }

    #sos_table td {

      padding: 8px 16px;

      color: #242424;

      font-weight: normal;

      font-size: 12px;

      text-align: left;

    }

    #sos_table_title{

      color: #caa379;

      text-transform: uppercase;

      font-size: 14px;

      border-bottom: 1px solid #ddd;

    }

    #sos_table_title td {

      color: #caa379 !important;

      text-transform: uppercase;

      font-size: 14px;

      font-weight: bold !important;

      font-size: 13px;

      text-align: left;

    }

    .sos_table_row_8 {

        border-top: 1px solid #ddd;

    }

  

    td.sos_col_1 {

      text-align: left;

      /* width: 200px !important; */

      width: 240% !important;

    }

    [class*="sos_col_"]:not(.sos_col_1) {

        text-align: center !important;

    }

    

    

  </style> 

  <?php

    $quotas = file ( __DIR__ . '/../../uploads/graficos/quotas.csv' );

    $tabela = [];

    foreach ( $quotas as $coluna => $linha ) :

      $linhas     = explode ( ";", $linha );

      $linhas[1]  = str_replace ( ',', '.', $linhas[1] );

      $linhas[2]  = ( strlen ( $linhas[2] ) > 3 AND $coluna != 2 AND $coluna != 7  ) ? number_format ( $linhas[2], 2, '.', ',' ) . '%' : $linhas[2];

      $linhas[3]  = ( strlen ( $linhas[3] ) > 3 AND $coluna != 2 AND $coluna != 7  ) ? number_format ( $linhas[3], 2, '.', ',' ) . '%' : $linhas[3];

      $linhas[4]  = ( strlen ( $linhas[4] ) > 3 AND $coluna != 2 AND $coluna != 7  ) ? number_format ( $linhas[4], 2, '.', ',' ) . '%' : $linhas[4];

      $linhas[5]  = ( strlen ( $linhas[5] ) > 3 AND $coluna != 2 AND $coluna != 7  ) ? number_format ( $linhas[5], 2, '.', ',' ) . '%' : $linhas[5];

      $linhas[6]  = ( strlen ( $linhas[6] ) > 3 AND $coluna != 2 AND $coluna != 7  ) ? number_format ( $linhas[6], 2, '.', ',' ) . '%' : $linhas[6];

      

      $tabela[] = $linhas;

    endforeach;

    unset ($tabela[0]);

    unset ($tabela[7]);



    function bilhar ( $numero )

    {

        $numero = substr ( $numero, 0, -3);

        $numero = substr ( $numero, 0, 2 ) . ',' . substr ( $numero, 2, 3 ) . ',' . substr ( $numero, 5, 3 );

        $numero = str_replace ( ",,", "", $numero );

        return $numero;

    }



    function traduzCota ( $cota )

    {

      $cota = explode ( "|", $cota );

      if ( empty ( $_GET['lang'] ) ):

        return $cota[0];

      else:

        return $cota[1];

      endif;

    }



    $en = [

      1 => "FUND",

      2 => "",

      3 => "DAY",

      4 => "MONTH",

      5 => "YTD",

      6 => "12 MONTHS",

      7 => "SINCE INCEPTION",

      8 => "NAV(R$)",

      9 => "NAV 12M (R$)"

    ];



  ?>



  <table id="sos_table" class="tablepress tablepress-id-1">

    <?php foreach ( $tabela as $linha => $colunas ): ?>

      <tr <?= ( $linha == 2 ) ? 'id="sos_table_title"' : '' ?> class="sos_table_row_<?= $linha ?>">

        <?php if ( ! empty ( $colunas ) ) : ?>

          <?php $contaRows = 1; ?>

          <?php foreach ( $colunas as $value ): ?>

            <td class="sos_col_<?= $contaRows ?>">

              <?php if ( $contaRows > 7 AND $linha > 2 ) :?>

                <?= bilhar ( $value ) ?>

              <?php elseif ( $linha == 2 AND $contaRows == 2 ): ?>

                <?= traduzCota ( $value ) ?>

              <?php elseif ( $linha == 2 ): ?>

                <?= traduzCota ( $value . '|'. $en[$contaRows]  ) ?>

              <?php else: ?>

                <?= $value ?>

              <?php endif; ?>

            </td>

            <?php $contaRows++; ?>

          <?php endforeach; ?>

        <?php endif; ?>

      </tr>

    <?php endforeach; ?>

  </table>

  



  

  <?php

  

    echo "<pre>";

    print_r( $_SESSION );

    echo "</pre>";

    