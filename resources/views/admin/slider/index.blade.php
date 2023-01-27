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
                <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
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
                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                               data-tw-target="#delete-confirmation-modal">
                                <i data-lucide="trash-2"></i>
                                Delete
                            </a>
                        </div>

                    </div>
                    @endforeach
                </div>
                @endif

                {{--<div class="dz-preview dz-processing dz-image-preview dz-error dz-complete">
                        <div class="dz-image"></div>
                        <div class="dz-details"></div>
                        <div class="dz-error-mark">
                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"><title>Error</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                        <path
                                            d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>--}}

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

