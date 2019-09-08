<?php

    echo "<style>";
    include __DIR__ . "/src/css/style-prod.css"; 
    echo "</style>";
?>
<div>

    <span class="sos-title">

        <span class="sos-lang-pt">Cotas e indexadores</span>

        <span class="sos-lang-en">Quotas and indexers</span>

    </span>

    <span class="sos-data">

        <span class="sos-lang-pt">

            <div id="lang-pt-date">

                Data <span id="sos-dia-pt"></span>-<span id="sos-mes-pt"></span>-<span id="sos-ano-pt">

            </div>

        </span>

        <span class="sos-lang-en">Date <span id="sos-dia-en"></span>-<span id="sos-mes-en"></span>-<span id="sos-ano-en"></span>

    </span>

    <div class="table-responsive">

        <table width="100%" class="sos-table">

            <tbody>

                <tr class="sos-tr-title">

                    <td class="sos-left">

                        <span class="sos-lang-pt">Multimercado</span>

                        <span class="sos-lang-en">Macro Strategy</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Cota</span>

                        <span class="sos-lang-en">Quota</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Dia</span>

                        <span class="sos-lang-en">Day</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Mês</span>

                        <span class="sos-lang-en">Month</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Ano</span>

                        <span class="sos-lang-en">YTD</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">12 Meses</span>

                        <span class="sos-lang-en">12 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">24 Meses</span>

                        <span class="sos-lang-en">24 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">36 Meses</span>

                        <span class="sos-lang-en">36 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Início</span>

                        <span class="sos-lang-en">SINCE INCEPTION</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">PL (R$)</span>

                        <span class="sos-lang-en">NAV ($)</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">PL 12M (R$)</span>

                        <span class="sos-lang-en">NAV 12M ($)</span>

                    </td>

                </tr>

                <tr id="sos-vmf"></tr>

                <tr id="sos-vhf"></tr>

                <tr class="sos-tr-title">

                    <td class="sos-left">

                        <span class="sos-lang-pt">Renda Variável</span>

                        <span class="sos-lang-en">Equities Strategy</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Cota</span>

                        <span class="sos-lang-en">Quota</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Dia</span>

                        <span class="sos-lang-en">Day</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Mês</span>

                        <span class="sos-lang-en">Month</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Ano</span>

                        <span class="sos-lang-en">YTD</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">12 Meses</span>

                        <span class="sos-lang-en">12 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">24 Meses</span>

                        <span class="sos-lang-en">24 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">36 Meses</span>

                        <span class="sos-lang-en">36 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Início</span>

                        <span class="sos-lang-en">SINCE INCEPTION</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">PL (R$)</span>

                        <span class="sos-lang-en">NAV ($)</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">PL 12M (R$)</span>

                        <span class="sos-lang-en">NAV 12M ($)</span>

                    </td>

                </tr>

                <tr id="sos-vf"></tr>

                <tr class="sos-tr-title">

                    <td class="sos-left">

                        <span class="sos-lang-pt">Indexadores</span>

                        <span class="sos-lang-en">Indexers</span>

                    </td>

                    <td></td>

                    <td>

                        <span class="sos-lang-pt">Dia</span>

                        <span class="sos-lang-en">Day</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Mês</span>

                        <span class="sos-lang-en">Month</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">Ano</span>

                        <span class="sos-lang-en">YTD</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">12 Meses</span>

                        <span class="sos-lang-en">12 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">24 Meses</span>

                        <span class="sos-lang-en">24 Months</span>

                    </td>

                    <td>

                        <span class="sos-lang-pt">36 Meses</span>

                        <span class="sos-lang-en">36 Months</span>

                    </td>

                    <td></td>

                    <td></td>

                    <td></td>

                </tr>

                <tr id="sos-ibx"></tr>

                <tr id="sos-cdi"></tr>

            </tbody>

            <tfoot>

                <tr>

                    <td colspan="8" class="sos-legenda sos-left">

                        <!-- <span class="sos-lang-pt">

                            N/D: Fundo Vista Hedge FIM constituído em 08/05/2018. <br>

                            * A Rentabilidade na coluna "Ano" referente ao fundo

                            Vista Hedge FIM  representa a rentabilidade entre a data de

                            inicio do fundo 08/05/2018 e a data atual.

                        </span>

                        <span class="sos-lang-en">

                            N/D: Vista Hedge FIM Fund incorporated on 05/08/2018. <br>

                            * Profitability in the "Year" column for the fund

                            Vista Hedge FIM represents the profitability between the date of

                            beginning of the 08/05/2018 fund and the current date.

                        </span> -->

                    </td>

                    <td colspan="3">

                        <span class="sos-total">

                            <span class="sos-total-title sos-lang-pt">PL TOTAL (R$)</span>

                            <span class="sos-total-title sos-lang-en">NAV TOTAL ($)</span>

                            <span class="sos-total-valor" id="sos-total-valor"></span>

                        </span>

                    </td>

                </tr>

            </tfoot>

        </table>

    </div>

