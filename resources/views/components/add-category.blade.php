<div class="modal fade" id="categoryModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel1">Add Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('admin/add-category') }}" method="POST">
            <div class="modal-body">
                @csrf
                <div class="row">
                    <div class="col-xl-12">
                        <div class="mt-3">
                            <label class="form-label">Category Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" id="" class="form-control" placeholder="Enter Category name">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Select Section<span class="text-danger">*</span></label>
                            <select class="form-control" name="" id="">
                                <?php $getSections = App\Models\Section::get()->toArray(); ?>
                                <option value="">Select</option>
                                @foreach ($getSections as $section)
                                <option value="{{ $section['id'] }}">{{ $section['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Select Category Level<span class="text-danger">*</span></label>
                            <select name="parent_id" class="form-control" id="parent_id">
                                <option value="0">Main Category</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Category Name<span class="text-danger">*</span></label>
                            <input type="file" name="category_image" style="height: 40px;" id="" class="form-control" placeholder="Enter Category name">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Category Discount<span class="text-danger">*</span></label>
                            <input type="text" name="category_discount" id="" class="form-control" placeholder="Enter Category name">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Category Description<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" >Close</button>
                <button type="submit" class="btn btn-secondary btn-sm" >Save Changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <style>
    .form-control{
        height: 40px !important;
    }
  </style>
