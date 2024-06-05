<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Xodimlarimiz</h4>
                        @if($errors->any())
                            <span class="text-danger">Lavozim maydonlari bo'sh qaytishi mumkin emas</span>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <button class="btn" onClick="changeLang('uz')" style="background: #0c4a4a">UZ</button>
                                <button class="btn" onClick="changeLang('ru')" style="background-color: #0c4a6e">RU</button>
                                <button class="btn" onClick="changeLang('en')" style="background-color: #0c4a8e">EN</button>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('system_team.store')}}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    {{-- uz --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <label for="" class="form-label">F.I.SH</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="full_name" placeholder="Familiya ism sharif">
                            @error('full_name')
                            <label for="" class="form-label text-danger">ism familiya kiritish majburiy</label>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="email" placeholder="Email">
                            @error('email')
                            <label for="" class="form-label text-danger">Email kiritish majburiy</label>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5 uz">
                            <label for="" class="form-label">Lavozimi UZ</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="position_uz" placeholder="Lavozim UZ">
                            @error('position_uz')
                            <label for="" class="form-label text-danger">Lavozimni kiritish majburiy</label>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5 ru">
                            <label for="position_ru" class="form-label">Lavozimi RU</label>
                            <input type="text" id="position_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="position_ru" placeholder="Lavozim RU">
                            @error('position_ru')
                            <label for="" class="form-label text-danger">Lavozimni kiritish majburiy</label>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5 en">
                            <label class="form-label">Lavozimi EN</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="position_en" placeholder="Lavozim EN">
                            @error('position_en')
                            <label for="" class="form-label text-danger">Lavozimni kiritish majburiy</label>
                            @enderror
                        </div>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-4 mb-25">
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image" placeholder="Rasmni kiriting">
                            @error('image')
                            <label for="" class="form-label text-danger">Rasm kiritish majburiy</label>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25">
                            <div class="mb-3">
                                <div id="specifications"></div>
                                <button type="button" class="btn btn-sm btn-primary" onclick="addSpecification()">qo'shish</button>
                                <label for="specifications" class="form-label">Hodim ish vaqti</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="layout-button mt-0">
                                <a href="{{ route('system_team.index')}}" class="btn btn-default btn-squared btn-light">cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared">save</button>
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
        function addSpecification() {
            var container = document.getElementById('specifications');
            var specificationGroup = document.createElement('div');
            specificationGroup.classList.add('input-group', 'mb-3');

            var inputName = document.createElement('input');
            inputName.setAttribute('type', 'text');
            inputName.setAttribute('name', 'specifications[][dateDay]');
            inputName.setAttribute('placeholder', 'xafta kunni kiriting');
            inputName.classList.add('form-control');

            var inputValue = document.createElement('input');
            inputValue.setAttribute('type', 'text');
            inputValue.setAttribute('name', 'specifications[][timeDay]');
            inputValue.setAttribute('placeholder', 'qabul vaqtini kiriting');
            inputValue.classList.add('form-control');

            var deleteButton = document.createElement('button');
            deleteButton.setAttribute('type', 'button');
            deleteButton.classList.add('btn', 'btn-danger');
            deleteButton.innerHTML = 'Delete';
            deleteButton.addEventListener('click', function() {
                specificationGroup.remove();
            });

            specificationGroup.appendChild(inputName);
            specificationGroup.appendChild(inputValue);
            specificationGroup.appendChild(deleteButton);

            container.appendChild(specificationGroup);
        }
    </script>
</x-layouts.admin>
