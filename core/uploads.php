<?php

    $dir_base = __DIR__ . "/../../uploads/graficos";

    if( ! file_exists( $dir_base ) )
    {
        mkdir( $dir_base, 0777, true );
    }
    
    saveTabela( 'tabela-prod' );
    saveTabela( 'tabela-dev' );

    savePdf( 'pdf-fia' );
    savePdf( 'pdf-multi' );
    savePdf( 'pdf-hedge' );
    savePdf( 'pdf-brasil' );

    saveGrafico( 'graf-fia-prod' );
    saveGrafico( 'graf-multi-prod' );
    saveGrafico( 'graf-hedge-prod' );
    saveGrafico( 'graf-brasil-prod' );

    saveGrafico( 'graf-fia-dev' );
    saveGrafico( 'graf-multi-dev' );
    saveGrafico( 'graf-hedge-dev' );
    saveGrafico( 'graf-brasil-dev' );

    