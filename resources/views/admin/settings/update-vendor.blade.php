@extends('admin.layout.app')


@section('content')

@if($slug=="personal")
@section('title', 'Vendor Profile | Personal')
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
                                @if(!empty(Auth::guard('admin')->user('vendor')->photo))
                                <img src="{{ asset("storage/images/".Auth::guard('admin')->user()->photo) }}" class="img-fluid rounded-circle" alt="">
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
                                                            <input type="phone" placeholder="Enter a digit "  name="mobile" id="mobile" value="{{ $vendorDetails['mobile'] }}" class="form-control" maxlength="11" minlength="11">
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
                                                            <input type="text"  name="zipcode" value="{{ $vendorDetails['zipcode'] }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Image</label>
                                                            <input style="height: 40px;" type="file" name="photo" id="photo" class="form-control">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update Profile</button>
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
@elseif($slug=="business")
@section('title', 'Vendor Profile | Business')
<div class="content-body">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Dashboard</h5></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Business Information </a>
            </li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="c-profile text-center">
                            <img src="images/user1.jpg" class="rounded-circle mb-2">
                            <h4>{{ $vendorDetails['shop_name'] }}</h4>
                        </div>
                        <div class="c-details">
                            <ul>
                                <li>
                                    <span>Email</span>
                                    <p>{{ $vendorDetails['business_email'] }}</p>
                                </li>
                                <li>
                                    <span>Phone</span>
                                    <p>{{ $vendorDetails['phone_no'] }}</p>
                                </li>
                            </ul>
                        </div>
                        <span class="mt-3 d-block">Social</span>
                        <ul class="c-social">
                            <li><a href="javascript:void(0);" class="bg-facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void(0);" class="bg-whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="javascript:void(0);" class="bg-linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="javascript:void(0);" class="bg-skype"><i class="fa-brands fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card h-auto">
                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center c-busiess">
                            <img src="images/economics.png" class="avatar">
                            <div>
                                <h5 class="mb-0">{{ $vendorDetails['shop_name'] }}<span class="badge badge-danger badge-xs ms-1">Active</span></h5>
                                <span>Billing monthly | Next payment on 15/02/2023for$590.40</span>
                            </div>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="btn btn-light btn-sm me-2">Cancle plan</a>
                            <a href="javascript:void(0)" class="btn btn-primary btn-sm ms-2">Update plan</a>
                        </div>
                    </div>
                </div>
                <div class="card profile-card card-bx m-b30">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-header">
                        <h6 class="title">Business Information</h6>
                    </div>
                    <form class="profile-form" action="{{ url('admin/vendor-profile/business') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name" id="shop_name" value="{{ $vendorDetails['shop_name'] }}" placeholder="Casablanca">
                                    <span style="font-size: 10px; color: ">Choose a unique name for your online shop: this will appear on the market place.</span>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Registration Name</label>
                                    <input type="text" class="form-control" name="company_name" id="company_name" value="{{ $vendorDetails['company_name'] }}" placeholder="e.g Casablanca Limited">
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" name="business_email" id="business_email" value="{{ $vendorDetails['business_email'] }}" placeholder="e.g chido@co.ng" readonly>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone_no" id="phone_no" value="{{ $vendorDetails['phone_no'] }}" placeholder="e.g +234(73738) 299">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Business Entity</label>
                                    <select id="business_entity" class="form-control" name="business_entity">
                                        <option value="">{{ $vendorDetails['business_entity'] }}</option>
                                        <option value="Registered Business">Registered Business</option>
                                        <option value="Sole Propitor">Sole Propitor</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Address 1</label>
                                    <input type="text" class="form-control" name="address_one" id="address_one" value="{{ $vendorDetails['address_one'] }}" placeholder="Enter Address 1">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Address 2</label>
                                    <input type="text" class="form-control" name="address_two" id="address_two" value="{{ $vendorDetails['address_two'] }}"  placeholder="Enter Address 2">
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" id="state" value="{{ $vendorDetails['state'] }}" placeholder="Lagos">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Postal Code</label>
                                    <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ $vendorDetails['postal_code'] }}" placeholder="Lagos">
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{ $vendorDetails['city'] }}" placeholder="Ikeja">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{ $vendorDetails['country'] }}" placeholder="Somewhere in the world">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Means of ID</label>
                                    <select name="means_id" id="means_id" class="form-control">
                                        <option value="National Identity" @if($vendorDetails['means_id']=="National Identity")selected @endif>National Identity</option>
                                        <option value="Passport"@if($vendorDetails['means_id']=="Passport")selected @endif>Passport</option>
                                        <option value="Driver's License"@if($vendorDetails['means_id']=="Driver's License")selected @endif>Driver's License</option>
                                        <option value="Voters Card"@if($vendorDetails['means_id']=="Voters Card")selected @endif>Voters Card</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Upload a copy of means of ID</label>
                                    <input type="file" class="form-control" name="means_id_proof" id="means_id_proof" />
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">CAC Registration Number</label>
                                    <input type="text" class="form-control" name="license_id" id="license_id" value="{{ $vendorDetails['license_id'] }}" placeholder="e.g RC00000002">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Upload a copy of the CAC Certificate</label>
                                    <input type="file" style="height: 44px;" class="form-control" name="license_proof" id="license_proof" >
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Manager's name</label>
                                    <input type="text" class="form-control" name="manager_name" id="manager_name" value="{{ $vendorDetails['manager_name'] }}" placeholder="e.g: Lawyer">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Manager's Phone</label>
                                    <input type="text" class="form-control" name="manager_phone" id="manager_phone" value="{{ $vendorDetails['manager_phone'] }}" placeholder="e.g: Lawyer">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Legal Representatives</label>
                                    <input type="text" class="form-control" name="legal_rep" id="legal_rep" value="{{ $vendorDetails['legal_rep'] }}" placeholder="e.g: Lawyer">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Rep Address</label>
                                    <input type="text" class="form-control" name="legal_address" id="legal_address" value="{{ $vendorDetails['legal_address'] }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@elseif($slug=="bank")

@endif

@endsection
