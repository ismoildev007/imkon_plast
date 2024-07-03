<?php

$lang = \Illuminate\Support\Facades\App::getLocale();


?>

<x-layouts.main>
    <main style="margin-top: 200px;">
        <main id="primary" class="site-main">


            <section class="news-section">
                <div class="container-fluid">
                        <div class="news-in">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABLYAAASqAQAAAABsCd/YAAAAAnRSTlMAAHaTzTgAAADHSURBVHja7cExAQAAAMKg9U9tCy+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIC3AcUOAAFRf2ftAAAAAElFTkSuQmCC"
                                 class="w-100 lazyload ewww_webp_lazy_load" alt="IMKON PLASTdan &#171;RAMAZON AKSIYASI&#187;"
                                 data-src="https://imkon-plast.uz/wp-content/uploads/2023/04/экрана-2023-04-02-в-14.34.19.jpg"
                                 decoding="async" width="1206" height="1194"
                                 data-src-webp="{{ asset('storage/' . $news->image) }}">
                            <noscript><img
                                        src="../../wp-content/uploads/2023/04/%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0-2023-04-02-%D0%B2-14.34.19.jpg"
                                        class="w-100" alt="IMKON PLASTdan &#171;RAMAZON AKSIYASI&#187;" data-eio="l"></noscript>
                            <p class="post-date">{{ $news->date }}</p>
                            <h2 class="post-title">{{ $news['title_' . $lang] }}</h2>
                            <p></p>
                        </div>
                </div>
            </section>
        </main><!-- #main -->


    </main>
</x-layouts.main>