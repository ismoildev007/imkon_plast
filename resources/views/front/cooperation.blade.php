<x-layouts.main>
    <main>
        <section class="contact-section">
            <div class="container-fluid">
                <div class="row md-rev">
                    <div class="col-lg-6 mb-3">
                        <form action="/telegram.php" method="POST">
                            <h3 class="text-center mb-4">Задать вопрос</h3>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nameInp">Имя</label>
                                        <input name="user_name" required="" type="text" id="nameInp" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="telInp">Телефон</label>
                                        <input type="text" required="" name="user_phone" id="telInp"
                                               data-plugin="phone-mask" class="form-control"
                                               placeholder="+998 (__) ___-__-__">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationTextarea">Введите вопрос</label>
                                    <textarea name="textarea" class="form-control" id="validationTextarea"
                                              required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn ip-btn-outlook w-100">
                                Отправить
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <h2 class="mb-4">Контакты</h2>
                        <ul>
                            <li class="mb-4"><i class="fas fa-envelope"></i><span>info@imkon-plast.uz</span></li>
                            <li class="mb-4"><i class="fas fa-map-marker-alt"></i><span>г. Ташкент, Шайхантахурский район, ул. Себзар 8</span>
                            </li>
                            <li class="mb-4"><i class="fas fa-phone-alt"></i><span>95 111 11 11</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="question_sec">
            <div class="container-fluid">
                <div class="row md-rev">
                    <div class="col-lg-6 mb-3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA5gAAAH8AQAAAACcST11AAAAAnRSTlMAAHaTzTgAAABQSURBVHja7cExAQAAAMKg9U9tCy+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPgbmMAABJIV9swAAAABJRU5ErkJggg==" class="w-100 lazyload ewww_webp_lazy_load" alt="img" data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/1.png" decoding="async" width="920" height="508" data-src-webp="https://imkon-plast.uz/wp-content/uploads/2023/02/1.png.webp"><noscript><img src="https://imkon-plast.uz/wp-content/uploads/2023/02/1.png" class="w-100" alt="img" data-eio="l"></noscript></div>
                    <div class="col-lg-6 mb-3">
                        <h2>Часто задаваемые вопросы</h2>
                        <div class="accordion" id="accordionExample">
                                                    <div class="card question-accardion">
                                    <div class="card-header" id="headingOne0">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left  " type="button" data-toggle="collapse" data-target="#collapseOne0" aria-expanded="true" aria-controls="collapseOne0">
                                                <p>Вопрос 1</p>
                                                <span>
                                                    <i class="fal fa-plus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne0" class="collapse show" aria-labelledby="headingOne0" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Ответ 1                                </div>
                                    </div>
                                </div>
                                                    <div class="card question-accardion">
                                    <div class="card-header" id="headingOne1">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left  collapsed" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                <p>Вопрос 2</p>
                                                <span>
                                                    <i class="fal fa-plus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne1" class="collapse " aria-labelledby="headingOne1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Ответ 2                                </div>
                                    </div>
                                </div>
                                                    <div class="card question-accardion">
                                    <div class="card-header" id="headingOne2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left  collapsed" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                <p>Вопрос 3</p>
                                                <span>
                                                    <i class="fal fa-plus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne2" class="collapse " aria-labelledby="headingOne2" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Ответ 3                                </div>
                                    </div>
                                </div>
                                            </div>
                    </div>
                </div>
            </div>
        </section> -->

    </main>
</x-layouts.main>