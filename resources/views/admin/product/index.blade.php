@extends('layouts.admin')
@section('title')
    | Products
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Product Grid</h2>
    @include('admin.product.create')
    <div class="lg:flex intro-y">
        <div class="relative">
            <input id="search" type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10"
                   placeholder="Search item...">
            <i data-lucide="search"
               class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500"></i>
        </div>
        <select id="sort" class="pr-16 form-select box w-full lg:w-auto mt-3 lg:mt-0 ml-auto" control-id="ControlID-4">
            <option>title</option>
            <option>buy</option>
            <option selected>sell</option>
        </select>
    </div>
    <div id="Content" class="grid grid-cols-12 gap-6 mt-5">
        @foreach($products as $key => $product)
            <div class="intro-y col-span-12  md:col-span-6lg:col-span-4 xl:col-span-3 shadow-lg border-black btn-rounded-dark">
                <div class="box border-b-2 border-l-2 border-opacity-10 border-black">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            {{--<img class="rounded-md" src="{{asset('storage/'.$product->image)}}">--}}
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href=""
                                   class="block font-medium text-base">{{ $product->title ?? '' }}</a>
                                <span
                                    class="text-white/90 text-xs mt-3">{{ $product->description ?? '' }}</span>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center">
                                Size: {{ $product->size ?? '' }}$
                            </div>
                            <div class="flex items-center mt-2">
                                Category: {{$product->category_id ?? ''}}
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center text-primary mr-auto" {{--href="{{ route('admin.products.show', $product->id) }}"--}}>
                            <i data-lucide="eye" class="mr-1"></i>
                            Preview
                        </a>
                        <!-- BEGIN: Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#static-backdrop-modal-preview-{{ $product->id }}"
                           class="flex items-center text-primary mr-auto">
                            <i data-lucide="edit" class="mr-1"></i>
                            Edit</a>
                        <!-- END: Modal Toggle -->

                        <!-- BEGIN: Modal Content -->
                        <div id="static-backdrop-modal-preview-{{ $product->id }}" class="modal"
                             data-tw-backdrop="static" tabindex="-1"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body px-5 py-10">
                                        <form action="{{route('admin.products.edit',$product->id)}}" method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="flex items-center justify-center w-full">
                                                <label class="flex flex-col w-full h-56 border-4 border-dashed dropzone"
                                                       style="cursor: pointer">
                                                    <div class="flex flex-col items-center justify-center pt-7">
                                                        <img src="{{asset('storage/'.$product->image)}}" alt=""
                                                             id="preview"
                                                             class="w-60 h-40 text-gray-400 group-hover:text-gray-600">
                                                    </div>
                                                    <input type="file" class="opacity-0 fallback"
                                                           name="image" accept="image/*" id="image"/>
                                                </label>
                                            </div>

                                            <div class="mt-3">
                                                <label for="title" class="form-label">Product Title</label>
                                                <input id="title" type="text" name="title" class="form-control"
                                                       placeholder="Product Title"
                                                       value="{{ old('title', $product->title) }}" required>
                                            </div>
                                            <div class="mt-3">
                                                <label for="vertical-form-2" class="form-label">Buy</label>
                                                <input id="vertical-form-2" type="number" name="buy"
                                                       class="form-control"
                                                       value="{{ old('buy', $product->buy) }}" placeholder="Buy"
                                                       required>
                                            </div>
                                            <div class="mt-3">
                                                <label for="vertical-form-3" class="form-label">Sell</label>
                                                <input id="vertical-form-3" name="sell" type="number"
                                                       class="form-control"
                                                       placeholder="Sell" value="{{ old('sell', $product->sell) }}"
                                                       required>
                                            </div>
                                            <div class="mt-3">
                                                <label for="vertical-form-4" class="form-label">Stock</label>
                                                <input id="vertical-form-4" type="number" name="stock"
                                                       class="form-control"
                                                       placeholder="Stock" value="{{ old('stock', $product->stock) }}"
                                                       required>
                                            </div>
                                            <label for="category_id" class="form-label mt-3">Category Id</label>
                                            <select class="tom-select w-full" id="category_id" name="category_id">
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                        {{ $category->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                                                <label for="description"
                                                       class="form-label w-full flex flex-col sm:flex-row">
                                                    Product Description
                                                    <span
                                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 5 characters</span>
                                                </label>
                                                <textarea id="description" class="form-control" name="description"
                                                          placeholder="Type your comments"
                                                          minlength="5">{{$product->description}}</textarea>
                                            </div>
                                            <button type="button" data-tw-dismiss="modal"
                                                    class="btn btn-outline-secondary w-24 mr-1 mt-4">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->


                        <!-- BEGIN: Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#delete-modal-preview-{{$product->id}}"
                           class="flex items-center mr-auto text-danger">
                            <i data-lucide="trash-2" class="px-1 text-danger"></i>
                            Delete</a>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="delete-modal-preview-{{$product->id}}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle"
                                               class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-slate-500 mt-2">Do you really want to delete these
                                                records? <br>This process cannot be undone.
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <form action="{{ route('admin.products.delete', $product->id) }}"
                                                  method="post">
                                                <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel
                                                </button>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger w-24">Yes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                </div>
            </div>
        @endforeach
            {{--<div class="mt-10">
                {{$products->withQueryString()->links()}}
            </div>--}}
    </div>
@endsection
@section('styles')
    <style>
        html * {
            box-sizing: border-box;
        }

        p {
            margin: 0;
        }

        .upload__box {
            padding: 40px;
        }

        .upload__inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: inline-block;
            font-weight: 600;
            color: #fff;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
        }

        .upload__btn:hover {
            background-color: unset;
            color: #4045ba;
            transition: all 0.3s ease;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 30px 0 0;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: '\2716';
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }

    </style>
@endsection
@section('scripts')
    <script type="text/javascript">

        jQuery(document).ready(function () {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function () {
                $(this).on('change', function (e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function (f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    var html = "<div class='upload__img-box  '><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function (e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }

        function update() {
            let value = {
                'search': $('#search').val(),
                'sort': $('#sort').val()
            }
            $.ajax({
                type: 'get',
                url: '{{URL::to('/admin/products/search')}}',
                data: value,
                success: function (data) {
                    console.log(data);
                    $('#Content').html(data);
                },
            });
        }

        $('#search').on('keyup', update);
        $('#sort').on('change', update);
    </script>
@endsection

