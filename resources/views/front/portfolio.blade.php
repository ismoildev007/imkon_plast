<?php


$lang = \Illuminate\Support\Facades\App::getLocale()


?>


<x-layouts.main>
    <main style="margin-top: 200px;">
        <section class="portfolio_sec slider_sec">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 slider">
                    @foreach($portfolios as $port)
                        <div class="col mb-4">
                            <div class="portfolio">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQAAAAO9AQAAAAD1G/fLAAAAAnRSTlMAAHaTzTgAAACsSURBVHja7cExAQAAAMKg9U9tBn+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC4DVn7AAEbZvZJAAAAAElFTkSuQmCC"
                                     class="w-100 h-100 lazyload ewww_webp_lazy_load" alt=""
                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/photo_2022-08-08_14-32-49.jpg"
                                     decoding="async" width="1280" height="957"
                                     data-src-webp="{{ asset('storage/' . $port->image) }}">
                                <noscript><img src="../wp-content/uploads/2023/02/photo_2022-08-08_14-32-49.jpg"
                                               class="w-100 h-100" alt="" data-eio="l"></noscript>
                                <div class="portfolio_text">
                                    <div class="slider_part">

                                        <div class="slider_text">
                                            <h6 class="red-text">{{ __('app.pryekt') }}</h6>
                                            <div class="slider_change_elem">

                                                <div class="slider-item">
                                                    <h3>{{ $port['title_'  . $lang] }}</h3>
                                                    <ul>
                                                        <li>
                                                            <h6>
                                                                @if($lang === 'ru')Местоположение @endif
                                                                @if($lang === 'uz')Manzil @endif
                                                                    :</h6>
                                                            <p>{!! $port['text_' . $lang] !!}</p>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                @if($lang === 'ru')Объем @endif
                                                                @if($lang === 'uz')Hajmi @endif
                                                                ::</h6>
                                                            <p>{{ $port->kv_m }} кв. м.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <a href="{{ route('singlePortfolio', $port->id) }}"
                                                   class="btn ip-btn mr-3">
                                                    <span>{{ __('app.all') }}</span> <i class="fas fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

    </main>
</x-layouts.main>