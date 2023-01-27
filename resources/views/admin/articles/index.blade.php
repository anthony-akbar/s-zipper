@extends('layouts.admin')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Articles</h2>
    @include('admin.articles.create')
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

@endsection
