<?php

$lang = \Illuminate\Support\Facades\App::getLocale()


?>




<x-layouts.main>
    <main style="margin-top: 200px;">
        <section>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-center">Скидка до - 5%</h2>
                        <h3 class="text-center">ДО 8 МАРТА</h3>
                    </div>
                    <div class="col-md-6">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA+oAAAPrAQAAAADnuUvaAAAAAnRSTlMAAHaTzTgAAACSSURBVHja7cEBDQAAAMKg909tDjegAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAuDXxpAAB820xgwAAAABJRU5ErkJggg=="
                             class="w-100 lazyload ewww_webp_lazy_load" alt=""
                             data-src="https://imkon-plast.uz/wp-content/themes/imkon-plast/assets/img/coop-page-1/1.png"
                             decoding="async" width="1002" height="1003"
                             data-src-webp="https://imkon-plast.uz/wp-content/themes/imkon-plast/assets/img/coop-page-1/1.png.webp">
                        <noscript><img src="../../wp-content/themes/imkon-plast/assets/img/coop-page-1/1.png" class="w-100"
                                       alt="" data-eio="l"></noscript>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <h2 class="section-title text-center">Что о нас говорят наши партнеры</h2>
                <div class="row justify-content-center">
                    <div class="col-10 slider-video">
                        <div class="slider-items">
                            <iframe width="100%" height="100%" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen="" data-src="https://www.youtube.com/embed/DFleLe9xcG8"
                                    class="lazyload"></iframe>
                        </div>
                        <div class="slider-items">
                            <iframe width="100%" height="100%" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen="" data-src="https://www.youtube.com/embed/DFleLe9xcG8"
                                    class="lazyload"></iframe>
                        </div>
                        <div class="slider-items">
                            <iframe width="100%" height="100%" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen="" data-src="https://www.youtube.com/embed/DFleLe9xcG8"
                                    class="lazyload"></iframe>
                        </div>
                        <div class="slider-items">
                            <iframe width="100%" height="100%" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen="" data-src="https://www.youtube.com/embed/DFleLe9xcG8"
                                    class="lazyload"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <h2 class="section-title text-center">Нам доверяют лидеры индустрии </h2>
                <div class="row justify-content-center">
                    @foreach($partners as $partner)
                        <div class="col-lg-3 mb-5">
                            <div class="card client-card">
                                <div class="card-header">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMoAAAC+AQAAAABcra3SAAAAAnRSTlMAAHaTzTgAAAAbSURBVFjD7cEBDQAAAMKg909tDwcUAAAAAPBvFAoAASbNT/8AAAAASUVORK5CYII="
                                         alt="1" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/coop.png"
                                         decoding="async" class="lazyload ewww_webp_lazy_load" width="202" height="190"
                                         data-src-webp="{{ asset('storage/' . $partner->image) }}">
                                    <noscript><img src="../wp-content/uploads/2023/02/coop.png" alt="1" data-eio="l"></noscript>
                                </div>
                                <div class="card-body">
                                    <h3>{{ $partner['title_' . $lang] }}</h3>
                                    <p>{!! $partner['description_' . $lang] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


    </main>
</x-layouts.main>