<?php defined( 'ABSPATH' ) or die( 'area restrita' );

  /*
  Plugin Name: SOS GRAPH
  Plugin URI: http:/solucaosites.com.br/
  Description: Plugin para upload de csv, para geração de graficos
  Author: Bruno Vieira
  Version: 1.0
  Author URI: http:/solucaosites.com.br/
  */

  function sos_view_menu ()
  {
    add_menu_page(
      "Relatorios",
      "ADD CSV",
      "manage_options",
      "sos-graph/index.php",
      "",
      plugins_url( "sos-graph/img/ico.png" ),
      7
    );
  }
  add_action ( 'admin_menu', 'sos_view_menu');


  function grafico( $arquivo = 'csv/fia.csv', $array ) 
  {
    $acumuado = ( empty ( $array['acumulado'] ) ) ? "acumulado" : $array['acumulado'];
    $cota     = ( empty ( $array['cota'] ) ) ? "cota" : $array['cota'];
    $m = file ( $arquivo );
    foreach ( $m as $indice =>  $linha ) :
      if ( $indice ) :
        $linha   = str_replace ( ",", ".", $linha );
        $linhas  = explode ( ";", $linha );
        $data = $linhas[0];
        $data = date_create($data);
        $data = date_format($data, 'M-y');
        $linha0[]  = $data;
        $linha1[]  = ( float )$linhas[1];
        $linha2[]  = ( float )$linhas[2];
      endif;
    endforeach;
    $lib      = plugin_dir_url('soso') . 'sos-graph/src/js/Chart.bundle.js';  
    $linha0   = implode ( '", " ', $linha0 );
    $linha1   = implode ( ', ', $linha1 );
    $linha2   = implode ( ', ', $linha2 );
    $template = file_get_contents ( __DIR__ . '/grafico.tpl.php' );
    $template = str_replace ( ["{{linha0}}","{{linha1}}","{{linha2}}","{{lib}}", "{{acumuado}}", "{{cota}}"], [$linha0, $linha1, $linha2, $lib, $acumuado, $cota], $template );
    echo $template;
  }

  function sos_table_table( )
  {
    include __DIR__ . '/tabela.php';
  }
  function sos_table_table_2( )
  {
    include __DIR__ . '/tabela-2.php';
  }
  function sos_table_table_3( )
  {
    include __DIR__ . '/tabela-3.php';
  }
  function sos_table_table_4( )
  {
    include __DIR__ . '/tabela-4.php';
  }

  function sos_multi( $atts ) 
  {
    grafico( __DIR__ . '/../../uploads/graficos/fim.csv', $atts );
  }
  function sos_fia( $atts ) 
  {
    grafico( __DIR__ . '/../../uploads/graficos/fia.csv', $atts ); 
  }

  function sos_ls( $atts ) 
  {
    grafico( __DIR__ .  '/../../uploads/graficos/ls.csv', $atts ); 
  }

  function sos_vh( $atts ) 
  {
    grafico( __DIR__ .  '/../../uploads/graficos/vh.csv', $atts ); 
  }

  add_shortcode( 'sos-table-4', 'sos_table_table_4' );
  add_shortcode( 'sos-table-3', 'sos_table_table_3' );
  add_shortcode( 'sos-table-2', 'sos_table_table_2' );
  add_shortcode( 'sos-table', 'sos_table_table' );
  add_shortcode( 'sos-multi', 'sos_multi' );
  add_shortcode( 'sos-fia', 'sos_fia' );
  add_shortcode( 'sos-ls', 'sos_ls' );
  add_shortcode( 'sos-vh', 'sos_vh' );