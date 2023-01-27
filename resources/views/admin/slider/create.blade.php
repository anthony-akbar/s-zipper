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
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->

