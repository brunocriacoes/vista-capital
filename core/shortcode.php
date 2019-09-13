<?php

    function linkBaixar( $arg )
    {
        $name      = $arg['name'] ?? 'tabela';
        $text      = $arg['text'] ?? 'BAIXAR';
        $class     = $arg['class'] ?? 'btn_baixar';
        $file_name = get_site_url() . "/wp-content/uploads/graficos/pdf-{$name}.pdf";
        return "<a style=\"
        color: rgb(255, 255, 255);
        border-color: rgb(125, 106, 69);
        border-radius: 3px;
        background-color: rgb(125, 106, 69);
        \" href=\"{$file_name}\" class=\"qbutton.small qbutton.center qbutton botoes {$class}\" download> {$text}
        <i class=\"qode_icon_font_awesome fa fa-download qode_button_icon_element\"></i>
        </a>";
    }
    // [sos-pdf name="" text="" class=""]
    add_shortcode( 'pdf', 'linkBaixar' );

    function printTabela( $arg )
    {
        ob_start();
        $name      = $arg['name'] ?? 'tabela-prod';
        $file      = __DIR__ . "/../{$name}.php";
        if( file_exists( $file ) ) {
            include $file; 
        }else {
            return "tablela <b>{$name}</b> não implementada";
        }
        return ob_get_clean();
    }
    // [sos-tabela name=""]
    add_shortcode( 'sos-tabela', 'printTabela' );

    function printGrafico( $arg )
    {
        $name      = $arg['name'] ?? 'graf';
        return grafico( __DIR__ . "/../../../uploads/graficos/graf-{$name}.csv", $arg );
    }
    // [graph name="" acumulado="" cota="" ]
    add_shortcode( 'graph', 'printGrafico' );
