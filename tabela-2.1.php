<?php

  function T( $T )
  {
    echo "<pre>";
    var_dump( $T );
    echo "</pre>";
  }
  function Porcentagem( $NUMBER )
  {     
    if ( strlen( $NUMBER ) > 3 ) {
      return $NUMBER . "%";
    } else {
      return '';
    }
  }
  function ToReral( $NUMBER )
  {     
    if ( strlen( $NUMBER ) > 3 ) {
      return number_format( ( float ) $NUMBER, 2, ',', '.' );
    } else {
      return '';
    }
  }
  function TRS( $ARR )
  {
    $col = "";
    foreach ($ARR as $v) 
    {
      $col .= "<td>{$v}</td> \r\n";
    }
    return "<tr> \r\n {$col} </tr> \r\n";
  }
  function Formata ( $ARR )
  {
    $ARR[2]  =  Porcentagem( $ARR[2] );
    $ARR[3]  =  Porcentagem( $ARR[3] );
    $ARR[4]  =  Porcentagem( $ARR[4] );
    $ARR[5]  =  Porcentagem( $ARR[5] );
    $ARR[6]  =  Porcentagem( $ARR[6] );
    $ARR[7]  =  Porcentagem( $ARR[7] );
    $ARR[8]  =  Porcentagem( $ARR[8] );
    $ARR[9]  = ToReral( $ARR[9] );
    $ARR[10] = ToReral( $ARR[10] );
    unset( $ARR[11] );
    return $ARR;
  }
  $quotas = file ( __DIR__ . '/../../uploads/graficos/quotas-2.csv' );
  unset( $quotas[7] );
  unset( $quotas[2] );
  $quotas = array_filter( $quotas, function ( $E ) {
      return strlen( $E ) > 30 ;      
  } );
  $trs = ""; 
  foreach( $quotas as $k =>  $v )
  {
    $array      = explode( ";", $v );
    $array      = Formata ( $array );
    $quotas[$k] = $array;
    $trs .= TRS( $array );
  }
  $br = "
    <tr id=\"sos_table_title\">
      <td> Fundos </td>
      <td> Cota 02/05 </td>
      <td> Dia </td>
      <td> Mes </td>
      <td> Ano </td>
      <td> 12 Meses </td>
      <td> 24 Meses </td>
      <td> 36 Meses </td>
      <td> Inicio </td>
      <td> PL (R$) </td>
      <td> PL 12M (R$)</td>
      <td> </td>
    
    </tr>
  ";
  $en = "
    <tr id=\"sos_table_title\">
      <td> FUND </td>
      <td> NAV/Share 05/02 </td>
      <td> DAY </td>
      <td> MONTH </td>
      <td> YTD </td>
      <td> 12 MONTHS </td>
      <td> 24 MONTHS</td>
      <td> 36 MONTHS</td>
      <td> SINCE INCEPTION </td>
      <td> NAV(R$) </td>
      <td> NAV 12M (R$) </td>      
    </tr>
  ";
?>
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
    width: 240% !important;
  }
  [class*="sos_col_"]:not(.sos_col_1) {
      text-align: center !important;
  }    
</style>
<table id="sos_table" class="tablepress tablepress-id-1">
  <?= (   empty ( $_GET['lang'] ) ) ? $br : ""  ?>
  <?= ( ! empty ( $_GET['lang'] ) ) ? $en : ""  ?>
  <?= $trs ?>
</table>
