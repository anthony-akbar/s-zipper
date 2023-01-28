<style>

    .center {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-input2 img {
        width: 10rem;
        display: none;
        align-items: center;
        justify-content: center;
    }

    .form-input2 input {
        display: none;
    }

</style>

<!-- BEGIN: Modal Toggle -->
<div class="my-4">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
       class="btn btn-primary">Add Products</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <div class="text-left">
                    <form class="mt-3" action="{{route('admin.products.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="flex items-center justify-center w-full">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn">
                                        <p>Upload images</p>
                                        <input name="image" type="file" data-max_length="1" class="upload__inputfile" required>
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="title" class="form-label">Product Title</label>
                            <input id="title" type="text" name="title" class="form-control"
                                   placeholder="Product Title" required>
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Size</label>
                            <input id="vertical-form-2" type="number" name="buy" class="form-control" placeholder="Buy"
                                   required>
                        </div>
                        <label for="category_id" class="form-label mt-3">Category Id</label>
                        <select class="tom-select w-full" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                        <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                            <label for="description" class="form-label w-full flex flex-col sm:flex-row">
                                Product Description
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 5 characters</span>
                            </label>
                            <textarea id="description" class="form-control" name="description"
                                      placeholder="Type your comments"
                                      minlength="5"></textarea>
                        </div>
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
<script type="text/javascript">
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
