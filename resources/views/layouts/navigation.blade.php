
@if (!isset($route))
    <nav class="cont-navigation">
@else
    <nav class="cont-navigation-main">
@endif
    <div class="container flex justify-between items-center text-white py-3 px-2 text-center">
        <x-app-logo />
        <div class="items-center">
            <a href="/">Inicio</a>
            <a href="">Nosotros</a>
            <a href="">Programas de la fundación</a>
            <a href="">Historias</a>
            <a href="">Informes de gestión</a>
        </div>
        <a href="" class="btn btn-transparent-secondary">contacto</a>
    </div>
</nav>
