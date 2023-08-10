@extends('admin.layout.app')

@section('title', 'Category Create')

@section('content')
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Categories</h5></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Home </a>
            </li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row form-material">
                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <label class="form-label">Category Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="" class="form-control" placeholder="Enter Category name">
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <label class="form-label">Select Section<span class="text-danger">*</span></label>
                                    <select class="form-control" class="" name="" id="">
                                        <?php $getSections = App\Models\Section::get()->toArray(); ?>
                                        <option value="">Select</option>
                                        @foreach ($getSections as $section)
                                        <option value="{{ $section['id'] }}">{{ $section['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                    <label class="form-label">Select Category Level<span class="text-danger">*</span></label>
                                    <select name="parent_id" class="form-control" id="parent_id">
                                        <option value="0">Main Category</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6">
                                    <label class="form-label">Category Image<span class="text-danger">*</span></label>
                                    <input type="file" name="category_image" id="" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Category Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6">
                                    <label class="form-label">Category URL<span class="text-danger">*</span></label>
                                    <input type="text" name="url" id="url" class="form-control" placeholder="Enter URL">
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6">
                                    <label class="form-label">Meta Title<span class="text-danger">*</span></label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Enter Meta Title">
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6">
                                    <label class="form-label">Meta Description<span class="text-danger">*</span></label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Enter Meta Description">
                                </div>
                                <div class="col-xl-3 col-xxl-6 col-md-6">
                                    <label class="form-label">Meta Keywords<span class="text-danger">*</span></label>
                                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" placeholder="Enter Meta Keywords">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary btn-sm" >Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection