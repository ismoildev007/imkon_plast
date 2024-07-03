<?php

$lang = \Illuminate\Support\Facades\App::getLocale();

?>

<x-layouts.main>
    <main  style="margin-top: 200px;">
        <section class="news-section">
            <div class="container-fluid">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-sm-6 col-lg-4 mb-3">
                            <div class="card news-card">
                                <a href="{{ route('singleBlog', ['news' => $blog->id]) }}">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABLYAAASqAQAAAABsCd/YAAAAAnRSTlMAAHaTzTgAAADHSURBVHja7cExAQAAAMKg9U9tCy+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIC3AcUOAAFRf2ftAAAAAElFTkSuQmCC"
                                         class="w-100 lazyload ewww_webp_lazy_load"
                                         alt="IMKON PLASTdan &#171;RAMAZON AKSIYASI&#187;"
                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/04/экрана-2023-04-02-в-14.34.19.jpg"
                                         decoding="async" width="1206" height="1194"
                                         data-src-webp="{{ asset('storage/' . $blog->image) }}">
                                    <noscript><img
                                                src="../wp-content/uploads/2023/04/%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0-2023-04-02-%D0%B2-14.34.19.jpg"
                                                class="w-100" alt="IMKON PLASTdan &#171;RAMAZON AKSIYASI&#187;" data-eio="l"></noscript>
                                </a>
                                <div class="card-body">
                                    <div class="post-date">
                                        <p>02.04.2023</p>
                                        <a href="{{ route('singleBlog', ['news' => $blog->id]) }}"><span>
                                                @if($lang === 'ru') Читать @endif
                                                @if($lang === 'uz') O'qish @endif
                                                @if($lang === 'en') Read @endif
                                            </span> <i class="fas fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                    <h2 class="news-title">{{ $blog['title_' . $lang] }}</h2>
                                    <!-- <p></p> -->

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


    </main>
</x-layouts.main>


{{--<?php--}}


{{--$lang = \Illuminate\Support\Facades\App::getLocale();--}}

{{--?>--}}

{{--<x-layouts.main>--}}
{{--    <main  style="margin-top: 200px;">--}}
{{--        <section class="news-section">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    @foreach($blogs as $blog)--}}
{{--                        <div class="col-sm-6 col-lg-4 mb-3">--}}
{{--                            <div class="card news-card">--}}
{{--                                <img src="/storage/{{ $blog->image }}"--}}
{{--                                     class="w-100 lazyload ewww_webp_lazy_load"--}}
{{--                                     alt="IMKON PLASTdan &#171;RAMAZON AKSIYASI&#187;"--}}
{{--                                     data-src="/storage/{{ $blog->image }}"--}}
{{--                                     decoding="async" width="1206" height="1194"--}}
{{--                                     data-src-webp="/storage/{{ $blog->image }}">--}}
{{--                                <noscript><img--}}
{{--                                            src="/storage/{{ $blog->image }}"--}}
{{--                                            class="w-100" alt="IMKON PLASTdan &#171;RAMAZON AKSIYASI&#187;" data-eio="l"></noscript>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="post-date">--}}
{{--                                        <p>{{ $blog->date }}</p>--}}
{{--                                        <a href="{{ route('singleBlog', ['news' => $blog->id]) }}"><span>--}}
{{--                                                                                            Читать--}}
{{--                                            </span> <i class="fas fa-long-arrow-right"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <h2 class="news-title">{{ $blog['title_' . $lang] }}</h2>--}}
{{--                                    <!-- <p></p> -->--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}


{{--    </main>--}}
{{--</x-layouts.main>--}}