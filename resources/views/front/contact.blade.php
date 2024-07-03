<?php

$lang = \Illuminate\Support\Facades\App::getLocale()

?>


<x-layouts.main>
    <main  style="margin-top: 200px;">
        <section class="contact-section">
            <div class="container-fluid">
                <div class="row md-rev">
                    <div class="col-lg-6 mb-3">
                        <form action="/telegram.php" method="POST">
                            <h3 class="text-center mb-4">
                                @if($lang === 'ru')Задать вопрос @endif
                                @if($lang === 'uz')Savol berish @endif
                                @if($lang === 'en')Ask a Question @endif
                            </h3>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nameInp">
                                            @if($lang === 'ru')Имя @endif
                                            @if($lang === 'uz')Ism @endif
                                            @if($lang === 'en')Name @endif
                                        </label>
                                        <input name="user_name" required="" type="text" id="nameInp" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="telInp">
                                            @if($lang === 'ru')Телефон @endif
                                            @if($lang === 'uz')Telefon raqam @endif
                                            @if($lang === 'en')Phone number @endif
                                        </label>
                                        <input type="text" required="" name="user_phone" id="telInp"
                                               data-plugin="phone-mask" class="form-control"
                                               placeholder="+998 (__) ___-__-__">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationTextarea">
                                        @if($lang === 'ru')Введите вопрос @endif
                                        @if($lang === 'en')Enter a question @endif
                                        @if($lang === 'uz')Savol kiriting @endif
                                    </label>
                                    <textarea name="textarea" class="form-control" id="validationTextarea"
                                              required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn ip-btn-outlook w-100">
                                @if($lang === 'ru')Отправить @endif
                                @if($lang === 'uz')Yuborish @endif
                                @if($lang === 'en')Send @endif
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <h2 class="mb-4">{{ __('app.contact') }}</h2>
                        @foreach($contacts as $contact)
                            <ul>
                                <li class="mb-4"><i class="fas fa-envelope"></i><span>{{ $contact->email }}</span></li>
                                <li class="mb-4"><i class="fas fa-map-marker-alt"></i><span>{{ $contact->address }} {{-- г. Ташкент, Шайхантахурский район, ул. Себзар 8 --}}</span>
                                </li>
                                <li class="mb-4"><i class="fas fa-phone-alt"></i><span>{{ $contact->phone }}</span></li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section style="display: none;">
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                    <div class="mb-3">
                        <label for="size_height" class="form-label">Size Height</label>
                        <input type="text" class="form-control" id="size_height" name="size_height" required>
                    </div>
                    <div class="mb-3">
                        <label for="size_weight" class="form-label">Size Weight</label>
                        <input type="text" class="form-control" id="size_weight" name="size_weight" required>
                    </div>
                    <div class="mb-3">
                        <label for="shirt" class="form-label">Soni</label>
                        <input type="number" class="form-control" id="shirt" name="shirt" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </section>

    </main>
</x-layouts.main>