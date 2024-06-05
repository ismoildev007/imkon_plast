<?php


$lang = \Illuminate\Support\Facades\App::getLocale();


?>


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
            <div class="row mb-3">
                <div>
                    <a class="btn btn-primary" href="{{ route('company_structure.create') }}">Yaratish</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Title {{ $lang }}</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companyStructure as $structure)
                                    <tr>
                                        <td>{!! $structure->title_uz !!}</td>
                                        <td>
                                            @if ($structure->image)
                                                <img src="{{ asset('storage/' . $structure->image) }}" alt="Image" class="img-fluid" style="width: 100px; height: 70px;">
                                            @endif
                                        </td>
                                        <td>
                                            <div class="mx-1 d-inline-block">
                                                <a href="{{ route('company_structure.edit', $structure->id) }}"><i class="mdi mdi-book-edit-outline fs-3"></i></a>
                                            </div>
                                            <div class="mx-1 d-inline-block">
                                                <a href="{{ route('company_structure.show', $structure->id) }}"><i class="mdi mdi-eye fs-3"></i></a>
                                            </div>
                                            <div class="mx-1 d-inline-block">
                                                <form action="{{ route('company_structure.destroy', $structure->id) }}" method="POST" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background: none; color: rgb(181 146 255); cursor: pointer;"><i class="mdi mdi-trash-can-outline fs-3"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->
</x-layouts.admin>
