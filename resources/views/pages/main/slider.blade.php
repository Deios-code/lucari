<div class="cont-img cont-header-main" id="slider">
    <div class="cont-slider cont-header-main">
        <div class="slider cont-header-main">
            @foreach ($data['banners'] as $item)
                <div class="sli bg-contain md:bg-cover bg-center bg-no-repeat" style="background-image: url({{ $item['url_img'] }})"></div>
            @endforeach
            <div class="indicadores"></div>
        </div>
    </div>
</div>
