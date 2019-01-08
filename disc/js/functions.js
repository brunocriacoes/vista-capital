
const domain   = window.location.hostname;
const http     = window.location.protocol;
// const uri_svg  = `${http}//${domain}/disc/csv/`;
const uri_svg  = `${http}//${domain}/vista-capital/disc/csv/`;
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
    if( number != '' && number != "N/D" ) {
        let bom = number.split('.');
        let dois = bom[1].substr(1, 1);
        let tres = bom[1].substr(2, 1);
        let redondo = +dois + 1;
        if( tres < 5 ) {
            redondo = dois;
        }
        return `${bom[0]}.${bom[1].substr(0, 1)}${redondo}%`;
        // return `${bom[0]}.${bom[1].substr(0, 1)}${redondo}%`;
    }
    return number;
}
function round_total( number )
{
    if( number != '' && number != "N/D" ) {
        return number.replace( ',', "." ).split('.')[0] + "%";
    }
    return number;
}
function formate( number )
{
    // return number.toLocaleString('pt-br',{minimumFractionDigits: 1});
    return number.toLocaleString('pt-br',{minimumFractionDigits: 1}).split(',')[0];
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

        csv[1][9] = csv[1][9].replace( '.', '' ); 
        csv[3][9] = csv[3][9].replace( '.', '' ); 
        csv[5][9] = csv[5][9].replace( '.', '' ); 
        csv[7][9] = csv[7][9].replace( '.', '' );

        csv[1][10] = csv[1][10].replace( '.', '' ); 
        csv[3][10] = csv[3][10].replace( '.', '' ); 
        csv[5][10] = csv[5][10].replace( '.', '' ); 
        csv[7][10] = csv[7][10].replace( '.', '' ); 

        let total =  +csv[1][9] + +csv[3][9] + +csv[5][9] + +csv[7][9];

        csv[1][9] = formate( +csv[1][9] );
        csv[3][9] = formate( +csv[3][9] );
        csv[5][9] = formate( +csv[5][9] );
        csv[7][9] = formate( +csv[7][9] );
        
        csv[1][10] = formate( +csv[1][10] );
        csv[3][10] = formate( +csv[3][10] );
        csv[5][10] = formate( +csv[5][10] );
        csv[7][10] = formate( +csv[7][10] );

        csv[1][1] = csv[1][1].replace('.', ',').substr(0, 4);
        csv[3][1] = csv[3][1].replace('.', ',').substr(0, 4);
        csv[5][1] = csv[5][1].replace('.', ',').substr(0, 4);
        csv[7][1] = csv[7][1].replace('.', ',').substr(0, 4);

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
        
        csv.push( [ formate( total ) ] );

        table( csv );

        let dia = csv[0][1].substr( 5,2 );
        let mes = csv[0][1].substr( 8,2 );

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

        query('#sos-mes-pt').innerHTML = mes_pt[mes];
        query('#sos-mes-en').innerHTML = mes_en[mes];

        draw_linha( '#sos-vmf', csv[1], csv[2] );
        draw_linha( '#sos-vhf', csv[3], csv[4] );
        draw_linha( '#sos-vf',  csv[5], csv[6] );
        draw_linha( '#sos-ibx', csv[10], [] );
        draw_linha( '#sos-cdi', csv[11], [] );
        document.querySelector('#sos-total-valor').innerHTML = csv[12][0] || '';

    } );
}

get_csv( 'quotes.csv' );
