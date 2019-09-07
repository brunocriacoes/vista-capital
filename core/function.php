<?php

    function aredondar( $numero )
    {
        $numb      = '0' == $numb ? '' : $numb;
        $isND      = 'N/D' == $numero;
        $isWhite   = empty( $numero );
        if ( $isWhite or $isND ) return $numero;

        $arr       = explode( '.', $numero );
        $inteiro   = $arr[0];
        $aredondar = substr( $arr[1], 0, 2 ) .  "." . substr( $arr[1], 2, 1 ) ;
        $aredondar = round( $aredondar );

        return "{$inteiro},{$aredondar}%";

    }

    function cota( $numero )
    {
        $numb      = '0' == $numb ? '' : $numb;
        $isND      = 'N/D' == $numero;
        $isWhite   = empty( $numero );
        if ( $isWhite or $isND ) return $numero;

        return str_replace( '.', ',', $numero );
    }

    function numbFormato( $numb ) 
    {
        $numb      = '0' == $numb ? '' : $numb;
        $isND      = 'N/D' == $numb;
        $isWhite   = empty( $numb );
        if ( $isWhite or $isND ) return $numb;

        $numb = round($numb);     
        $numb = number_format($numb,1,",",".");     
        $numb = explode(',', $numb);  

        return $numb[0]; 
    }

    function importProducao( $csv ) {
        
    }

    function importDevFromat( $string )
    {
        $arr = explode( ";", $string );
        return [
            "cota"    => cota( $arr[1] ),
            "dia"     => aredondar( $arr[2] ),
            "mes"     => aredondar( $arr[3] ),
            "ano"     => aredondar( $arr[4] ),
            "meses12" => aredondar( $arr[5] ),
            "meses24" => aredondar( $arr[6] ),
            "meses36" => aredondar( $arr[7] ),
            "inicio"  => aredondar( $arr[8] ),
            "pl"      => numbFormato( $arr[9] ),
            "pl12m"   => numbFormato( $arr[10] ),
            "plEst"   => numbFormato( $arr[11] )
        ];
    }

    function somaTotal() 
    {
        $arr  = func_get_args();
        $arr  = array_map( function( $n ) { return str_replace( '.', '', $n ); }, $arr );
        $soma = 0;
        foreach( $arr as $n )
        {
            $soma = $soma +$n;
        }
        $soma = numbFormato( $soma );
        return $soma;
    }

    function importDev( $csv ) {
        $arr  = explode( "\n", $csv );

        $data = substr( $arr[2], 12, 5 );
        $data = str_replace( '/', '-', $data );
        $arr  = array_slice( $arr, 3, 14 );

        unset( $arr[9] );
        unset( $arr[10] );
        unset( $arr[11] );
        $arr = array_values( $arr );
        
        $result = [];
        $result['multiestrategia']      = importDevFromat( $arr[0] );
        $result['cdiMultiestrategia']   = importDevFromat( $arr[1] );
        $result['hedge']                = importDevFromat( $arr[2] );
        $result['cdiHedge']             = importDevFromat( $arr[3] );
        $result['fia']                  = importDevFromat( $arr[4] );
        $result['longBiased']           = importDevFromat( $arr[8] );
        $result['ibx']                  = importDevFromat( $arr[9] );
        $result['cdi']                  = importDevFromat( $arr[10] );
        $result['info']                 = [
            "total" => somaTotal( $result['multiestrategia']['pl'], $result['hedge']['pl'], $result['fia']['pl'], $result['longBiased']['pl'] ),
            "data" => $data
        ];

        return $result;
    }

    function getTabela( $nome ) 
    {
        $name_file = __DIR__ . "/../banco/{$nome}.json";
        if( file_exists( $name_file ) )
        {
            $json = file_get_contents( $name_file );
            $json = json_decode( $json );
            return $json;
        }
        return [];
    }

    function linhaCorrida( $obj ) 
    {
        $arr      = (array) $obj;
        $valores  = array_values( $arr );
        $aplyHtml = array_map( function( $texto ) { return "<td>{$texto}</td>"; }, $valores );
        $html     = implode( '', $aplyHtml );
        return $html; 
    }

    function saveGrafico( $name )
    {
        $dir_base  = __DIR__ . "/../../../uploads/graficos";
        $file_name = $dir_base . "/{$name}.csv";
        if ( ! empty ( $_FILES[$name]['tmp_name'] ) )
        {
            copy( $_FILES[$name]['tmp_name'], $file_name );
            setUpdate( $nome );
        }    
    }

    function saveTabela( $name )
    {
        $dir_base  = __DIR__ . "/../../../uploads/graficos";
        $file_name = $dir_base . "/{$name}.json";
        if ( ! empty ( $_FILES[$name]['tmp_name'] ) )
        {
            $file = file_get_contents( $_FILES[$name]['tmp_name'] );
            $json = importDev( $csv );
            file_put_contents( $file_name, json_encode( $json ) );
            setUpdate( $nome );
        }    
    }

    function savePdf( $name )
    {
        $dir_base  =  __DIR__ ."/../../../uploads/graficos";
        $file_name = $dir_base . "/{$name}.pdf";
        if ( ! empty ( $_FILES[$name]['tmp_name'] ) )
        {
            move_uploaded_file( $_FILES[$name]['tmp_name'], $file_name );
            setUpdate( $nome );
        }    
    }

    function setUpdate( $nome ) 
    {
        $dir_base  = "../../../../uploads/graficos";
        $json      = (object) []; 
        $file_name = $dir_base . "/update.json";
        if( file_exists( $file_name ) ) 
        {
            $json = file_get_contents( $file_name );
            $json = json_decode( $json );
        }
        $json->{$nome} = date('d/m/Y');
        // file_put_contents( $file_name, json_encode( $file_name ) );
        return true;
    }

    function dateUpdate( $nome ) {
        $dir_base  = __DIR__ . "/../../../uploads/graficos";
        $json      = (object) []; 
        $file_name = $dir_base . "/update.json";
        if( file_exists( $file_name ) ) 
        {
            $json = file_get_contents( $file_name );
            $json = json_decode( $json );
        }
        return $json->{$nome} ?? "18/09/1987";
    }


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
    