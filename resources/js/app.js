import './bootstrap';
import { Carousel } from 'flowbite';


if(document.getElementById("slider")){
    const fila=document.querySelector('.cont-slider')
    const imagen = document.querySelectorAll('.sli');
    let numImg=imagen.length;
    for (let i = 0; i < numImg; i++) {
        const indicador = document.createElement('button');
        if (i === 0) {
            indicador.classList.add('activo');
        }

        document.querySelector('.indicadores').appendChild(indicador);
        indicador.addEventListener('click', (e)=>{
            fila.scrollLeft = i*fila.offsetWidth;
            document.querySelector('.indicadores .activo').classList.remove('activo');
            e.target.classList.add('activo');
        });
    }
}
