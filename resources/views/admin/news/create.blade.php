<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Yangiliklar</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                                <li class="breadcrumb-item active">Yangiliklar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('news.store')}}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    {{-- uz --}}
                    <div class="row uz">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_uz" placeholder="Title UZ">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_ru" placeholder="Title RU">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_en" placeholder="Title EN">
                        </div>
                    </div>

                    {{-- description_uz --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">text_uz</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_uz" style="height: 300px;">
                                            <!-- Quill editor content -->
                                        </div>
                                        <input type="hidden" name="text_uz" id="text_uz">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                    </div>

                    {{-- description_ru --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">text_ru</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_ru" style="height: 300px;">
                                            <!-- Quill editor content -->
                                        </div>
                                        <input type="hidden" name="text_ru" id="text_ru">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                    </div>

                    {{-- description_en --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">text_en</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_en" style="height: 300px;">
                                            <!-- Quill editor content -->
                                        </div>
                                        <input type="hidden" name="text_en" id="text_en">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-4 mb-25">
                            <input type="date" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="date" placeholder="sanani kiriting">
                        </div>
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('partner.index')}}" class="btn btn-default btn-squared btn-light px-20">cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">save</button>
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
