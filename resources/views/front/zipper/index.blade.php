@extends('layouts.main')
@section('content')
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
                                            style="background-image: url( {{asset('storage/'. $category->image )}}); background-size: cover; background-position: center;"
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
                                            style="background-image: url({{asset('storage/'. $category->image )}}); background-size: cover; background-position: center;"
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
@endsection
