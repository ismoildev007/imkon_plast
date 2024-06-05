<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Missiyalar</h4>
                        <h5 class="text-danger">{{ $errors->first('pdf') }}</h5>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Missiyalar index</a></li>
                                <li class="breadcrumb-item active">Missiyalar create</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('mission.store')}}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    {{-- uz --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_uz" placeholder="Title UZ" value="{{ old('title_uz') }}">
                            @if ($errors->has('title_uz'))
                                <span class="text-danger">{{ $errors->first('title_uz') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_ru" placeholder="Title RU" value="{{ old('title_ru') }}">
                            @if ($errors->has('title_ru'))
                                <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_en" placeholder="Title EN" value="{{ old('title_en') }}">
                            @if ($errors->has('title_en'))
                                <span class="text-danger">{{ $errors->first('title_en') }}</span>
                            @endif
                        </div>
                    </div>

                    {{-- description_uz --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Description_uz</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_uz" style="height: 300px;">
                                            {!! old('description_uz') !!}
                                        </div>
                                        <input type="hidden" name="description_uz" id="description_uz">
                                        @if ($errors->has('description_uz'))
                                            <span class="text-danger">{{ $errors->first('description_uz') }}</span>
                                        @endif
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
                                        <h4 class="header-title">Description_ru</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_ru" style="height: 300px;">
                                            {!! old('description_ru') !!}
                                        </div>
                                        <input type="hidden" name="description_ru" id="description_ru">
                                        @if ($errors->has('description_ru'))
                                            <span class="text-danger">{{ $errors->first('description_ru') }}</span>
                                        @endif
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
                                        <h4 class="header-title">Description_en</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_en" style="height: 300px;">
                                            {!! old('description_en') !!}
                                        </div>
                                        <input type="hidden" name="description_en" id="description_en">
                                        @if ($errors->has('description_en'))
                                            <span class="text-danger">{{ $errors->first('description_en') }}</span>
                                        @endif
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-6 my-5 mb-25">
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image" placeholder="Rasmni kiriting">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6 my-5 mb-25">
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="pdf" placeholder="Pdfni yuklang">
                            @if ($errors->has('pdf'))
                                <span class="text-danger">{{ $errors->first('pdf') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('mission.index')}}" class="btn btn-default btn-squared btn-light px-20">cancel</a>
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
            document.getElementById('description_uz').value = editorUz.root.innerHTML;
            document.getElementById('description_ru').value = editorRu.root.innerHTML;
            document.getElementById('description_en').value = editorEn.root.innerHTML;
        }
    </script>
</x-layouts.admin>
