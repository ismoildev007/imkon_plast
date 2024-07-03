<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Sertifikat o'zgartirish</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="card-body py-md-30">
                <form action="{{ route('sertificate.update', $sertificate->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-25 my-5">
                            <label for="image1" class="form-label">Image 1</label>
                            <input type="file" class="form-control" name="image1">
                            @if ($sertificate->image1)
                                <img src="{{ asset('storage/' . $sertificate->image1) }}" alt="Image 1" class="img-fluid mt-2">
                            @endif
                        </div>
                        <div class="col-md-6 mb-25 my-5">
                            <label for="image2" class="form-label">Image 2</label>
                            <input type="file" class="form-control" name="image2">
                            @if ($sertificate->image2)
                                <img src="{{ asset('storage/' . $sertificate->image2) }}" alt="Image 2" class="img-fluid mt-2">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <div class="layout-button mt-0">
                                <a href="{{ route('sertificate.index') }}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Saqlash</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
