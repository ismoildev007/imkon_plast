<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Hamkorlar logolarini o'zgartirish</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="card-body py-md-30">
                <form action="{{ route('logo.update', $logo->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-25 my-5">
                            <label for="image1" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                            @if ($logo->image)
                                <img src="{{ asset('storage/' . $logo->image) }}" alt="Image" class="img-fluid mt-2">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <div class="layout-button mt-0">
                                <a href="{{ route('logo.index') }}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Saqlash</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
