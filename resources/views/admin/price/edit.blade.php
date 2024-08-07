<?php

$lang = \Illuminate\Support\Facades\App::getLocale()

?>

<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Narxlarimiz tahrirlash</h4>
                    </div>
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="d-none d-lg-block">--}}
{{--                            <ol class="breadcrumb m-0 float-end">--}}
{{--                                <button class="btn" onClick="changeLang('uz')" style="background: #0c4a4a">UZ</button>--}}
{{--                                <button class="btn" onClick="changeLang('ru')" style="background-color: #0c4a6e">RU</button>--}}
{{--                                <button class="btn" onClick="changeLang('en')" style="background-color: #0c4a8e">EN</button>--}}
{{--                            </ol>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('price.update', $price->id) }}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    @method('PUT')
                    {{-- uz --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_uz" class="form-label">Title uz</label>
                            <input type="text" id="title_uz" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_uz" value="{{ $price->title_uz }}" placeholder="Title UZ">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_ru" class="form-label">Title ru</label>
                            <input type="text" id="title_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_ru" value="{{ $price->title_ru }}" placeholder="Title RU">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_en" class="form-label">Title en</label>
                            <input type="text" id="title_en" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_en" value="{{ $price->title_en }}" placeholder="Title EN">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="narx" class="form-label">Narx</label>
                            <input type="text" id="narx" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="price" value="{{ $price->price }}" placeholder="Mahsulot narxi">
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <label for="" class="form-label">Category name</label>
                        <select name="price_id" class="form-control" id="">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('price.index') }}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Saqlash</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editorUz = new Quill('#editor_uz', {
            theme: 'snow'
        });
        var editorRu = new Quill('#editor_ru', {
            theme: 'snow'
        });
        var editorEn = new Quill('#editor_en', {
            theme: 'snow'
        });

        function updateEditorContent() {
            document.getElementById('text_uz').value = editorUz.root.innerHTML;
            document.getElementById('text_ru').value = editorRu.root.innerHTML;
            document.getElementById('text_en').value = editorEn.root.innerHTML;
        }
    </script>
</x-layouts.admin>
