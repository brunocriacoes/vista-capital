<?php

    function linkBaixar( $arg )
    {
        $name      = $arg['name'] ?? 'tabela';
        $text      = $arg['text'] ?? 'BAIXAR';
        $class     = $arg['class'] ?? 'btn_baixar';
        $file_name = get_site_url() . "/wp-content/uploads/graficos/{name}.pdf";
        return "<a href=\"{$file_name}\" class=\"{$class}\"> {$text} </a>";
    }
    // [link name="" text="" class=""]
    add_shortcode( 'link', 'linkBaixar' );

    function printTabela( $arg )
    {
        $name      = $arg['name'] ?? 'tabela';
        $file      = __DIR__ . "/../{$name}.php";
        if( file_exists( $file ) ) {
            include $file; 
        }else {
            echo "tablela <b>{$name}</b> não implementada";
        }
    }
    // [sos-tabela name=""]
    add_shortcode( 'sos-tabela', 'printTabela' );

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

    add_shortcode( 'sos-multi', 'sos_multi' );
    add_shortcode( 'sos-fia', 'sos_fia' );
    add_shortcode( 'sos-ls', 'sos_ls' );
    add_shortcode( 'sos-vh', 'sos_vh' );
    