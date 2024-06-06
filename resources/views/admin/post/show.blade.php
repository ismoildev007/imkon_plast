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
                        <h4 class="page-title mb-0">Ochiq malumotlar</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Ochiq malumotlar</a></li>
                                <li class="breadcrumb-item active">Ochiq malumotlar show</li>
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
                                    <p>{{ $post['title_' . $lang] }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Description {{ $lang }}</label>
                                    <p>{!! $post['description_' . $lang] !!}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Image</label>
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Image" class="img-fluid">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="" class="form-label">PostCategory</label>
                                    <p>{{ $post->post_category['name_' . $lang] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-squared px-30 mb-3">Edit</a><br>
                                    <a href="{{ route('post.index') }}" class="btn btn-default btn-squared btn-light px-20">Back to list</a>

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
