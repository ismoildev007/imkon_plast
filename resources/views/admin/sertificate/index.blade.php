<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Certificates</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Certificates</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row mb-3">
                <div>
                    <a class="btn btn-primary" href="{{ route('sertificate.create') }}">Create</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Image 1</th>
                                        <th>Image 2</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sertificates as $sertificate)
                                        <tr>
                                            <td>
                                                @if ($sertificate->image1)
                                                    <img src="{{ asset('storage/' . $sertificate->image1) }}" alt="Image 1" class="img-fluid" style="max-width: 100px;">
                                                @else
                                                    <p>No image available</p>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($sertificate->image2)
                                                    <img src="{{ asset('storage/' . $sertificate->image2) }}" alt="Image 2" class="img-fluid" style="max-width: 100px;">
                                                @else
                                                    <p>No image available</p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('sertificate.show', $sertificate->id) }}" class="btn btn-primary">View</a>
                                                <a href="{{ route('sertificate.edit', $sertificate->id) }}" class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('sertificate.destroy', $sertificate->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $sertificates->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->
</x-layouts.admin>
