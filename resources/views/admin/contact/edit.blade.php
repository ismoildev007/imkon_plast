<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Edit Contact</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <button class="btn" onClick="changeLang('uz')" style="background: #0c4a4a">UZ</button>
                                <button class="btn" onClick="changeLang('ru')" style="background-color: #0c4a6e">RU</button>
                                <button class="btn" onClick="changeLang('en')" style="background-color: #0c4a8e">EN</button>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('contact.update', $contact->id)}}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    @method('PUT')

                    {{-- Email --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="email" value="{{ $contact->email }}" placeholder="Email" required>
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="address" value="{{ $contact->address }}" placeholder="Address" required>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="phone" value="{{ $contact->phone }}" placeholder="Phone" required>
                        </div>
                    </div>

                    {{-- Instagram --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="instagram" value="{{ $contact->instagram }}" placeholder="Instagram">
                        </div>
                    </div>

                    {{-- Telegram --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="telegram" value="{{ $contact->telegram }}" placeholder="Telegram">
                        </div>
                    </div>

                    {{-- Facebook --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="facebook" value="{{ $contact->facebook }}" placeholder="Facebook">
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <div class="layout-button mt-0">
                                <a href="{{ route('contact.index')}}" class="btn btn-default btn-squared btn-light px-20">cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
