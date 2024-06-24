<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Certificate Details</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="{{ route('sertificate.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Certificate</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Image 1</label>
                                    @if ($sertificate->image1)
                                        <img src="{{ asset('storage/' . $sertificate->image1) }}" alt="Image 1" class="img-fluid">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Image 2</label>
                                    @if ($sertificate->image2)
                                        <img src="{{ asset('storage/' . $sertificate->image2) }}" alt="Image 2" class="img-fluid">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('sertificate.edit', $sertificate->id) }}" class="btn btn-primary btn-squared px-30 mb-3">Edit</a>
                                    <a href="{{ route('sertificate.index') }}" class="btn btn-default btn-squared btn-light px-20">Back to list</a>
                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->
</x-layouts.admin>
