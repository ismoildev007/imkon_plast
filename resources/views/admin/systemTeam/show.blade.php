<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
?>

<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- Start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Hodimlarimiz</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="{{ route('system_team.index') }}">Bosh sahifa</a></li>
                                <li class="breadcrumb-item active">Hodimlarimiz show</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">F.I.SH</label>
                                    <p>{{ $systemTeam->full_name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Lavozim {{ $lang }}</label>
                                    <p>{!! $systemTeam['position_' . $lang] !!}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Image</label>
                                    @if ($systemTeam->image)
                                        <img src="{{ asset('storage/' . $systemTeam->image) }}" alt="Logo" class="img-fluid">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" style="text-transform: uppercase">Hodim ish vaqti</label>
                                    <div id="specifications">
                                        @forelse ($systemTeam->systems as $index => $specification)
                                            <div class="specification-item d-flex">
                                                <p><strong>Kun:</strong> {{ $specification->dateDay }}</p>: -- :
                                                <p><strong>Vaqt:</strong> {{ $specification->timeDay }}</p>
                                            </div>
                                        @empty
                                            <p>No specifications available</p>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('system_team.edit', $systemTeam->id) }}" class="btn btn-primary btn-squared px-30">Edit</a>
                                    <a href="{{ route('system_team.index') }}" class="btn btn-default btn-squared btn-light px-20">Back to list</a>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                            </div>
                        </div> <!-- End card body -->
                    </div> <!-- End card -->
                </div><!-- End col -->
            </div>
            <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- End content -->
</x-layouts.admin>
