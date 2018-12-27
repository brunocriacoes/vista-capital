const log      = console.log;
const query    = x => document.querySelector( x );
const queryAll = x => document.querySelectorAll( x );
const resquest = window.location.search.replace('?', '').split('&').reduce( (acc, iten) => {
    let data = iten.split('=');
    acc[data[0]] = data[1] || '';
    return acc;
}, {} );

