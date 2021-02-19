
window.addEventListener('scroll', () => {
    
    // const anuncio = document.querySelector('#modal');
    const ubicacion = aviso.getBoundingClientRect();


    // if(ubicacion.top < 784) {
    if(ubicacion.top < 74) {
        avisoHTML();
        // document.querySelector('.aviso');
        //  return anuncio;
    } else {
        console.log('Aún no, da mas scroll');
    }
})

function avisoHTML(){

    const anuncio = document.querySelector('#modal');

    if( anuncio.classList.contains('activo') ) {
        anuncio.classList.remove('activo');
        this.classList.remove('activo');
		this.textContent = 'Calcular envio';
		
    } else {
        anuncio.classList.add('activo');
        this.classList.add('activo');
        this.textContent = 'X';
    }
     }


     
