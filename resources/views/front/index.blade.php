@extends('layouts.app')
@section('content')
    <main>
        <div class="menu-layer layer">
            <div class="d-flex h-100">
                <a class="layer-close" href="javascript:;" onclick="hideLayer();"><i class="flaticon-cancel"></i> CLOSE
                </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="secondary">POPULAR ZIPPERS</h3>
                                    <div class="menu-layer-product-carousel product-list owl-carousel">

                                        <a href="/n3-separe-ters-dis-enjeksiyon-aksamli">
                                            <div class="product-card">
                                                <div class="img-holder">
                                                    <img
                                                        src="{{asset('assets/uploads/zipper.jpeg')}}"
                                                        alt="N3 OPEN END PLASTIC BOTTOM INVISIBLE TEETH  "
                                                        class="img-fluid">
                                                </div>
                                                <div class="product-name">
                                                    N3 OPEN END PLASTIC BOTTOM INVISIBLE TEETH
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/n3-o-tipi-ters-eritme-aksamli">
                                            <div class="product-card">
                                                <div class="img-holder">
                                                    <img
                                                        src="{{asset('assets/uploads/zipper.jpeg')}}"
                                                        alt="N3 X TYPE INVISIBLE TEETH MELTED STOPS" class="img-fluid">
                                                </div>
                                                <div class="product-name">
                                                    N3 X TYPE INVISIBLE TEETH MELTED STOPS
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/n3-o-ti-pi-ters-tel-aksamli">
                                            <div class="product-card">
                                                <div class="img-holder">
                                                    <img
                                                        src="{{asset('assets/uploads/zipper.jpeg')}}"
                                                        alt="N3 O TYPE INVISIBLE TEETH METALIC STOPS" class="img-fluid">
                                                </div>
                                                <div class="product-name">
                                                    N3 O TYPE INVISIBLE TEETH METALIC STOPS
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/n3-separe-gu-mu-s-dis">
                                            <div class="product-card">
                                                <div class="img-holder">
                                                    <img
                                                        src="{{asset('assets/uploads/zipper.jpeg')}}"
                                                        alt="N3 OPEN END METALIC BOTTOM SILVER TEETH "
                                                        class="img-fluid">
                                                </div>
                                                <div class="product-name">
                                                    N3 OPEN END METALIC BOTTOM SILVER TEETH
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/n3-x-tipi-tel-aksamli">
                                            <div class="product-card">
                                                <div class="img-holder">
                                                    <img
                                                        src="{{asset('assets/uploads/zipper.jpeg')}}"
                                                        alt="N3 X TYPE METALIC STOPS" class="img-fluid">
                                                </div>
                                                <div class="product-name">
                                                    N3 X TYPE METALIC STOPS
                                                </div>
                                            </div>
                                        </a></div>
                                </div>

                                <div class="col-12">
                                    <h3 class="secondary mt-5">DESIGN YOUR OWN ZIPPER</h3>
                                    <a target="_blank" href="https://fimdizayn.com/en" class="btn-fim-dizayn">
                                        <img src="{{asset('assets/uploads/zipper.jpeg')}}"
                                             class="img-fluid">
                                        <span>DESIGN</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="promotion d-flex align-items-center h-100">
                                <h5>OPENS, SHUTS, PROTECTS</h5>
                            </div>
                            <img class="img-fluid" src="{{asset('assets/uploads/zipper.jpeg')}}">
                        </div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-layer layer">
            <div class="d-flex align-items-center h-100">
                <a class="layer-close" href="javascript:;" onclick="hideLayer();"><i class="flaticon-cancel"></i> CLOSE
                </a>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form method="get" action="/en/ft">
                                <input type="text" name="search" placeholder="FIND">
                                <i class="flaticon-search"></i>
                            </form>
                            <h6>POPULAR SEARCHES</h6>
                            <ul>
                                <li><a href="/zipper">ZIPPER <i class="flaticon-right"></i></a></li>
                                <li><a href="/pullers">PULLER <i class="flaticon-right"></i></a></li>
                                <li><a href="/sliders">SLIDER <i class="flaticon-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-slider-container">
            <div class="main-slider owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(-5760px, 0px, 0px); transition: all 0.25s ease 0s; width: 11520px;">
                        @foreach($sliders as $item)
                            <div class="owl-item">
                                <a href="#">
                                    <div
                                        style="background-image: url({{'storage/'. $item->image }}); background-size: cover; background-position: center;"
                                        class="item thumb">
                                        <img class="item" style="opacity: 0;"
                                             src="{{ asset('assets/uploads/zipper.jpeg') }}"
                                             alt="img">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <section class="zip-categories">
            <section class="inner-section">
                <div class="container-fluid">
                    <div class="category-item row">
                        <div class="col-md-12">
                            <div class="section-heading primary">
                                <h2>ZIPPER TYPES</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            $items = true;
            ?>
            @foreach($categories as $category)
                <section class="inner-section mb-5">
                    <div class="container-fluid">
                        <div class="category-item row">
                            @if($items)
                                <div class="col-md-7 ">
                                    <div class="category-card align-bottom">
                                        <a href="{{route('front.zipper-category')}}">
                                            <div
                                                style="background-image: url({{'storage/'. $category->image }}); background-size: cover; background-position: center;"
                                                class="thumb">
                                                <img class="img-fluid" style="opacity: 0;"
                                                     src="{{ asset('assets/uploads/zipper.jpeg') }}"
                                                     alt="img">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 pt-md-5 text-right">
                                    <div class="category-content">
                                        <a href="/metal-fermuarlar">
                                            <h3>{{$category->title}}</h3>
                                        </a>
                                        <p>
                                            {{$category->description}}
                                        </p>
                                    </div>
                                    <div class="category-images">
                                        <a class="fancybox-group" rel="zipCategory-24"
                                           href="https://fimfermuar.com/uploads/categories/thumb/1200x800/449396af25b24ab58a0a05df9f45e116-665.jpg">
                                            <img
                                                src="{{asset('assets/uploads/zipper.jpeg')}}"
                                                alt="METAL ZIPPERS" class="img-fluid">
                                        </a>
                                        <a class="fancybox-group" rel="zipCategory-24"
                                           href="https://fimfermuar.com/uploads/categories/thumb/1200x800/5e9b73ad8ef5d8011e1b4d69549a3513-1135.jpg">
                                            <img
                                                src="{{asset('assets/uploads/zipper2.jpeg')}}"
                                                alt="METAL ZIPPERS" class="img-fluid">
                                        </a>
                                        <a class="fancybox-group" rel="zipCategory-24"
                                           href="https://fimfermuar.com/uploads/categories/thumb/1200x800/b385cbf7fb8a571d218cdc6e2b2b79ec-1136.jpeg">
                                            <img
                                                src="{{asset('assets/uploads/zipper3.jpeg')}}"
                                                alt="METAL ZIPPERS" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                    <?php
                                    $items = false;
                                    ?>
                            @else
                                <div class="col-md-5 pt-md-5">
                                    <div class="category-content">
                                        <a href="/metal-fermuarlar">
                                            <h3>{{$category->title}}</h3>
                                        </a>
                                        <p>
                                            {{$category->description}}
                                        </p>
                                    </div>
                                    <div class="category-images">
                                        <a class="fancybox-group" rel="zipCategory-24"
                                           href="https://fimfermuar.com/uploads/categories/thumb/1200x800/449396af25b24ab58a0a05df9f45e116-665.jpg">
                                            <img
                                                src="{{asset('assets/uploads/zipper.jpeg')}}"
                                                alt="METAL ZIPPERS" class="img-fluid">
                                        </a>
                                        <a class="fancybox-group" rel="zipCategory-24"
                                           href="https://fimfermuar.com/uploads/categories/thumb/1200x800/5e9b73ad8ef5d8011e1b4d69549a3513-1135.jpg">
                                            <img
                                                src="{{asset('assets/uploads/zipper2.jpeg')}}"
                                                alt="METAL ZIPPERS" class="img-fluid">
                                        </a>
                                        <a class="fancybox-group" rel="zipCategory-24"
                                           href="https://fimfermuar.com/uploads/categories/thumb/1200x800/b385cbf7fb8a571d218cdc6e2b2b79ec-1136.jpeg">
                                            <img
                                                src="{{asset('assets/uploads/zipper3.jpeg')}}"
                                                alt="METAL ZIPPERS" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="category-card align-bottom">
                                        <a href="{{route('front.zipper-category')}}">
                                            <div
                                                style="background-image: url({{'storage/'. $category->image }}); background-size: cover; background-position: center;"
                                                class="thumb">
                                                <img class="img-fluid" style="opacity: 0;"
                                                     src="{{ asset('assets/uploads/zipper.jpeg') }}"
                                                     alt="img">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                    <?php
                                    $items = true;
                                    ?>
                            @endif
                        </div>
                    </div>
                </section>
            @endforeach
        </section>

        {{--        <section class="fim-design">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-5">--}}
        {{--                        <div class="fim-design-about">--}}
        {{--                            <div class="fim-design-about">--}}
        {{--                                <iframe class="mb-4" src="https://www.youtube.com/embed/q6-iDGFD40E?autoplay=1"--}}
        {{--                                        frameborder="0" allowfullscreen="allowfullscreen"></iframe>--}}
        {{--                                <div class="section-heading primary">--}}
        {{--                                    <h2>FİM DİZAYN</h2>--}}
        {{--                                </div>--}}
        {{--                                <h2 class="firsth">HAVE YOU EVER</h2>--}}
        {{--                                <h2 class="secondh">DESIGNED YOUR <span>OWN</span> ZIPPERS BEFORE?</h2>--}}
        {{--                                <p>With the new project of Fim Fermuar, FimDizayn, you can design your own zippers--}}
        {{--                                    and--}}
        {{--                                    send--}}
        {{--                                    it to us. We will manufacture it just as you want them to be!</p>--}}
        {{--                                <strong> It is time to create your own zippers! </strong> <a class="button-link"--}}
        {{--                                                                                             href="https://fimdizayn.com/en"--}}
        {{--                                                                                             target="_blank"--}}
        {{--                                                                                             rel="noopener">--}}
        {{--                                    <img class="img-fluid"--}}
        {{--                                         src="/assets/front-face/img/core-img/sections/fim-design/button.svg"/>--}}
        {{--                                    <span>DESIGN IT</span> </a><a class="button black size-sm m-auto"--}}
        {{--                                                                  href="https://fimdizayn.com/en" target="_blank"--}}
        {{--                                                                  rel="noopener">DESIGN NOW</a></div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="col-md-6 offset-md-1">--}}
        {{--                        <div class="fim-design-preview">--}}
        {{--                            <div class="fimdizayn-carousel owl-carousel">--}}
        {{--                                <div class="item"><img--}}
        {{--                                        src="{{asset('assets/uploads/fimdizayn-3-en.jpeg')}}"></div>--}}
        {{--                                <div class="item"><img--}}
        {{--                                        src="{{asset('assets/uploads/fimdizayn-2-en.jpg')}}"></div>--}}
        {{--                                <div class="item"><img--}}
        {{--                                        src="{{asset('assets/uploads/fimdizayn-1-en.jpg')}}"></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}

        <section class="zip-parts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading primary">
                            <h2>ZIPPER COMPONENTS</h2>
                        </div>
                    </div>
                </div>
            </div>

            <section class="inner-section category-products">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="secondary mb-0 pb-0">ZIPPER</h4>
                        </div>
                        <div class="col-12">
                            <div class="category-product-carousel product-list owl-carousel">
                                <div class="product-card">
                                    <a href="/m2-dipli-gu-mu-s-dis">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="M2 CLOSED END SILVER TEETH " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M2 CLOSED END SILVER TEETH
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">M2-002</span>
                                            <a href="/m2-dipli-gu-mu-s-dis" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m2-separe-gu-mu-s-dis">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product2.png')}}"
                                                alt="M2 OPEN END SILVER TEETH " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M2 OPEN END SILVER TEETH
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">M2-003</span>
                                            <a href="/m2-separe-gu-mu-s-dis" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m2-x-tipi-gu-mu-s-dis">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="M2 X TYPE SILVER TEETH " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M2 X TYPE SILVER TEETH
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">M2-004</span>
                                            <a href="/m2-x-tipi-gu-mu-s-dis" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m2-o-tipi-gu-mu-s-dis">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product2.png')}}"
                                                alt="M2 O TYPE SILVER TEETH " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M2 O TYPE SILVER TEETH
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">M2-001</span>
                                            <a href="/m2-o-tipi-gu-mu-s-dis" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="/fermuar" class="button-link d-inline-block float-right mt-1 mt-md-5">view all
                                <i
                                    class="flaticon-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="inner-section category-products">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="secondary mb-0 pb-0">PULLERS</h4>
                        </div>
                        <div class="col-12">
                            <div class="category-product-carousel product-list owl-carousel">
                                <div class="product-card">
                                    <a href="/fi-m-101">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="FİM 101" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 101
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">ELC-001</span>
                                            <a href="/fi-m-101" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fim-310">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product2.png')}}"
                                                alt="FİM 310" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 310
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">FİM 310</span>
                                            <a href="/fim-310" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fim-309">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="FİM 309" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 309
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">FİM 309</span>
                                            <a href="/fim-309" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fim-308">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product2.png')}}"
                                                alt="FİM 308" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 308
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">FİM 308</span>
                                            <a href="/fim-308" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fim-307">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="FİM 307" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 307
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">FİM 307</span>
                                            <a href="/fim-307" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fim-306">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product2.png')}}"
                                                alt="FİM 306" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 306
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">FİM 306</span>
                                            <a href="/fim-306" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fim-305">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="FİM 305" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 305
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">FİM 305</span>
                                            <a href="/fim-305" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fi-m-102">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="FİM 102" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 102
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">ELC-002</span>
                                            <a href="/fi-m-102" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fi-m-103">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product2.png')}}"
                                                alt="FİM 103" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 103
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">ELC-003</span>
                                            <a href="/fi-m-103" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/fi-m-104">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="FİM 104" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            FİM 104
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">ELC-004</span>
                                            <a href="/fi-m-104" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="/elcikler" class="button-link d-inline-block float-right mt-1 mt-md-5">view all
                                <i
                                    class="flaticon-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="inner-section category-products">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="secondary mb-0 pb-0">SLIDERS</h4>
                        </div>
                        <div class="col-12">
                            <div class="category-product-carousel product-list owl-carousel">
                                <div class="product-card">
                                    <a href="/m8-otomatik">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="M8 AUTOLOCK" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M8 AUTOLOCK
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-042</span>
                                            <a href="/m8-otomatik" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/n3-yg-kibris-du-z">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product2.png')}}"
                                                alt="N3 YG " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            N3 YG
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-050</span>
                                            <a href="/n3-yg-kibris-du-z" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/n3-otomatik">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="N3 AUTOLOCK" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            N3 AUTOLOCK
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-049</span>
                                            <a href="/n3-otomatik" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/n3-mac-a">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="N3 HANGER " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            N3 HANGER
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-048</span>
                                            <a href="/n3-mac-a" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/n3-ko-pru">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="N3 NON-LOCK" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            N3 NON-LOCK
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-047</span>
                                            <a href="/n3-ko-pru" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/n3-kombi-go-ru-nu-m">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="N3 ELIPTICAL " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            N3 ELIPTICAL
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-046</span>
                                            <a href="/n3-kombi-go-ru-nu-m" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/n3-kanca">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="N3 HOOK" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            N3 HOOK
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-045</span>
                                            <a href="/n3-kanca" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/n3-go-vde">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="N3 BODY" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            N3 BODY
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-044</span>
                                            <a href="/n3-go-vde" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m15-go-vde">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="M15 BODY" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M15 BODY
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-043</span>
                                            <a href="/m15-go-vde" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m5-mac-a">
                                        <div class="img-holder">
                                            <img
                                                src="{{asset('assets/uploads/products/product.png')}}"
                                                alt="M5 HANGER" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M5 HANGER
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">KRS-036</span>
                                            <a href="/m5-mac-a" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="/kursorler" class="button-link d-inline-block float-right mt-1 mt-md-5">view
                                all <i
                                    class="flaticon-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="inner-section category-products">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="secondary mb-0 pb-0">KITS</h4>
                        </div>
                        <div class="col-12">
                            <div class="category-product-carousel product-list owl-carousel">
                                <div class="product-card">
                                    <a href="/m4-kelebek-h-stop">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/e72a846c738c269ad82e2e910afc0f1f-353.png"
                                                alt="M4 KELEBEK H STOP" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M4 KELEBEK H STOP
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-001</span>
                                            <a href="/m4-kelebek-h-stop" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m4-ust-stop">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/319aca54598db2d96a49a04754d2f771-354.png"
                                                alt="M4 TOP STOP " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M4 TOP STOP
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-002</span>
                                            <a href="/m4-ust-stop" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m5-kelebek-h-stop">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/1287f9530b09a17ef99fe811be26c189-355.png"
                                                alt="M5 BUTTERFLY H STOP" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M5 BUTTERFLY H STOP
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-003</span>
                                            <a href="/m5-kelebek-h-stop" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m5-n5-alt-stop">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/f704a71e95c339952f0ead00bb5ce17a-357.png"
                                                alt="M5-N5 BOTTOM STOP" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M5-N5 BOTTOM STOP
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-005</span>
                                            <a href="/m5-n5-alt-stop" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m5-ust-stop">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/0e2e4c1393744b059651b21c054f1e28-356.png"
                                                alt="M5 TOP STOP" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M5 TOP STOP
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-004</span>
                                            <a href="/m5-ust-stop" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/no-4-kapak-yay">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/0ba9419304754d4d28faf0806aec762c-359.png"
                                                alt="NO 4 CUP-SPRING" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            NO 4 CUP-SPRING
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-007</span>
                                            <a href="/no-4-kapak-yay" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/no-5-kapak-yay">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/a035dd90719202a046f081d273f92ed0-360.png"
                                                alt="NO 5 CUP-SPRING" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            NO 5 CUP-SPRING
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-008</span>
                                            <a href="/no-5-kapak-yay" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/no-8-kapak-yay">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/42bac264d48c7a95ab6d3b0fe0cfd81d-361.png"
                                                alt="NO 8 CUP-SPRING" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            NO 8 CUP-SPRING
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-009</span>
                                            <a href="/no-8-kapak-yay" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m8-kelebek-h-stop">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/2bc20c1b1024e52cf049bd6e889d2d00-859.png"
                                                alt="M8 BUTTERFLY H STOP " class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M8 BUTTERFLY H STOP
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-010	</span>
                                            <a href="/m8-kelebek-h-stop" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a href="/m15-kelebek-h-stop">
                                        <div class="img-holder">
                                            <img
                                                src="/uploads/products/thumb/400x600/cb677613af466e72a4ec41fdabfe3042-358.png"
                                                alt="M15 BUTTERFLY H STOP" class="img-fluid">
                                        </div>
                                        <div class="product-name">
                                            M15 BUTTERFLY H STOP
                                        </div>
                                        <div class="product-bottom">
                                            <span class="product-code">APRT-006</span>
                                            <a href="/m15-kelebek-h-stop" class="button black size-sm">CHECK</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="/aparatlar" class="button-link d-inline-block float-right mt-1 mt-md-5">view
                                all <i
                                    class="flaticon-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="fairs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading primary">
                            <h2>FAIRS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($partners as $partner)

                        <div class="col-4 col-md fair-item">
                            <div class="mt-4">
                                <a href="#" >
                                    <div
                                        style="background-image: url({{'storage/'. $partner->image }}); background-size: cover; background-position: center;">
                                        <img class="img-fluid" style="opacity: 0;"
                                             src="{{ asset('assets/uploads/texhibition.jpg') }}"
                                             alt="img">
                                    </div>
                                </a>
                                <div>
                                    <h5 class="mt-2">{{$partner->title}}</h5>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                <div class="row">
                    <div class="col-4 col-md fair-item mt-5"><a
                            href="/sirbistan-nbsp-belgrad-balkan-textile-2018-fuari">
                            <img class="img-fluid" src="/uploads/editor/source/sirbistan.jpg"
                                 alt="Sırbistan Fuarı"/></a>
                        <div>
                            <h5 class="mt-2">Sırbistan</h5>
                        </div>
                    </div>
                    <div class="col-4 col-md fair-item mt-5"><a href="/istanbul-kysd-tekstil-ve-inovasyon-fuari">
                            <img
                                class="img-fluid" src="/uploads/editor/source/istanbul.jpg"
                                alt="İstanbul Fuarı"/></a>
                        <div>
                            <h5 class="mt-2">İstanbul</h5>
                        </div>
                    </div>
                    <div class="col-md">&nbsp;</div>
                    <div class="col-md">&nbsp;</div>
                    <div class="col-md">&nbsp;</div>
                    <div class="col-md">&nbsp;</div>
                </div>
            </div>
        </section>

        <section class="form">
            <div class="container-fluid">
                <div class="section-heading primary">
                    <h2>REQUEST FORM</h2>
                </div>
                <form action="{{route('front.contact.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label>NAME</label>
                            <input name="name" type="text" class="form-control form-control-lg" placeholder=""
                                   required>
                        </div>
                        <div class="col">
                            <label>EMAIL ADDRESSS</label>
                            <input name="email" type="email" class="form-control form-control-lg" required>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col">
                            <label>Phone Number</label>
                            <input name="phone_number" type="text" class="form-control form-control-lg">
                            <small>Not Required</small>
                        </div>
                        <div class="col">
                            <label>COMPANY NAME</label>
                            <input name="company_name" type="text" class="form-control form-control-lg" required>
                        </div>
                    </div>

                    <div class="form-group pt-4">
                        <label for="exampleFormControlTextarea1">MESSAGE</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" required
                                  rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">SEND</button>
                </form>
            </div>
        </section>

        <section class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 about-left">
                        <div class="section-heading">
                            <h2>ABOUT US</h2>
                        </div>
                        <div class="about-main-left">
                            <h1>OPENS<br/>SHUTS <br/>PROTECTS</h1>
                            <p>Fim Fermuar is a major zipper manufacturer with an average production number of
                                350.000
                                units
                                of 35 cm zippers per day. Most importantly, it is able to manufacture the zipper
                                sliders
                                which are rarely produced by the Turkish industry, by its own sources.Fim zipper can
                                export
                                over forthy countries with this ability.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 about-right">
                        <img class="img-fluid"
                             src="{{asset('assets/uploads/footer-image/about.jpg')}}"
                             alt=""/>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
