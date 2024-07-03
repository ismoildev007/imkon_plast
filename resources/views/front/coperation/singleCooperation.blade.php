<?php

$lang = \Illuminate\Support\Facades\App::getLocale()


?>


<x-layouts.main>
    <main style="margin-top: 200px;">
        <section>
            <div class="container-fluid">
                <h2 class="text-center">
                    @if($lang === 'ru') Какие возможности вы получите <br> в сотрудничестве с нами? @endif
                    @if($lang === 'uz') Biz bilan hamkorlikda nima imkoniyatlarini olishasiz? @endif
                    @if($lang === 'en') What opportunities will you get <br> in cooperation with us? @endif
                </h2>
                <h3 class="text-center mb-5"></h3>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card opportunity-card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-6">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbsAAAEIAQAAAADuTGdoAAAAAnRSTlMAAHaTzTgAAAAlSURBVGje7cExAQAAAMKg9U9tCU+gAAAAAAAAAAAAAAAAAADgbzrIAAHrHe/jAAAAAElFTkSuQmCC"
                                         class="w-100 lazyload ewww_webp_lazy_load" alt="1"
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-1.png"
                                         decoding="async" width="443" height="264"
                                         data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-1.png.webp">
                                    <noscript><img src="../../wp-content/uploads/2023/02/Mask-group-1.png" class="w-100"
                                                   alt="1" data-eio="l"></noscript>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <h4>
                                            @if($lang === 'ru') Высокая доля до 70% @endif
                                            @if($lang === 'uz') 70% gacha yuqori ulush @endif
                                            @if($lang === 'en') High share up to 70% @endif
                                        </h4>
                                        <p>
                                            @if($lang === 'ru') Вы получите материалы по оптовой цене @endif
                                            @if($lang === 'uz') Siz materiallarni ulgurji narxlarda olasiz @endif
                                            @if($lang === 'en') You will receive materials at wholesale prices @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card opportunity-card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-6">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbsAAAEIAQAAAADuTGdoAAAAAnRSTlMAAHaTzTgAAAAlSURBVGje7cExAQAAAMKg9U9tCU+gAAAAAAAAAAAAAAAAAADgbzrIAAHrHe/jAAAAAElFTkSuQmCC"
                                         class="w-100 lazyload ewww_webp_lazy_load" alt="2"
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-2.png"
                                         decoding="async" width="443" height="264"
                                         data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-2.png.webp">
                                    <noscript><img src="../../wp-content/uploads/2023/02/Mask-group-2.png" class="w-100"
                                                   alt="2" data-eio="l"></noscript>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <h4>
                                            @if($lang === 'ru') Обучение как качественно изготавливать окон и дверей? @endif
                                            @if($lang === 'uz') Yuqori sifatli deraza va eshiklarni qanday yasash bo'yicha trening? @endif
                                            @if($lang === 'en') Training on how to make high-quality windows and doors? @endif
                                        </h4>
                                        <p>
                                            @if($lang === 'ru') Мы сами вам покажем как качественно и правильно сделать продукции @endif
                                            @if($lang === 'uz') Biz o'zimiz sizga mahsulotlarni qanday qilib sifatli va to'g'ri tayyorlashni ko'rsatamiz. @endif
                                            @if($lang === 'en') We ourselves will show you how to make products with high quality and correctly. @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card opportunity-card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-6">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbsAAAEIAQAAAADuTGdoAAAAAnRSTlMAAHaTzTgAAAAlSURBVGje7cExAQAAAMKg9U9tCU+gAAAAAAAAAAAAAAAAAADgbzrIAAHrHe/jAAAAAElFTkSuQmCC"
                                         class="w-100 lazyload ewww_webp_lazy_load" alt="3"
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-3.png"
                                         decoding="async" width="443" height="264"
                                         data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-3.png.webp">
                                    <noscript><img src="../../wp-content/uploads/2023/02/Mask-group-3.png" class="w-100"
                                                   alt="3" data-eio="l"></noscript>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <h4>
                                            @if($lang === 'ru') Известный бренд @endif
                                            @if($lang === 'uz') Mashhur brend @endif
                                            @if($lang === 'en') Famous brand @endif
                                        </h4>
                                        <p>
                                            @if($lang === 'ru') Вам непридется потратить деньги на рекламу и продвижению товара @endif
                                            @if($lang === 'uz') Siz reklama va mahsulotni reklama qilish uchun pul sarflashingiz shart emas @endif
                                            @if($lang === 'en') You don’t have to spend money on advertising and product promotion @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card opportunity-card mb-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-6">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbsAAAEIAQAAAADuTGdoAAAAAnRSTlMAAHaTzTgAAAAlSURBVGje7cExAQAAAMKg9U9tCU+gAAAAAAAAAAAAAAAAAADgbzrIAAHrHe/jAAAAAElFTkSuQmCC"
                                         class="w-100 lazyload ewww_webp_lazy_load" alt="4"
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-4.png"
                                         decoding="async" width="443" height="264"
                                         data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/Mask-group-4.png.webp">
                                    <noscript><img src="../../wp-content/uploads/2023/02/Mask-group-4.png" class="w-100"
                                                   alt="4" data-eio="l"></noscript>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <h4>
                                            @if($lang === 'ru') Довольные клиенты @endif
                                            @if($lang === 'uz') Qoniqarli mijozlar @endif
                                            @if($lang === 'en') Satisfied clients @endif
                                        </h4>
                                        <p>
                                            @if($lang === 'ru') После наших обучении у вас значительно увеличится довольные клиенты @endif
                                            @if($lang === 'uz') Bizning treningimizdan so'ng sizda qoniqarli mijozlar soni sezilarli darajada oshadi @endif
                                            @if($lang === 'en') After our training, you will have a significant increase in satisfied clients @endif
                                        </p>
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
                <h2 class="section-title text-center">
                    @if($lang === 'ru')
                        Что о нас говорят наши партнеры
                    @endif
                    @if($lang === 'uz')
                        Hamkorlarimiz biz haqimizda nima deyishadi
                    @endif
                    @if($lang === 'en')
                        What our partners say about us
                    @endif
                </h2>
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
                <h2 class="section-title text-center">
                    @if($lang === 'ru')
                        Нам доверяют лидеры индустрии
                    @endif
                    @if($lang === 'uz')
                        Sanoat yetakchilari bizga ishonadilar
                    @endif
                    @if($lang === 'en')
                        Industry leaders trust us
                    @endif
                </h2>
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
        <section class="px-0 form-sec">
            <h2 class="section-title text-center">
                @if($lang === 'ru')
                    Хотите с нами сотрудничать?
                @endif
                @if($lang === 'uz')
                    Biz bilan hamkorlik qilishni xohlaysizmi?
                @endif
                @if($lang === 'en')
                    Want to collaborate with us?
                @endif
            </h2>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA7cAAAK2AQAAAAC9NFa/AAAAAnRSTlMAAHaTzTgAAABnSURBVHja7cEBDQAAAMKg909tDwcUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD8GEVfAAGE+v5gAAAAAElFTkSuQmCC"
                 class="abs-bg lazyload ewww_webp_lazy_load" alt="bg"
                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/form-bg.png" decoding="async" width="951"
                 height="694" data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/form-bg.png.webp">
            <noscript><img src="../wp-content/uploads/2023/02/form-bg.png" class="abs-bg" alt="bg" data-eio="l"></noscript>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA6cAAAHaAQAAAADURALrAAAAAnRSTlMAAHaTzTgAAABMSURBVBgZ7cEBDQAAAMIg+6d+DwcMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgSNp8AAEV7c6XAAAAAElFTkSuQmCC"
                         class="w-100 lazyload ewww_webp_lazy_load" alt="Hand"
                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/hand.png" decoding="async" width="935"
                         height="474" data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/hand.png.webp">
                    <noscript><img src="../wp-content/uploads/2023/02/hand.png" class="w-100" alt="Hand" data-eio="l">
                    </noscript>
                </div>
                <div class="col-lg-4">
                    <div class="ip-form">
                        <h3>
                            @if($lang === 'ru')
                                Получите бесплатную консультацию о сотрудничестве
                            @endif
                            @if($lang === 'uz')
                                Hamkorlik bo'yicha bepul maslahat oling
                            @endif
                            @if($lang === 'en')
                                Get a free consultation about collaboration
                            @endif
                        </h3>
                        <form action="/telegram.php" method="POST">
                            <div class="form-group">
                                <label for="nameInp">
                                    @if($lang === 'ru')Имя @endif
                                    @if($lang === 'uz')Ism @endif
                                    @if($lang === 'en')Name @endif
                                </label>
                                <input type="text" name="user_name" required="" class="form-control" id="nameInp"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="telInp">
                                    @if($lang === 'ru')Телефон @endif
                                    @if($lang === 'uz')Telefon raqam @endif
                                    @if($lang === 'en')Phone number @endif
                                </label>
                                <input type="text" required="" name="user_phone" class="form-control" id="telInp">
                            </div>
                            <button type="submit" class="btn ip-btn">
                                <span>
                                    @if($lang === 'ru')
                                        Проконсультироваться
                                    @endif
                                    @if($lang === 'uz')
                                        Yuborish
                                    @endif
                                    @if($lang === 'en')
                                        Consult
                                    @endif
                                </span>
                                <i class="fas fa-long-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-layouts.main>