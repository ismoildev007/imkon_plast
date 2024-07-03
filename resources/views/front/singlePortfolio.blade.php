<?php


$lang = \Illuminate\Support\Facades\App::getLocale()




?>


<x-layouts.main>
    <section class="slider_sec" style="margin-top: 200px;">
        <div class="slider">
            <div class="row no-gutters">
                <div class="col-xl-7 slider-for">
                        <div class="slider-item-img">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQAAAAO9AQAAAAD1G/fLAAAAAnRSTlMAAHaTzTgAAACsSURBVHja7cExAQAAAMKg9U9tBn+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC4DVn7AAEbZvZJAAAAAElFTkSuQmCC"
                                 class="w-100 lazyload ewww_webp_lazy_load" alt=""
                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/photo_2022-08-08_14-32-49.jpg"
                                 decoding="async" width="1280" height="957"
                                 data-src-webp="{{ asset('storage/' . $portfolio->image) }}">
                            <noscript><img src="../wp-content/uploads/2023/02/photo_2022-08-08_14-32-49.jpg" class="w-100"
                                           alt="" data-eio="l"></noscript>
                        </div>


                </div>
                <div class="col-xl-5">
                    <div class="slider_part">
                        <p class="small_text">{{ __('app.nashi') }}</p>
                        <div class="slider_text">
                            <h6 class="red-text">{{ __('app.pryekt') }}</h6>
                            <div class="slider_change_elem slider-nav">
                                    <div class="slider-item">
                                        <h2>{{ $portfolio['title_' . $lang] }}</h2>
                                        <ul>
                                            <li>
                                                <h6>
                                                    @if($lang === 'ru')Местоположение @endif
                                                    @if($lang === 'uz')Manzil @endif
                                                    :</h6>
                                                <p>{!! $portfolio['text_' . $lang] !!}</p>
                                            </li>
                                            <li>
                                                <h6>
                                                    @if($lang === 'ru')Объем @endif
                                                    @if($lang === 'uz')Hajmi @endif
                                                    ::</h6>
                                                <p>{{ $portfolio->kv_m }} кв. м.</p>
                                            </li>
                                        </ul>
                                        <div class="my-btn-group mt-3">
                                            <a href="/portfolio" type="button" class="btn ip-btn-outlook">
                                                @if($lang === 'ru') Bсе работает @endif
                                                @if($lang === 'uz') Barcha ishlar @endif
                                            </a>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>