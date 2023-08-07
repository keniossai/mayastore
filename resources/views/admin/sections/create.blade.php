@extends('admin.layout.app')

@section('title', 'Edit Section')

@section('content')
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Profile</h5></li>
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
        <!-- row -->
        <div class="row">
            <div class="col-xl-8">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" style="font-size: 16px; color: #1b1a1a; font-weight: 600;">
                                        Edit Section
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="profile-settings" class="tab-pane fade active show" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <form action="{{ url('admin/update-section/'.$section['id']) }}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Full Name</label>
                                                            <input type="text" name="name"  value="{{ $section['name'] }}" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
