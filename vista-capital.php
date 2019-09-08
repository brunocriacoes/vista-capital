<?php defined( 'ABSPATH' ) or die( 'area restrita' );

    /*
        Plugin Name: SOS GRAPH -
        Plugin URI: http:/solucaosites.com.br/
        Description: Plugin para upload de csv, para geração de graficos
        Author: Bruno Vieira
        Version: 1.2
        Author URI: http:/solucaosites.com.br/
    */

    require __DIR__ . "/core/bootstrap.php";

    function sos_view_menu ()
    {
    add_menu_page(
        "Relatorios",
        "ADD CSV",
        "manage_options",
        "vista-capital/index.php",
        "",
        "dashicons-chart-bar",
        7
    );
    }
    add_action ( 'admin_menu', 'sos_view_menu');

    
