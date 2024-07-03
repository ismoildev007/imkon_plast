<?php

$lang = \Illuminate\Support\Facades\App::getLocale()


?>



<x-layouts.main>
    <main style="margin-top: 200px;">
        <section>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <!-- <div class="col-xl-2 mb-4">
                        <ul class="nav nav-tabs ip_option_nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="whyWe-tab" data-toggle="tab" data-target="#whyWe" type="button" role="tab" aria-controls="whyWe" aria-selected="true">Почему IMKON PLAST?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="map-tab" data-toggle="tab" data-target="#map" type="button" role="tab" aria-controls="map" aria-selected="false">Наши офисы</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="recomendation-tab" data-toggle="tab" data-target="#recomendation" type="button" role="tab" aria-controls="recomendation" aria-selected="false">Рекомендации</button>
                            </li>
                        </ul>

                    </div> -->
                    <div class="col-xl-10">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="whyWe" role="tabpanel" aria-labelledby="whyWe-tab">
                                <h2 class="section-title text-center">
                                    @if($lang === 'ru') ПВХ ПРОФИЛИ ОТ IMKONPLAST @endif
                                    @if($lang === 'uz') IMKONPLAST DAN PVX PROFILLAR @endif
                                    @if($lang === 'en') PVC PROFILES FROM IMKONPLAST @endif
                                </h2>
                                <div class="row pb-5">
                                    @foreach($customers as $custom)
                                        <div class="col-md-6 col-xl-4 mb-3">
                                            <div class="card-tab h-100">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADsAQAAAAAZHtQTAAAAAnRSTlMAAHaTzTgAAAAcSURBVFjD7cEBDQAAAMKg909tDwcUAAAAAADwYhf4AAF2QuqSAAAAAElFTkSuQmCC"
                                                     alt="1"
                                                     data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Group-1262.png"
                                                     decoding="async" class="lazyload ewww_webp_lazy_load" width="200"
                                                     height="236"
                                                     data-src-webp="{{ asset('storage/' . $custom->image) }}">
                                                <noscript><img src="../wp-content/uploads/2023/02/Group-1262.png" alt="1"
                                                               data-eio="l"></noscript>
                                                <h4>{{ $custom['title_' . $lang] }}</h4>
                                                <p>{!! $custom['description_' . $lang] !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                                <div class="row md-rev">
                                    <div class="col-lg-9">

                                        <div class="tab-content" id="myTabContent1">
                                                                                    <div class="tab-pane fade active show" id="home0" role="tabpanel" aria-labelledby="home-tab0">
                                                    <div class="map">
                                                        <iframe  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.2432477025645!2d69.23798661519383!3d41.28181017927403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b6e4b935e71%3A0x23dcb84871bf5454!2sPerfect%20media!5e0!3m2!1sru!2s!4v1676452053872!5m2!1sru!2s" class="lazyload"></iframe>                                            </div>
                                                </div>
                                                                                    <div class="tab-pane fade " id="home1" role="tabpanel" aria-labelledby="home-tab1">
                                                    <div class="map">
                                                        <iframe  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.2432477025645!2d69.23798661519383!3d41.28181017927403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b6e4b935e71%3A0x23dcb84871bf5454!2sPerfect%20media!5e0!3m2!1sru!2s!4v1676452053872!5m2!1sru!2s" class="lazyload"></iframe>                                            </div>
                                                </div>
                                                                                    <div class="tab-pane fade " id="home2" role="tabpanel" aria-labelledby="home-tab2">
                                                    <div class="map">
                                                        <iframe  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.2432477025645!2d69.23798661519383!3d41.28181017927403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b6e4b935e71%3A0x23dcb84871bf5454!2sPerfect%20media!5e0!3m2!1sru!2s!4v1676452053872!5m2!1sru!2s" class="lazyload"></iframe>                                            </div>
                                                </div>
                                                                            </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="nav nav-tabs map_controls" id="myTab1" role="tablist">
                                                                                    <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="home-tab0" data-toggle="tab" data-target="#home0" type="button" role="tab" aria-controls="home0" aria-selected="true">1</button>
                                                </li>
                                                                                    <li class="nav-item" role="presentation">
                                                    <button class="nav-link " id="home-tab1" data-toggle="tab" data-target="#home1" type="button" role="tab" aria-controls="home1" aria-selected="true">2</button>
                                                </li>
                                                                                    <li class="nav-item" role="presentation">
                                                    <button class="nav-link " id="home-tab2" data-toggle="tab" data-target="#home2" type="button" role="tab" aria-controls="home2" aria-selected="true">3</button>
                                                </li>
                                                                            </ul>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="recomendation" role="tabpanel" aria-labelledby="recomendation-tab">

                                <h2 class="section-title text-center">Уход за изделями</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus lobortis sollicitudin adipiscing diam. Sed integer rhoncus ut malesuada orci dui.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus lobortis sollicitudin adipiscing diam. Sed integer rhoncus ut malesuada orci dui.  </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</x-layouts.main>