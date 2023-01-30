<!-- BEGIN: Modal Toggle -->
<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview-{{ $partner->id }}"
   class="flex items-center text-primary mr-auto">
    <i data-lucide="edit" class="mr-1"></i>
    Edit</a>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview-{{ $partner->id }}" class="modal" data-tw-backdrop="static" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <form action="{{route('admin.partners.edit',$partner->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col w-full h-56 border-4 border-dashed dropzone"
                               style="cursor: pointer">
                            <div class="flex flex-col items-center justify-center pt-7">
                                <img src="{{asset('storage/'.$partner->image)}}" alt="" id="preview"
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
                               value="{{ old('title', $partner->title) }}" required>
                    </div>
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1 mt-4">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->

