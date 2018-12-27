if( resquest.lang ) {

    let br = queryAll('.sos-lang-pt');
    for( let i = 0; i < br.length; i++ ) {
        br[i].classList.add('sos-hidden');
    }
    

    let en = queryAll('.sos-lang-en');
    log( en );
    for( let e = 0; e < en.length; e++ ) {
        en[e].classList.remove( 'sos-hidden' );
        en[e].classList.add( 'sos-show' );
    }
   
}