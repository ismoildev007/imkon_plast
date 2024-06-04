<x-layouts.admin>

    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Kompaniya Strukturasi</h4>
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
            <!-- end page title -->
            <div class="row mb-3">
                <div>
                    <a class="btn btn-primary" href="{{ route('company_structure.index') }}">Orqaga qaytish</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title uz">{!! $companyStructure->title_uz !!}</h4>
                            <h4 class="header-title ru">{!! $companyStructure->title_ru !!}</h4>
                            <h4 class="header-title en">{!! $companyStructure->title_en !!}</h4>
                            <hr>
                            @if ($companyStructure->image)
                                <img src="{{ asset('storage/' . $companyStructure->image) }}" alt="Image" class="img-fluid mt-3">
                            @endif
                        </div>
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->

</x-layouts.admin>
