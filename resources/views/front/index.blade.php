<?php

$lang = \Illuminate\Support\Facades\App::getLocale()


?>

<x-layouts.main>
    <main>
        <section class="pb-0 banner lazyload" style=""
                 data-back="https://imkon-plast.uz/wp-content/uploads/2023/02/bg-1.png"
                 data-back-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/bg-1.png.webp">
            <div class="container-fluid">
                <div class="row md-rev mb-4">
                    <div class="col-md-8">
                        <h1>{{ __('app.Business') }}</h1>
                        <a href="
Notice: Trying to access array offset on value of type bool in /home/f/fahridly/imkon-plast.uz/public_html/wp-content/themes/imkon-plast/front-page.php on line 39
" download="" class="btn ip-btn"><span>{{ __('app.Business_sir') }}</span>
                            <i class="fal fa-arrow-to-bottom"></i>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAugAAAKsAQAAAACW6HVHAAAAAnRSTlMAAHaTzTgAAABVSURBVHja7cExAQAAAMKg9U9tB2+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB4DPsoAAHQOblMAAAAAElFTkSuQmCC"
                             class="w-100 lazyload ewww_webp_lazy_load" alt="Товар"
                             data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/banner.png" decoding="async"
                             width="744" height="684"
                             data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/banner.png.webp">
                        <noscript><img src="/front/wp-content/uploads/2023/02/banner.png" class="w-100" alt="Товар" data-eio="l">
                        </noscript>
                    </div>
                </div>
            </div>
            <div class="bottom_info">
                <p>{{ __('app.opit') }}</p>
                <p>{{ __('app.spets') }} <br>{{ __('app.project') }}</p>
                <p>{{ __('app.prinsip') }}<br>{{ __('app.prinsip+job') }}

            </div>
        </section>
        <section class="ip_produce">
            <div class="container-fluid">
                <h2 class="text-center section-title">{{ __('app.prinsip1') }} </h2>
                <h3 class="text-center"></h3>
                <div class="row">
                    <div class="col-xl-6 mb-4">
                        <div class="produce_card h-100">
                            <div class="row align-items-center sm-rev">
                                <div class="col-sm-6 ">
                                    <p class="small_text">{{ __('app.consulting') }}</p>
                                    <h2>{{ __('app.prinsip4') }} </h2>
                                    <p class="mb-4">{{ __('app.question') }}</p>
                                    <a href="#" class="btn ip-btn" data-toggle="modal" data-target="#exampleModal"><span>{{ __('app.calc') }} </span>
                                        <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYQAAAHXAQAAAACU3BAnAAAAAnRSTlMAAHaTzTgAAAAtSURBVBgZ7cExAQAAAMIg+6deCU9gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMBJW/4AAeim2ZkAAAAASUVORK5CYII="
                                         class="w-100 lazyload ewww_webp_lazy_load" alt="Продукия"
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/produce_card.png"
                                         decoding="async" width="388" height="471"
                                         data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/produce_card.png.webp">
                                    <noscript><img src="wp-content/uploads/2023/02/produce_card.png" class="w-100"
                                                   alt="Продукия" data-eio="l"></noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-4">
                        <div class="produce_card h-100">
                            <div class="row align-items-center sm-rev">
                                <div class="col-sm-6 ">
                                    <p class="small_text">{{ __('app.consulting') }}</p>
                                    <h2>{{ __('app.show') }}</h2>
                                    <p class="mb-4">{{ __('app.question1') }}</p>
                                    <a href="#" class="btn ip-btn" data-toggle="modal" data-target="#exampleModal"><span>{{ __('app.calc') }} </span>
                                        <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAXsAAAImAQAAAACavRcSAAAAAnRSTlMAAHaTzTgAAAAxSURBVHja7cExAQAAAMKg9U9tDB+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeBmlGAAGcn8UXAAAAAElFTkSuQmCC"
                                         class="w-100 lazyload ewww_webp_lazy_load" alt="Продукция"
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/виды.png"
                                         decoding="async" width="379" height="550"
                                         data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/виды.png.webp">
                                    <noscript><img src="wp-content/uploads/2023/02/%D0%B2%D0%B8%D0%B4%D1%8B.png"
                                                   class="w-100" alt="Продукция" data-eio="l"></noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="produce_card ">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-3 mb-4">
                                    <p class="small_text"></p>
                                    <h3>
                                        {{ __('app.window') }} </h3>
                                    <ul>
                                        <li>{{ __('app.window1') }}</li>
                                        <li>{{ __('app.window2') }}</li>
                                        <li>{{ __('app.window3') }}</li>
                                        <li>{{ __('app.window4') }}</li>
                                    </ul>
                                    <a href="#" class="btn ip-btn" data-toggle="modal" data-target="#exampleModal"><span>{{ __('app.calc') }}</span>
                                        <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                                <div class="col-xl-7">
                                    <div class="img_group">
                                        <div class="img">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAAHwAQAAAACzy4aKAAAAAnRSTlMAAHaTzTgAAAAoSURBVBgZ7cGBAAAAAMOg+1MP4QLVAAAAAAAAAAAAAAAAAAAAAACAK0ewAAHpXHLtAAAAAElFTkSuQmCC"
                                                 class="w-100 lazyload ewww_webp_lazy_load" alt="Дверь"
                                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/dver.png"
                                                 decoding="async" width="285" height="496"
                                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/dver.png.webp">
                                            <noscript><img src="wp-content/uploads/2023/02/dver.png" class="w-100"
                                                           alt="Дверь" data-eio="l"></noscript>
                                            <h5>{{ __('app.white') }}</h5>
                                        </div>
                                        <div class="img">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAAHwAQAAAACzy4aKAAAAAnRSTlMAAHaTzTgAAAAoSURBVBgZ7cGBAAAAAMOg+1MP4QLVAAAAAAAAAAAAAAAAAAAAAACAK0ewAAHpXHLtAAAAAElFTkSuQmCC"
                                                 class="w-100 lazyload ewww_webp_lazy_load" alt="Дверь"
                                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/pngwing-9.png"
                                                 decoding="async" width="285" height="496"
                                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/pngwing-9.png.webp">
                                            <noscript><img src="wp-content/uploads/2023/02/pngwing-9.png" class="w-100"
                                                           alt="Дверь" data-eio="l"></noscript>
                                            <h5>{{ __('app.choco') }}</h5>
                                        </div>
                                        <div class="img">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAAHwAQAAAACzy4aKAAAAAnRSTlMAAHaTzTgAAAAoSURBVBgZ7cGBAAAAAMOg+1MP4QLVAAAAAAAAAAAAAAAAAAAAAACAK0ewAAHpXHLtAAAAAElFTkSuQmCC"
                                                 class="w-100 lazyload ewww_webp_lazy_load" alt="Дверь 3"
                                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/pngwing-9-1.png"
                                                 decoding="async" width="285" height="496"
                                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/pngwing-9-1.png.webp">
                                            <noscript><img src="wp-content/uploads/2023/02/pngwing-9-1.png" class="w-100"
                                                           alt="Дверь 3" data-eio="l"></noscript>
                                            <h5>{{ __('app.grey') }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <h2 class="section-title">{{ __('app.prinsip2') }}</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                  @foreach($products as $pro)
                    <div class="col mb-4">
                        <a href="/catolog" class="product_card">
                            <h5>{{ $pro['title_' . $lang] }}</h5>
                            <img src="{{ asset('storage/' . $pro->image) }}"
                                 class="w-100 lazyload ewww_webp_lazy_load" alt="Аксессуары для плинтусов"
                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/INDO_NW_04_LINGBURG_OAK-1024x1024-1.png"
                                 decoding="async" width="170" height="289"
                                 data-src-webp="{{ asset('storage/' . $pro->image) }}">
                            <noscript><img src="{{ asset('storage/' . $pro->image) }}"
                                           class="w-100" alt="Аксессуары для плинтусов" data-eio="l"></noscript>
                        </a>
                    </div>
                  @endforeach

                </div>
            </div>
        </section>
        <section class="price_section lazyload" style="" data-back="assets/img/price/bg.png">
            <div class="container-fluid">
                <h2 class="text-center">
                    {{ __('app.prinsip3') }}</h2>
                <div class="row justify-content-around align-items-center">
                    <div class="col-xl-4">
                        <h3>{{ __('app.year1') }} <br> {{ __('app.year2') }}</h3>
                        <ul class="price_list">
                            <li>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLAQAAAAAQNUdHAAAAAnRSTlMAAHaTzTgAAAAPSURBVBgZYxgFo2AUkA4AAzkAAcisfRAAAAAASUVORK5CYII="
                                     alt="" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-19.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="75" height="75"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-19.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/Frame-19.png" alt="" data-eio="l"></noscript>
                                <span>{{ __('app.year3') }}</span>
                            </li>
                            <li>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLAQAAAAAQNUdHAAAAAnRSTlMAAHaTzTgAAAAPSURBVBgZYxgFo2AUkA4AAzkAAcisfRAAAAAASUVORK5CYII="
                                     alt="" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-18.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="75" height="75"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-18.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/Frame-18.png" alt="" data-eio="l"></noscript>
                                <span>{{ __('app.year4') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-8">
                        <div class="price_pool">
                            <p class="title">Название</p>
                                <ul class="list">
                                @foreach($prices1 as $pre1)
                                    <li> {{ $pre1['title_' . $lang] }} </li>
                                @endforeach
                                </ul>
                            <div class="price_place">
                                <div class="price_count">
                                    <h5>{{ __('app.camera4') }}</h5>
                                    <ul>

                                        @foreach($prices1 as $pre1)
                                            <li><span class="mini_price_list"> {{ $pre1['title_' . $lang] }} </span> {{ $pre1['title_' . $lang] }} -
                                                {{ $pre1->price }} сум</li>
                                        @endforeach
                                            <li>
                                                <span class="mini_price_list">
                                                    @if($lang === 'ru') Гарантия @endif
                                                    @if($lang === 'uz') Kafolat @endif
                                                    @if($lang === 'en') Warranty @endif
                                                </span>
                                                @if($lang === 'ru') Гарантия - 10 лет @endif
                                                @if($lang === 'uz') Kafolat - 10 yil @endif
                                                @if($lang === 'en') Warranty - 10 years @endif
                                            </li>

                                    </ul>
                                </div>
                                <div class="price_count">
                                    <h5>{{ __('app.camera5') }}</h5>
                                    <ul>
                                        @foreach($prices2 as $pre2)
                                            <li><span class="mini_price_list">{{ $pre2['title_' . $lang] }}</span> {{ $pre2['title_' . $lang] }} - {{ $pre2->price }} сум</li>
                                        @endforeach
                                            <li>
                                                <span class="mini_price_list">
                                                    @if($lang === 'ru') Гарантия @endif
                                                    @if($lang === 'uz') Kafolat @endif
                                                    @if($lang === 'en') Warranty @endif
                                                </span>
                                                @if($lang === 'ru') Гарантия - 15 лет @endif
                                                @if($lang === 'uz') Kafolat - 15 yil @endif
                                                @if($lang === 'en') Warranty - 15 years @endif
                                            </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customer_section">
            <div class="container-fluid">
                <h2>{{ __('app.pochemu') }} <br> <span>1000</span> {{ __('app.pochemu1') }} </h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <div class="col mb-4">
                        <div class="ip-50-b">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAA/AQAAAAB1eIMgAAAAAnRSTlMAAHaTzTgAAAAOSURBVBgZYxgFo4DuAAACdgABFH7X3QAAAABJRU5ErkJggg=="
                                 alt="" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/img_1.png"
                                 decoding="async" class="lazyload ewww_webp_lazy_load" width="70" height="63"
                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/img_1.png.webp">
                            <noscript><img src="wp-content/uploads/2023/02/img_1.png" alt="" data-eio="l"></noscript>
                            <h3>{{ __('app.eco1') }}</h3>
                            <p>{{ __('app.eco2') }}.</p>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="ip-50-b">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABGAQAAAABZVd8pAAAAAnRSTlMAAHaTzTgAAAAOSURBVBgZYxgFo2CIAgACvAABrjg5/gAAAABJRU5ErkJggg=="
                                 alt="" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/2.png" decoding="async"
                                 class="lazyload ewww_webp_lazy_load" width="70" height="70"
                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/2.png.webp">
                            <noscript><img src="wp-content/uploads/2023/02/2.png" alt="" data-eio="l"></noscript>
                            <h3>{{ __('app.eco3') }}</h3>
                            <p>{{ __('app.eco4') }}</p>
                        </div>
                    </div>
                </div>
                <div class="big_img">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABM4AAALLAQAAAAAp7/NxAAAAAnRSTlMAAHaTzTgAAACCSURBVHja7cExAQAAAMKg9U9tDQ+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC4MrD4AAE7RfxUAAAAAElFTkSuQmCC"
                         alt="" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/big_img.png" decoding="async"
                         class="lazyload ewww_webp_lazy_load" width="1230" height="715"
                         data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/big_img.png.webp">
                    <noscript><img src="wp-content/uploads/2023/02/big_img.png" alt="" data-eio="l"></noscript>
                </div>
            </div>
        </section>
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
        <section class="analog_section lazyload" style=""
                 data-back="https://imkon-plast.uz/wp-content/uploads/2023/02/bg-2.png"
                 data-back-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/bg-2.png.webp">
            <div class="container-fluid">
                <h2 class="text-center mb-5">{{ __('app.kachestvo') }} <br> {{ __('app.kachestvo1') }} </h2>
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-4">
                        <div class="ip-info-list left">
                            <div class="ip-50-b">
                                    @if($lang === 'ru')Количество камер <br> стеклопакета - 1 @endif
                                    @if($lang === 'uz')Kameralar soni ikki oynali <br> oynalar - 1 @endif
                                    @if($lang === 'en')Number of chambers <br> in double-glazed unit - 1 @endif
                            </div>
                            <div class="ip-50-b">
                                @if($lang === 'ru')Толщина стенки <br> 2,5 - 2,2 мм @endif
                                @if($lang === 'uz')Devor qalinligi <br> 2,5 - 2,2 mm @endif
                                @if($lang === 'en')Wall thickness <br> 2.5 - 2.2 mm @endif
                            </div>
                            <div class="ip-50-b">
                                @if($lang === 'ru')Уплотнительные контуры -  <br> имеются @endif
                                @if($lang === 'uz')Muhrlash konturlari  -  <br> mavjud @endif
                                @if($lang === 'en')Sealing contours - <br> available @endif
                            </div>
                            <div class="ip-50-b">
                                @if($lang === 'ru')Количество камер –  <br> 4 @endif
                                @if($lang === 'uz')Kameralar soni –  <br> 4 @endif
                                @if($lang === 'en')Number of chambers – <br> 4 @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAApcAAAJjAQAAAABxFAczAAAAAnRSTlMAAHaTzTgAAABHSURBVBgZ7cEBAQAAAIKg/q92SMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4EzIfAABZcIDwQAAAABJRU5ErkJggg=="
                             class="w-100 lazyload ewww_webp_lazy_load" alt="Аналог"
                             data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/img-1.png" decoding="async"
                             width="663" height="611"
                             data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/img-1.png.webp">
                        <noscript><img src="wp-content/uploads/2023/02/img-1.png" class="w-100" alt="Аналог" data-eio="l">
                        </noscript>
                    </div>
                    <div class="col-xl-4">

                        <div class="ip-info-list right">
                            <div class="ip-50-b">
                                @if($lang === 'ru')Толщина стеклопакета - <br>  4 мм @endif
                                @if($lang === 'uz')Shisha qalinligi - <br>  4 mm @endif
                                @if($lang === 'en')Glass thickness - <br>  4 mm @endif
                            </div>
                            <div class="ip-50-b">
                                @if($lang === 'ru')Оцинкованный стальной <br> металл (армирование) - 1,2 @endif
                                @if($lang === 'uz')Galvanizli po'lat <br> metall (mustahkamlash) - 1,2 @endif
                                @if($lang === 'en')Galvanized steel <br> metal (reinforcement) - 1.2 @endif
                            </div>
                            <div class="ip-50-b">
                                @if($lang === 'ru')Ширина стекла - <br> 20мм @endif
                                @if($lang === 'uz')Shisha kengligi - <br> 20mm @endif
                                @if($lang === 'en')Glass width - <br> 20mm @endif
                            </div>
                            <div class="ip-50-b">
                                @if($lang === 'ru')Ширина профиля - <br> 6000мм @endif
                                @if($lang === 'uz')Profil kengligi - <br> 6000mm @endif
                                @if($lang === 'en')Profile width - <br> 6000mm @endif
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section style="background-color: #3E3E3E ;">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-xl-4 mb-4">
                        <div class="guarantee-block">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAqIAAAINAQAAAADNMCBlAAAAAnRSTlMAAHaTzTgAAABBSURBVBgZ7cEBAQAAAIKg/q92SMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4F6wXgAByB2QVgAAAABJRU5ErkJggg=="
                                 class="w-100 lazyload ewww_webp_lazy_load" alt="Картинка"
                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/1-4.png" decoding="async"
                                 width="674" height="525"
                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/1-4.png.webp">
                            <noscript><img src="wp-content/uploads/2023/02/1-4.png" class="w-100" alt="Картинка"
                                           data-eio="l"></noscript>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- <h2 class="section-title">ПРОДУКЦИЯ IMKONPLAST</h2> -->
                        <div class="guarantee-info">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="card ">
                                        <div class="row align-items-center no-gutters h-100">
                                            <div class="col-sm-3 text-center">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE8AAABLAQAAAAAZ3uc9AAAAAnRSTlMAAHaTzTgAAAAPSURBVBgZYxgFo2AUkA4AAzkAAcisfRAAAAAASUVORK5CYII="
                                                     alt="Картинка карточки"
                                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73.png"
                                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="79"
                                                     height="75"
                                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73.png.webp">
                                                <noscript><img src="wp-content/uploads/2023/02/Group-73.png"
                                                               alt="Картинка карточки" data-eio="l"></noscript>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ __('app.4xka') }} </h5>
                                                    <p class="card-text">{{ __('app.4xka_text') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card ">
                                        <div class="row align-items-center no-gutters h-100">
                                            <div class="col-sm-3 text-center">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLAQAAAAAQNUdHAAAAAnRSTlMAAHaTzTgAAAAPSURBVBgZYxgFo2AUkA4AAzkAAcisfRAAAAAASUVORK5CYII="
                                                     alt="Картинка карточки"
                                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73-1.png"
                                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="75"
                                                     height="75"
                                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73-1.png.webp">
                                                <noscript><img src="wp-content/uploads/2023/02/Group-73-1.png"
                                                               alt="Картинка карточки" data-eio="l"></noscript>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ __('app.net') }}</h5>
                                                    <p class="card-text">{{ __('app.net1') }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card ">
                                        <div class="row align-items-center no-gutters h-100">
                                            <div class="col-sm-3 text-center">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLAQAAAAAQNUdHAAAAAnRSTlMAAHaTzTgAAAAPSURBVBgZYxgFo2AUkA4AAzkAAcisfRAAAAAASUVORK5CYII="
                                                     alt="Картинка карточки"
                                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73-2.png"
                                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="75"
                                                     height="75"
                                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73-2.png.webp">
                                                <noscript><img src="wp-content/uploads/2023/02/Group-73-2.png"
                                                               alt="Картинка карточки" data-eio="l"></noscript>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ __('app.dolgo') }}</h5>
                                                    <p class="card-text">{{ __('app.dolgo1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card ">
                                        <div class="row align-items-center no-gutters h-100">
                                            <div class="col-sm-3 text-center">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAABLAQAAAAAQNUdHAAAAAnRSTlMAAHaTzTgAAAAPSURBVBgZYxgFo2AUkA4AAzkAAcisfRAAAAAASUVORK5CYII="
                                                     alt="Картинка карточки"
                                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73-3.png"
                                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="75"
                                                     height="75"
                                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-73-3.png.webp">
                                                <noscript><img src="wp-content/uploads/2023/02/Group-73-3.png"
                                                               alt="Картинка карточки" data-eio="l"></noscript>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ __('app.procho') }} </h5>
                                                    <p class="card-text">{{ __('app.procho1') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="numbers_section">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-xl-3 mb-4">
                        <h2>13 {{ __('app.let') }}</h2>
                        <h6>{{ __('app.13') }} </h6>
                    </div>
                    <div class="col-xl-3 mb-4">
                        <h2>15 {{ __('app.let') }}</h2>
                        <h6>{{ __('app.15') }}</h6>
                    </div>
                    <div class="col-xl-3 mb-4">
                        <h2>3000 тонн</h2>
                        <h6>{{ __('app.3000') }} </h6>
                    </div>
                    <div class="col-xl-3 mb-4">
                        <h2>4 000 000</h2>
                        <h6>{{ __('app.4000') }}</h6>
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
        <section class="country-map">
            <div class="container-fluid">
                <h2 class="text-center section-title">{{ __('app.text') }} </h2>
                <div class="row justify-content-center">
                    <div class="col-md-2 mb-5">
                        <div class="ip-btn-outlook w-100">
                            {{ __('app.kraski') }}
                        </div>
                    </div>
                    <div class="col-md-2 mb-5">
                        <div class="ip-btn-outlook w-100">
                            {{ __('app.seri') }}
                        </div>
                    </div>
                    <div class="col-md-2 mb-5">
                        <div class="ip-btn-outlook w-100">
                            {{ __('app.seri1') }}
                        </div>
                    </div>
                    <div class="col-md-2 mb-5">
                        <div class="ip-btn-outlook w-100">
                            {{ __('app.seri2') }}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="map-flag">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABM4AAAIlAQAAAAAFoYmDAAAAAnRSTlMAAHaTzTgAAABpSURBVHja7cEBDQAAAMKg909tDwcUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIcGTHYAARyMStYAAAAASUVORK5CYII="
                                 class="w-100 lazyload ewww_webp_lazy_load" alt="Карта мира"
                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/1-6.png" decoding="async"
                                 width="1230" height="549"
                                 data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/1-6.png.webp">
                            <noscript><img src="wp-content/uploads/2023/02/1-6.png" class="w-100" alt="Карта мира"
                                           data-eio="l"></noscript>
                            <div class="flag-1 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="Россия" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/russian.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/russian.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/russian.png" alt="Россия" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>Kaustik</p>
                                    <p>Россия</p>
                                </div>
                            </div>
                            <div class="flag-2 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="Китай" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/image-47.png" alt="Китай" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>Tyaniy</p>
                                    <p>Китай</p>
                                </div>
                            </div>
                            <div class="flag-3 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="Германия"
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-1.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-1.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/image-47-1.png" alt="Германия" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>IKA</p>
                                    <p>Германия</p>
                                </div>
                            </div>
                            <div class="flag-4 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="Корея" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/image-48.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/image-48.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/image-48.png" alt="Корея" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>LG/Akeyum</p>
                                    <p>Южная Корея</p>
                                </div>
                            </div>
                            <div class="flag-5 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="США" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-2.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-2.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/image-47-2.png" alt="США" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>DuPont</p>
                                    <p>США</p>
                                </div>
                            </div>
                            <div class="flag-6 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="Индонезия"
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-3.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-3.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/image-47-3.png" alt="Индонезия" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>Duakuda</p>
                                    <p>Индонезия</p>
                                </div>
                            </div>
                            <div class="flag-7 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="Индия" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-4.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-4.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/image-47-4.png" alt="Индия" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>Omega</p>
                                    <p>Индия</p>
                                </div>
                            </div>
                            <div class="flag-8 country-flag">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAtAQAAAADaDTXhAAAAAnRSTlMAAHaTzTgAAAANSURBVBgZYxgFgw8AAAGVAAGVBUdyAAAAAElFTkSuQmCC"
                                     alt="Турция"
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-5.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="60" height="45"
                                     data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/image-47-5.png.webp">
                                <noscript><img src="wp-content/uploads/2023/02/image-47-5.png" alt="Турция" data-eio="l">
                                </noscript>
                                <div class="name">
                                    <p>Akdeniz Kimya</p>
                                    <p>Турция</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-color: #3E3E3E ;">
            <div class="container-fluid ">
            @foreach($sertificate as $pro)
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-5 mb-4">
                        <p class="red_text">{{ __('app.sertificate1') }}</p>
                        <h2>{{ __('app.sertificate') }} </h2>
                    </div>
                    <div class="col-xl-5">
                        <div class="img-zooms img_zoom">
                            <div class="imgs">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASMAAAGYAQAAAAAhVrk2AAAAAnRSTlMAAHaTzTgAAAAmSURBVGje7cGBAAAAAMOg+VNf4AhVAQAAAAAAAAAAAAAAAAAAfAM8kAABXd8ohQAAAABJRU5ErkJggg=="
                                     alt="" data-src="{{ asset('storage/' . $pro->image1) }}"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="291" height="408"
                                     data-src-webp="{{ asset('storage/' . $pro->image1) }}">
                                <noscript><img src="{{ asset('storage/' . $pro->image1) }}" alt="" data-eio="l"></noscript>
                            </div>
                            <div class="imgs">
                                <img src="{{ asset('storage/' . $pro->image2) }}"
                                     alt=""
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/doc00145220170907102019_001-2.png"
                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="290" height="408"
                                     data-src-webp="{{ asset('storage/' . $pro->image2) }}">
                                <noscript><img src="{{ asset('storage/' . $pro->image2) }}" alt=""
                                               data-eio="l"></noscript>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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