</div>

<script>



const domain   = window.location.hostname;

const http     = window.location.protocol;

const uri_svg  = `${http}//${domain}/wp-content/uploads/graficos/`;

const log      = console.log;

const table    = console.table;

const query    = x => document.querySelector( x );

const queryAll = x => document.querySelectorAll( x );

const resquest = window.location.search.replace('?', '').split('&').reduce( (acc, iten) => {

    let data = iten.split('=');

    acc[data[0]] = data[1] || '';

    return acc;

}, {} );

const line_number = x => {

    for( let i = 1; i < x.length; i++ ) { x[i] = +x[i]; }

    return x;

};

function round( number )

{

    if( number != '' && number != "N/D" && number != "0" ) {

        let bom = number.split('.');

        let dois = bom[1].substr(1, 1);

        let tres = bom[1].substr(2, 1);

        let redondo = +dois + 1;

        if( tres < 5 ) {

            redondo = dois;

        }

        return `${bom[0]},${bom[1].substr(0, 1)}${redondo}%`;

    }

    return number;

}

function round_total( number )
{

    if( number != '' && number != "N/D" ) {

        const index = number.indexOf('.');



        return number.replace( ',', "." ).substr(0, index) + "%";

    }

    return number;

}

function formate( number )

{

    return Math.round(number).toLocaleString('pt-br', { minimumFractionDigits: 1 }).split(',')[0];

}

function nd( arr ) {

    return arr.map( x => {

        if( x == "0.000" ){

            return "N/D";

        } else {

            return x;

        }

    } );

}

function remover_porcent( arr ) {

    return arr.map( (x, i) => {

        if (i == 1 && x != '') { // COTA

            let cota = x.replace(/[^0-9]/g, '').split('');

            const firstNumber = cota[0];

            cota[0] = ',';



            return firstNumber + cota.join('');

        } else if( x == '0%' || (arr[0] == '%CDI' && x[0] == '-') ){

            return "-";

        } else {

            return x;

        }

    } );

}

function draw_linha( id, arr, cdi_array ) {

    let html =  '';

    for( let i = 0; i < arr.length; i++ ) {

        html += `

        <td>

            ${arr[i] || ''}

            <span class="sos-cdi">${cdi_array[i] || ''}</span>

        </td>`

    }

    document.querySelector( id ).innerHTML = html;

}

