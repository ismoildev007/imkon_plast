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
                        <h4 class="page-title mb-0">Yangiliklar Ro'yxati</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                                <li class="breadcrumb-item active">Yangiliklar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row mb-3">
                <div>
                    <a class="btn btn-primary" href="{{ route('news.create') }}">Create</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Title {{ $lang }}</th>
                                    <th>Description {{ $lang }}</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $new)
                                    <tr>
                                        <td>{{ $new['title_' . $lang] }}</td>
                                        <td class="truncate-multiline">{!! $new['description_' . $lang] !!}</td>
                                        <td>{{ $new->date }}</td>
                                        <td>
                                            <div class="mx-1 d-inline-block">
                                                <a href="{{ route('news.edit', $new->id) }}"><i class="mdi mdi-book-edit-outline fs-3"></i></a>
                                            </div>
                                            <div class="mx-1 d-inline-block">
                                                <a href="{{ route('news.show', $new->id) }}"><i class="mdi mdi-eye fs-3"></i></a>
                                            </div>
                                            <div class="mx-1 d-inline-block">
                                                <form action="{{ route('news.destroy', $new->id) }}" method="POST" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                            {{ $news->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->

    <script>
        function truncateWords(element, wordCount) {
            let text = element.innerHTML;
            let words = text.split(' ');
            if (words.length > wordCount) {
                text = words.slice(0, wordCount).join(' ') + '...';
                element.innerHTML = text;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const textContainer = document.getElementById('text-container');
            truncateWords(textContainer, 35);
        });
    </script>
</x-layouts.admin>