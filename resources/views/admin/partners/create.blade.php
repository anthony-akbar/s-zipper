<!-- BEGIN: Modal Toggle -->
<div class="my-4">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
       class="btn btn-primary">Add Partners</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <div class="text-left">
                    <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="upload__box">
                            <div class="upload__btn-box">
                                <label class="btn btn-primary">
                                    <p>Upload images</p>
                                    <input name="image" type="file" data-max_length="1" class="upload__inputfile">
                                </label>
                            </div>
                            <div class="upload__img-wrap"></div>
                        </div>

                        <div class="mt-3">
                            <div>
                                <label for="title" class="form-label">Title</label>
                                <input name="title" id="title" type="text" class="form-control" placeholder="Title">
                            </div>
                            <button class="btn btn-primary mt-5" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
