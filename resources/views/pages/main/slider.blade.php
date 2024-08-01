@php
    $cssImg = "background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.5)), url('/img/banners/";
@endphp
<div class="cont-img cont-header-main" id="slider">
    <div class="cont-slider cont-header-main">
        <div class="slider cont-header-main">
            <div class="sli bg-cover bg-center bg-no-repeat" style="{{ $cssImg."bn1.jpg"."')" }}">
                <div class="txt-slider container">
                    <h1 class="text-white">DEJANDO <span>HUELLA</span></h1>
                    <h5 class="text-white sm:pb-10">Conoce nuestro programa rumbo a la escuela</h5>
                    <a href="/" class="btn btn-transparent-secondary">Más Información</a>
                </div>
            </div>
            <div class="sli bg-cover bg-center bg-no-repeat" style="{{ $cssImg."bn2.jpeg"."')" }}">
                <div class="txt-slider container">
                    <h1 class="text-white">DEJANDO <span>HUELLA</span></h1>
                    <h5 class="text-white sm:pb-10">Conoce nuestro programa rumbo a la escuela</h5>
                    <a href="/" class="btn btn-transparent-secondary">Más Información</a>
                </div>
            </div>
            <div class="indicadores">
            </div>
        </div>
    </div>
</div>