function get_csv( name_file ) {

    fetch( `${uri_svg}${name_file}` )

    .then( x => x.text() )

    .then( x => {

        // x = x.replace( /0.000/ig, '' );

        let csv = x.split("\n").map( x => x.split(';') ).filter( x => x[2] || '' != '' );



        let originalCSV = {

            csv19: csv[1][9],

            csv39: csv[3][9],

            csv59: csv[5][9],

            csv79: csv[7][9],

            csv110: csv[1][10],

            csv310: csv[3][10],

            csv510: csv[5][10],

            csv710: csv[7][10],

        }



        csv[1][9] = csv[1][9].replace( '.', '' );

        csv[3][9] = csv[3][9].replace( '.', '' );

        csv[5][9] = csv[5][9].replace( '.', '' );

        csv[7][9] = csv[7][9].replace( '.', '' );



        csv[1][10] = csv[1][10].replace( '.', '' );

        csv[3][10] = csv[3][10].replace( '.', '' );

        csv[5][10] = csv[5][10].replace( '.', '' );

        csv[7][10] = csv[7][10].replace( '.', '' );



        let total = +originalCSV.csv19 + +originalCSV.csv39 + +originalCSV.csv59 + +originalCSV.csv79;



        csv[1][9] = formate( +originalCSV.csv19 );

        csv[3][9] = formate( +originalCSV.csv39 );

        csv[5][9] = formate( +originalCSV.csv59 );

        csv[7][9] = formate( +originalCSV.csv79 );

        csv[1][10] = formate( +originalCSV.csv110 );

        csv[3][10] = formate( +originalCSV.csv310 );

        csv[5][10] = formate( +originalCSV.csv510 );

        csv[7][10] = formate( +originalCSV.csv710 );



        csv[1][1] = csv[1][1].replace('.', ',');

        csv[3][1] = csv[3][1].replace('.', ',');

        csv[5][1] = csv[5][1].replace('.', ',');

        csv[7][1] = csv[7][1].replace('.', ',');



        csv[1] = nd( csv[1] );

        csv[3] = nd( csv[3] );

        csv[5] = nd( csv[5] );

        csv[7] = nd( csv[7] );



        // csv[1][1] = formate( +csv[1][1] );

        // csv[3][1] = formate( +csv[3][1] );

        // csv[5][1] = formate( +csv[5][1] );

        // csv[7][1] = formate( +csv[7][1] );



        for( let i = 2; i < 9; i++) {

            let pula = i;

            csv[1][pula]  = round( csv[1][pula] );

            csv[2][pula]  = round_total( csv[2][pula] );

            csv[3][pula]  = round( csv[3][pula] );

            csv[4][pula]  = round_total( csv[4][pula] );

            csv[5][pula]  = round( csv[5][pula] );

            csv[6][pula]  = round_total( csv[6][pula] );

            csv[10][pula] = round( csv[10][pula] );

            csv[11][pula] = round( csv[11][pula] );

        }



        csv[1]  = remover_porcent( csv[1] );

        csv[2]  = remover_porcent( csv[2] );

        csv[3]  = remover_porcent( csv[3] );

        csv[4]  = remover_porcent( csv[4] );

        csv[5]  = remover_porcent( csv[5] );

        csv[6]  = remover_porcent( csv[6] );

        csv[10] = remover_porcent( csv[10] );

        csv[11] = remover_porcent( csv[11] );



        csv.push( [ formate( total ) ] );



        let dia = csv[0][1].substr( 5,2 );

        let mes = csv[0][1].substr( 8,2 );

        let ano = new Date().getFullYear().toString().substr(2, 2);



        let mes_en = {

            "1" : "Jan",

            "2" : "Feb",

            "3" : "Mar",

            "4" : "Apr",

            "5" : "May",

            "6" : "June",

            "7" : "July",

            "8" : "Aug",

            "9" : "Sept",

            "10" : "Oct",

            "11" : "Nov",

            "12" : "Dec",

        };



        let mes_pt = {

            "1" : "Jan",

            "2" : "Fev",

            "3" : "Mar",

            "4" : "Abr",

            "5" : "Maio",

            "6" : "Jun",

            "7" : "jul",

            "8" : "Ago",

            "9" : "Set",

            "10" : "Out",

            "11" : "Nov",

            "12" : "Dez",

        };



        query('#sos-dia-pt').innerHTML = dia;

        query('#sos-dia-en').innerHTML = dia;



        query('#sos-mes-pt').innerHTML = mes;

        query('#sos-mes-en').innerHTML = mes;



        query('#sos-ano-pt').innerHTML = ano;

        query('#sos-ano-en').innerHTML = ano;



        draw_linha( '#sos-vmf', csv[1], csv[2] );

        draw_linha( '#sos-vhf', csv[3], csv[4] );

        draw_linha( '#sos-vf',  csv[5], [] );

        draw_linha( '#sos-ibx', csv[10], [] );

        draw_linha( '#sos-cdi', csv[11], [] );

        document.querySelector('#sos-total-valor').innerHTML = csv[12][0] || '';



    } );

}



get_csv( 'quotes-4.csv' );



if( resquest.lang ) {



    let br = queryAll('.sos-lang-pt');

    for( let i = 0; i < br.length; i++ ) {

        br[i].classList.add('sos-hidden');

    }



    let en = queryAll('.sos-lang-en');

    for( let e = 0; e < en.length; e++ ) {

        en[e].classList.remove( 'sos-hidden' );

        en[e].classList.add( 'sos-show' );

    }



    let enRoot = document.querySelector('.sos-data > span');

    enRoot.classList.remove('sos-hidden');

    enRoot.classList.add('sos-show');

    enRoot.style.width = '100%';



    document.getElementById('lang-pt-date').style.display = 'none';

    enRoot.classList.add('esconde-essa-porra');

}



</script>

