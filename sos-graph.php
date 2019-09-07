<?php defined( 'ABSPATH' ) or die( 'area restrita' );

    /*
    Plugin Name: SOS GRAPH
    Plugin URI: http:/solucaosites.com.br/
    Description: Plugin para upload de csv, para geração de graficos
    Author: Bruno Vieira
    Version: 1.1
    Author URI: http:/solucaosites.com.br/
    */

    // doc
    // icones https://developer.wordpress.org/resource/dashicons/#chart-bar

    require __DIR__ . "/core/bootstrap.php";

    function sos_view_menu ()
    {
    add_menu_page(
        "Relatorios",
        "ADD CSV",
        "manage_options",
        "sos-graph/index.php",
        "",
        "dashicons-chart-bar",
        7
    );
    }
    add_action ( 'admin_menu', 'sos_view_menu');

    
