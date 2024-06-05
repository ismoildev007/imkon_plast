<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Hamkorni tahrirlash</h4>
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
                <form action="{{ route('system_team.update', $systemTeam->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <label for="full_name" class="form-label">F.I.SH</label>
                            <input type="text" id="full_name" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="full_name" value="{{ old('full_name', $systemTeam->full_name) }}" placeholder="Familiya ism sharif">
                            @error('full_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="email" value="{{ old('email', $systemTeam->email) }}" placeholder="Email@gmail.com">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5 uz">
                            <label for="position_uz" class="form-label">position_uz</label>
                            <input type="text" id="position_uz" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="position_uz" value="{{ old('position_uz', $systemTeam->position_uz) }}" placeholder="Lavozim Uz">
                            @error('position_uz')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5 ru">
                            <label for="position_ru" class="form-label">position_ru</label>
                            <input type="text" id="position_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="position_ru" value="{{ old('position_ru', $systemTeam->position_ru) }}" placeholder="Lavozim RU">
                            @error('position_ru')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-25 my-5 en">
                            <label for="position_en" class="form-label">position_en</label>
                            <input type="text" id="position_en" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="position_en" value="{{ old('position_en', $systemTeam->position_en) }}" placeholder="Lavozim EN">
                            @error('position_en')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-25">
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image" placeholder="Rasmni kiriting">
                            @if ($systemTeam->image)
                                <img src="{{ asset('storage/' . $systemTeam->image) }}" alt="Logo" class="img-fluid mt-2">
                            @endif
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div id="specifications">
                                    @forelse ($systemTeam->systems as $index => $specification)
                                        <div class="input-group mb-3 specification-item">
                                            <input type="text" class="form-control" name="specifications[{{ $index }}][dateDay]" value="{{ old("specifications.$index.dateDay", $specification->dateDay) }}" placeholder="Xafta kunini kiritng">
                                            <input type="text" class="form-control" name="specifications[{{ $index }}][timeDay]" value="{{ old("specifications.$index.timeDay", $specification->timeDay) }}" placeholder="ish vaqtini kiriting">
                                            <button type="button" class="btn btn-danger delete-specification">Delete</button>
                                        </div>
                                    @empty
                                        <div class="input-group mb-3 specification-item">
                                            <input type="text" class="form-control" name="specifications[][dateDay]" placeholder="Xafta kunini kiritng">
                                            <input type="text" class="form-control" name="specifications[][timeDay]" placeholder="ish vaqtini kiriting">
                                            <button type="button" class="btn btn-danger delete-specification">Delete</button>
                                        </div>
                                    @endforelse
                                </div>
                                <button type="button" id="addSpecification" class="btn btn-sm btn-primary">qo'shish</button>
                                <label for="specification" class="form-label">Hodim ish vaqti</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="layout-button mt-0">
                                <a href="{{ route('partner.index') }}" class="btn btn-default btn-squared btn-light px-20">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addSpecificationBtn = document.getElementById('addSpecification');
            const specificationsContainer = document.getElementById('specifications');
            let specificationCount = {{ count(old('specifications', $systemTeam->systems)) }};

            addSpecificationBtn.addEventListener('click', function() {
                const specificationItem = document.createElement('div');
                specificationItem.classList.add('input-group', 'mb-3', 'specification-item');
                specificationItem.innerHTML = `
                <input type="text" class="form-control" name="specifications[${specificationCount}][dateDay]" placeholder="Xafta kunini kiritng">
                <input type="text" class="form-control" name="specifications[${specificationCount}][timeDay]" placeholder="ish vaqtini kiriting">
                <button type="button" class="btn btn-danger delete-specification">Delete</button>
            `;
                specificationsContainer.appendChild(specificationItem);
                specificationCount++;
            });

            specificationsContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('delete-specification')) {
                    event.target.parentElement.remove();
                }
            });
        });
    </script>

</x-layouts.admin>
