@extends('layouts.admin')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Slider Images</h2>
    <div id="Content" class="grid grid-cols-12 gap-6 mt-5">
        @include('admin.slider.create')
        @if($sliders->isEmpty())
            <div class="pt-10 intro-y text-center">No elements to show!</div>
        @else
            @foreach($sliders as $item)
                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal"
                   class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                    <div class="box rounded-md p-3 relative zoom-in">
                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                            <div class="absolute top-0 left-0 w-full h-full image-fit">
                                <img class="rounded-md" src="{{ asset('storage/' . $item->image) }}"/>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    </div>

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
