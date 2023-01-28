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

@extends('layouts.admin')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Slider Images</h2>
    @include('admin.slider.create')
    @if($sliders->isEmpty())
        <div class="pt-10 intro-y text-center">No elements to show!</div>
    @else
        <div class="grid grid-cols-12 gap-6 mt-5">
            @foreach($sliders as $item)
                <div class="intro-y col-span-12  md:col-span-6lg:col-span-4 xl:col-span-3">
                    <div class="box">
                        <div class="p-5">
                            <div
                                class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                <img alt="Midone - HTML Admin Template" class="rounded-md"
                                     src="{{ asset('storage/' . $item->image) }}">
                            </div>
                        </div>
                        <div
                            class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a class="flex items-center text-primary mr-auto" href="javascript:;">
                                <i data-lucide="check-square"></i>
                                Edit
                            </a>
                            <!-- BEGIN: Modal Toggle -->
                            <a href="javascript:;" data-tw-toggle="modal"
                               data-tw-target="#delete-modal-preview-{{$item->id}}"
                               class="flex items-center mr-auto text-danger">
                                <i data-lucide="trash-2" class="px-1 text-danger"></i>
                                Delete</a>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <div id="delete-modal-preview-{{$item->id}}" class="modal" tabindex="-1" aria-hidden="true">
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
                                                <form action="{{ route('admin.slider.delete', $item->id) }}"
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
                </div>
                @endif
                @endsection

                @section('scripts')
                    <script>
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
                    </script>

        @endsection

