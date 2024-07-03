<?php

$lang = \Illuminate\Support\Facades\App::getLocale()


?>

<x-layouts.main>
        <main style="margin-top: 200px;">
        <section>
            <div class="container-fluid">
                <div class="row catalog-navs">
                    <div class="col-md-3 mb-3  tabs">
                        @foreach($category as $cat)
                            <span class="nav-link catalog" style="cursor: pointer" data-cont="{{ $cat->id }}">{{ $cat['name_' . $lang] }}</span>
                        @endforeach


                    </div>
                    <div class="col-md-9 ">
                        <div class="row content">
                                @foreach($catologs as $catolog)
                                    <div class="col-sm-6 mb-4 {{ $catolog->category_id }}">
                                        <div class="card product-card  h-100">
                                            <div class="row xl-rev no-gutters h-100">
                                                <div class="col-xl-7">
                                                    <div class="card-body">
                                                        <h2 class="card-title">{{ $catolog['title_' . $lang] }}</h2>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABLAAAASwAQAAAADDWo5iAAAAAnRSTlMAAHaTzTgAAADGSURBVHja7cExAQAAAMKg9U9tCU+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOBvw+4AAZdzZFoAAAAASUVORK5CYII="
                                                         class="w-100 lazyload ewww_webp_lazy_load" alt="..."
                                                         data-src="https://imkon-plast.uz/wp-content/uploads/2023/02/Frame-36.png"
                                                         decoding="async" width="1200" height="1200"
                                                         data-src-webp="{{ asset('storage/' . $catolog->image) }}">
                                                    <noscript><img src="../wp-content/uploads/2023/02/Frame-36.png" class="w-100"
                                                                   alt="..." data-eio="l"></noscript>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>


        </section>


    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let tabs = document.querySelectorAll(".tabs span");
            let products = document.querySelectorAll(".content > div");

            tabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    // Remove 'active' class from all tabs
                    tabs.forEach(t => t.classList.remove("active"));
                    // Add 'active' class to the clicked tab
                    tab.classList.add("active");

                    // Get the category ID from data-cont attribute
                    let categoryId = tab.getAttribute("data-cont");

                    // Show products of the selected category and hide others
                    products.forEach(product => {
                        if (product.classList.contains(categoryId)) {
                            product.style.display = "block";
                        } else {
                            product.style.display = "none";
                        }
                    });
                });
            });
        });
    </script>

</x-layouts.main>