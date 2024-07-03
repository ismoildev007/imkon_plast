<?php

$lang = \Illuminate\Support\Facades\App::getLocale()

?>

<x-layouts.admin>

    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Narxlarimiz Show</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                                <li class="breadcrumb-item active">Narxlarimiz</li>
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
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Title {{ $lang }}</label>
                                    <p>{{ $price['title_' . $lang] }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Narxi</label>
                                    <p>{!! $price->price !!}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('price.edit', $price->id) }}" class="btn btn-primary btn-squared px-30 mb-3">O'zgartirish</a><br>
                                    <a href="{{ route('price.index') }}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>

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
