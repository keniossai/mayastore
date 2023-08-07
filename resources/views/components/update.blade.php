@if(empty($section))
    @else
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Section</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/update-section/'.$section['id']) }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="form-label">Section Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name',$section['name']) }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary btn-sm" >Update</button>
                    </div>
                </form>
        </div>
        </div>
    </div>
    @endif
