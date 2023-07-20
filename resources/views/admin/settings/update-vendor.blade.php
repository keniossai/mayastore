@extends('admin.layout.app')

@section('title', 'Vendor Profile | Personal')

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
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo-vendor rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">

                                @if(!empty(Auth::guard('admin')->user('vendor')->image))
                                <img src="{{ asset("admin/images/photos/".Auth::guard('admin')->user()->image) }}" class="img-fluid rounded-circle" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" style="font-size: 16px; color: #1b1a1a; font-weight: 600;">
                                        Basic Information
                                    </li>
                                </ul>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="tab-content">
                                    <div id="profile-settings" class="tab-pane fade active show" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <form action="{{ url('admin/vendor-profile/personal') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Full Name</label>
                                                            <input type="text" name="name"  value="{{ $vendorDetails['name'] }}" class="form-control" >
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Phone Number</label>
                                                            <input type="phone" placeholder="Enter a digit "  name="mobile" value="{{ $vendorDetails['mobile'] }}" class="form-control" maxlength="11" minlength="11">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Email</label>
                                                            <input type="email"  name="email" value="{{ $vendorDetails['email'] }}" class="form-control" readonly>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Country</label>
                                                            <input type="country"  name="country" value="{{ $vendorDetails['country'] }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Address</label>
                                                            <input type="address"  name="address" value="{{ $vendorDetails['address'] }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">State</label>
                                                            <input type="state"  name="state" value="{{ $vendorDetails['state'] }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">City</label>
                                                            <input type="city"  name="city" value="{{ $vendorDetails['city'] }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Zip Code</label>
                                                            <input type="zipcode"  name="zipcode" value="{{ $vendorDetails['zipcode'] }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Image</label>
                                                            <input style="height: 40px;" type="file" name="image" id="image" class="form-control">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Sign in</button>
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
            <div class="col-xl-4">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" style="font-size: 16px; color: #1b1a1a; font-weight: 600;">
                                        Change Password
                                    </li>
                                </ul>
                                <div class="tab-content">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <form action="{{ url('admin/profile-update') }}" method="post">
                                                    @csrf
                                                    <div class="mb-3 col-md-12">
                                                        <input type="password" name="current_password" id="current_password"  class="form-control" required>
                                                        <span id="check_password"></span>
                                                    </div>
                                                    <div class="mb-3 col-md-12">
                                                        <input type="password" name="new_password" id="new_password"  placeholder="Enter new password" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3 col-md-12">
                                                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save Password <x-spinner /> </button>
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
@endsection
