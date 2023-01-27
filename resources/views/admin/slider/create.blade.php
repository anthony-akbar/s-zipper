
<!-- BEGIN: Modal Toggle -->
<div class="text-center">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#basic-modal-preview" class="btn btn-primary">Add</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-10 text-center">

                <form method="POST" action="{{ route('admin.slider.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="fallback">
                            <input name="image[]" type="file" multiple/>
                        </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                            <div class="text-slate-500">
                                This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->

