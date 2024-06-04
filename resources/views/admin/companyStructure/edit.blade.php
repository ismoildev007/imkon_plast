<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Kompaniya Strukturasi tahrirlash</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                                <li class="breadcrumb-item active">Kompaniya Strukturasi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('company_structure.update', $companyStructure->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- title fields --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <label for="" class="form-label">Title uz</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_uz" value="{{ $companyStructure->title_uz }}" placeholder="Title UZ">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="" class="form-label">Title ru</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_ru" value="{{ $companyStructure->title_ru }}" placeholder="Title RU">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="" class="form-label">Title en</label>
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_en" value="{{ $companyStructure->title_en }}" placeholder="Title EN">
                        </div>
                    </div>

                    {{-- image upload --}}
                    <div class="row">
                        <div class="col-md-6 my-5 mb-25">
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image" placeholder="Rasmni kiriting">
                            @if ($companyStructure->image)
                                <img src="{{asset('storage/' . $companyStructure->image) }}" alt="Image" class="img-fluid mt-3">
                            @endif
                        </div>
                    </div>

                    {{-- form actions --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('company_structure.index') }}" class="btn btn-default btn-squared btn-light px-20">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
