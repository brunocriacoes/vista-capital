<?php

    $dir_base = __DIR__ . "/../../uploads/graficos";

    if( ! file_exists( $dir_base ) )
    {
        mkdir( $dir_base, 0777, true );
    }
    
    saveTabela( 'quotas' );

    savePdf( 'fim' );
    savePdf( 'sos-fia' );
    savePdf( 'homo-sos-fia' );
    savePdf( 'ls' );
    savePdf( 'vh' );

    saveGrafico( 'fim' );
    saveGrafico( 'fia' );
    saveGrafico( 'ls' );
    saveGrafico( 'vh' );
    