<?php

    function translate( $termo )
    {
        $lang = $_REQUEST['lang'] ?? '';

        if( empty( $lang ) ) return $termo;

        $file_name = __DIR__ . "/../src/lang/{$lang }.json";

        $json = [];

        if( file_exists( $file_name ) ) 
        {
            $json = file_get_contents( $file_name );
            $json = json_decode( $json );
        }

        foreach( $json as $text )
        {
            if( strtolower( $text->base ) == strtolower( $termo ) ) return $text->translate;
        }

        return $termo;
    }

