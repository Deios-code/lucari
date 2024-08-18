import './bootstrap';
import { Carousel,Dial } from 'flowbite';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

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

if(document.getElementById("animatedNumberOne")){
    function animateNumber(elementId, start, end, duration) {
        let current = start;
        const range = end - start;
        const increment = end > start ? 1 : -1;
        const stepTime = Math.abs(Math.floor(duration / range));
        const obj = document.getElementById(elementId);

        const timer = setInterval(function() {
            current += increment;
            obj.textContent = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    // Llama a la función para animar el número
    animateNumber('animatedNumberOne', 8000, 8500, 5000);
    animateNumber('animatedNumberTwo', 1000, 1418, 7000);
    animateNumber('animatedNumberThree', 600, 627, 7000);
    animateNumber('animatedNumberFour', 300, 319, 7000);
}
