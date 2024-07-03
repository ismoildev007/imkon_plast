<?php

$lang = \Illuminate\Support\Facades\App::getLocale();


?>

<x-layouts.main>
    <main  style="margin-top: 200px;">
        <section class="video_sec lazyload" style="" data-back="https://imkon-plast.uz/wp-content/uploads/2023/02/bg.png"
                 data-back-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/bg.png.webp">
            <div class="container-fluid">
                <div class="row justify-content-around align-items-center xl-rev">
                    <div class="col-xl-4">
                        <h2>{{ __('app.about') }}</h2>
                        <p>{{ __('app.about1') }}</p>
                        <div class="line"></div>
                        <h2>{{ __('app.nasha') }} </h2>
                        <p>{{ __('app.nasha1') }}</p>
                    </div>
                    <div class="col-xl-4 mb-5">
                        <div class="play" data-toggle="modal" data-target="#vid_modal"
                             data-video="https://www.youtube.com/embed/DFleLe9xcG8">
                            <div class="animation-play">
                                <span class="shd-1"></span>
                                <span class="shd-2"></span>
                                <button>
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <h3 class="text-center section-title">{{ __('app.mosh') }} </h3>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card_possibility">
                            <h3><span>35</span></h3>
                            <p>{{ __('app.liny') }}</p>
                            <div class="card_img">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAADXAQAAAAAbpXF4AAAAAnRSTlMAAHaTzTgAAAAdSURBVBgZ7cExAQAAAMIg+6deDB9gAAAAAAAAwFsbtwABwxhFqwAAAABJRU5ErkJggg=="
                                     alt="Картинка 1"
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-90.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="250" height="215"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-90.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/Frame-90.png" alt="Картинка 1" data-eio="l">
                                </noscript>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card_possibility">
                            <h3><span>750</span> тонн</h3>
                            <p>{{ __('app.ton') }}</p>
                            <div class="card_img">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAADXAQAAAAAbpXF4AAAAAnRSTlMAAHaTzTgAAAAdSURBVBgZ7cExAQAAAMIg+6deDB9gAAAAAAAAwFsbtwABwxhFqwAAAABJRU5ErkJggg=="
                                     alt="Картинка 2"
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-91.png"
                                     decoding="async" class="lazyload" width="250" height="215">
                                <noscript><img src="wp-content/uploads/2023/02/Frame-91.png" alt="Картинка 2" data-eio="l">
                                </noscript>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card_possibility">
                            <h3><span>10 000 </span>м/кв</h3>
                            <p>{{ __('app.kv') }} </p>
                            <div class="card_img">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAADXAQAAAAAbpXF4AAAAAnRSTlMAAHaTzTgAAAAdSURBVBgZ7cExAQAAAMIg+6deDB9gAAAAAAAAwFsbtwABwxhFqwAAAABJRU5ErkJggg=="
                                     alt="Картинка 3"
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-92.png"
                                     decoding="async" class="lazyload" width="250" height="215">
                                <noscript><img src="wp-content/uploads/2023/02/Frame-92.png" alt="Картинка 3" data-eio="l">
                                </noscript>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card_possibility">
                            <h3><span>{{ __('app.dostavka') }} </span></h3>
                            <p>{{ __('app.dostavka1') }}</p>
                            <div class="card_img">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAADXAQAAAAAbpXF4AAAAAnRSTlMAAHaTzTgAAAAdSURBVBgZ7cExAQAAAMIg+6deDB9gAAAAAAAAwFsbtwABwxhFqwAAAABJRU5ErkJggg=="
                                     alt="Картинка 4"
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-93.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="250" height="215"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-93.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/Frame-93.png" alt="Картинка 4" data-eio="l">
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="video_sec lazyload" style=""
                 data-back="https://imkon-plast.uz/wp-content/uploads/2023/02/151775100-1.png"
                 data-back-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/151775100-1.png.webp">
            <div class="container-fluid">
                <div class="row justify-content-around align-items-center xl-rev">
                    <div class="col-xl-6">
                        <h2>{{ __('app.aboutPro') }} </h2>
                        <p>{{ __('app.aboutProText') }}</p>
                        <div class="ip-50-b">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGsAAAA/AQAAAADP2wtAAAAAAnRSTlMAAHaTzTgAAAAQSURBVBgZYxgFo2AUDB0AAAOxAAGT0oOcAAAAAElFTkSuQmCC"
                                 alt="" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/1-1.png"
                                 decoding="async" class="lazyload ewww_webp_lazy_load" width="107" height="63"
                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/1-1.png.webp">
                            <noscript><img src="../wp-content/uploads/2023/02/1-1.png" alt="" data-eio="l"></noscript>
                            <h2>10 000 м.кв</h2>
                            <p>{{ __('app.uchastok') }}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-5">
                        <div class="play" data-toggle="modal" data-target="#vid_modal"
                             data-video="https://www.youtube.com/embed/DFleLe9xcG8">
                            <div class="animation-play">
                                <span class="shd-1"></span>
                                <span class="shd-2"></span>
                                <button>
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slider_sec">
            <div class="slider">
                <div class="row no-gutters">
                    <div class="col-xl-7 slider-for">
                        @foreach($portfolios as $p)
                            <div class="slider-item-img">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQAAAAO9AQAAAAD1G/fLAAAAAnRSTlMAAHaTzTgAAACsSURBVHja7cExAQAAAMKg9U9tBn+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC4DVn7AAEbZvZJAAAAAElFTkSuQmCC"
                                     class="w-100 lazyload ewww_webp_lazy_load" alt=""
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/photo_2022-08-08_14-32-49.jpg"
                                     decoding="async" width="1280" height="957"
                                     data-src-webp="{{ asset('storage/' . $p->image) }}">
                                <noscript><img src="../wp-content/uploads/2023/02/photo_2022-08-08_14-32-49.jpg" class="w-100"
                                               alt="" data-eio="l"></noscript>
                            </div>
                        @endforeach


                    </div>
                    <div class="col-xl-5">
                        <div class="slider_part">
                            <p class="small_text">{{ __('app.nashi') }}</p>
                            <div class="slider_text">
                                <h6 class="red-text">{{ __('app.pryekt') }}</h6>
                                <div class="slider_change_elem slider-nav">
                                    @foreach($portfolios as $port)
                                        <div class="slider-item">
                                            <h2>{{ $port['title_' . $lang] }}</h2>
                                            <ul>
                                                <li>
                                                    <h6>
                                                        @if($lang === 'ru')Местоположение @endif
                                                        @if($lang === 'uz')Manzil @endif
                                                        @if($lang === 'en')Location @endif
                                                        :
                                                    </h6>
                                                    <p>{!! $port['text_' . $lang] !!}</p>
                                                </li>
                                                <li>
                                                    <h6>
                                                        @if($lang === 'ru')Объем @endif
                                                        @if($lang === 'uz')Hajmi @endif
                                                        @if($lang === 'en')Volume @endif
                                                        ::
                                                    </h6>
                                                    <p>{{ $port->kv_m }} кв. м.</p>
                                                </li>
                                            </ul>

                                            <div class="my-btn-group mt-3">
                                                <a href="{{ route('singlePortfolio', $port->id) }}" class="btn ip-btn mr-3">
                                                    <span>
                                                        @if($lang === 'ru') Подробнее @endif
                                                        @if($lang === 'uz') Batafsil @endif
                                                        @if($lang === 'en') More details @endif
                                                    </span>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </a>
                                                <a href="/portfolio" type="button" class="btn ip-btn-outlook">
                                                    @if($lang === 'ru') Все работает @endif
                                                    @if($lang === 'uz') Barcha ishlar @endif
                                                    @if($lang === 'en') All works @endif
                                                </a>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <h2 class="text-center section-title">{{ __('app.part') }}</h2>
                <div class="row justify-content-center">
                    @foreach($partners as $part)
                        <div class="col-sm-6 col-md-4 col-xl-2">
                            <img src="/storage/{{ $part->image }}"
                                 class="w-100 lazyload ewww_webp_lazy_load" alt=""
                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/1-2.png" decoding="async"
                                 width="285" height="100"
                                 data-src-webp="/storage/{{ $part->image }}">
                            <noscript><img src="/storage/{{ $part->image }}" class="w-100" alt="" data-eio="l">
                            </noscript>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <h2 class="section-title text-center"></h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                    @foreach($teams as $team)
                        <div class="col mb-4">
                            <div class="card h-100 employer_card">
                                <div class="card-img">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwIAAALwAQAAAAAM6v+zAAAAAnRSTlMAAHaTzTgAAABeSURBVHja7cEBDQAAAMKg909tDjegAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB4MB/vAAGZjBgWAAAAAElFTkSuQmCC"
                                         alt=""
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/04/экрана-2023-04-02-в-14.18.39.jpg"
                                         decoding="async" class="lazyload ewww_webp_lazy_load" width="770" height="752"
                                         data-src-webp="{{ asset('storage/' . $team->image) }}">
                                    <noscript><img
                                                src="../wp-content/uploads/2023/04/%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0-2023-04-02-%D0%B2-14.18.39.jpg"
                                                alt="" data-eio="l"></noscript>
                                </div>
                                <div class="card-body">
                                    <h5>{{ $team->name }}</h5>
                                    <p class="card-text">{!! $team['description_' . $lang] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="map_section">
            <div class="map">
                <iframe title="MaP" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        data-src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d5991.4002258052515!2d69.257272!3d41.337134!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDIwJzEzLjciTiA2OcKwMTUnMjYuMiJF!5e0!3m2!1sru!2s!4v1678796105855!5m2!1sru!2s"
                        class="lazyload"></iframe>
            </div>
        </section>


    </main>
</x-layouts.main>