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
                <div class="card h-auto">
                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center c-busiess">
                            <img src="{{ asset('storage/images/'.$vendorDetails['photo']) }}" class="avatar">
                            <div>
                                <h5 class="mb-0">{{ $vendorDetails['vendor_personal']['name'] }}<span class="badge badge-danger badge-xs ms-1">Active</span></h5>
                            </div>
                        </div>
                        <div>
                            Approve <input type="checkbox" checked data-toggle="toggle" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" style="font-size: 16px; color: #1b1a1a; font-weight: 600;">
                                        Venfor Details
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="profile-settings" class="tab-pane fade active show" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Full Name</label>
                                                            <input type="text" name="name"  value="{{ $vendorDetails['vendor_personal']['name'] }}"class="form-control" disabled >
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Phone Number</label>
                                                            <input type="phone" placeholder="Enter a digit "  name="mobile" id="mobile" value="{{ $vendorDetails['vendor_personal']['email'] }}" class="form-control" disabled maxlength="11" minlength="11">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Email</label>
                                                            <input type="email"  name="email" value="{{ $vendorDetails['vendor_personal']['email'] }}" class="form-control" disabled>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Country</label>
                                                            <input type="country"  name="country" value="{{ $vendorDetails['vendor_personal']['email'] }}" class="form-control" disabled>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Address</label>
                                                            <input type="address"  name="address" value="{{ $vendorDetails['vendor_personal']['email'] }}" class="form-control" disabled>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">State</label>
                                                            <input type="state"  name="state" value="{{ $vendorDetails['vendor_personal']['email'] }}" class="form-control" disabled>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">City</label>
                                                            <input type="city"  name="city" value="{{ $vendorDetails['vendor_personal']['email'] }}"class="form-control" disabled>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Zip Code</label>
                                                            <input type="text"  name="zipcode" value="{{ $vendorDetails['vendor_personal']['email'] }}" class="form-control" disabled>
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Image</label>
                                                            <input style="height: 40px;" type="file" name="photo" id="photo" class="form-control">
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
        <div class="row">
            <div class="col-xl-12">
                <div class="card profile-card card-bx m-b30">
                    <div class="card-header">
                        <h6 class="title">Business Information</h6>
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name" id="shop_name" value="{{ $vendorDetails['vendor_business']['shop_name'] }}" placeholder="Casablanca">
                                    <span style="font-size: 10px; color: ">Choose a unique name for your online shop: this will appear on the market place.</span>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Registration Name</label>
                                    <input type="text" class="form-control" name="company_name" id="company_name" value="{{ $vendorDetails['vendor_business']['company_name'] }}" placeholder="e.g Casablanca Limited">
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" name="business_email" id="business_email" value="{{ $vendorDetails['vendor_business']['business_email'] }}" placeholder="e.g chido@co.ng" readonly>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone_no" id="phone_no" value="{{ $vendorDetails['vendor_business']['phone_no'] }}" placeholder="e.g +234(73738) 299">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Business Entity</label>
                                    <select id="business_entity" class="form-control" name="business_entity">
                                        <option value="">{{ $vendorDetails['vendor_business']['business_entity'] }}</option>
                                        <option value="Registered Business">Registered Business</option>
                                        <option value="Sole Propitor">Sole Propitor</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Address 1</label>
                                    <input type="text" class="form-control" name="address_one" id="address_one" value="{{ $vendorDetails['vendor_business']['address_one'] }}" placeholder="Enter Address 1">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Address 2</label>
                                    <input type="text" class="form-control" name="address_two" id="address_two" value="{{ $vendorDetails['vendor_business']['address_two'] }}"  placeholder="Enter Address 2">
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" id="state" value="{{ $vendorDetails['vendor_business']['state'] }}" placeholder="Lagos">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Postal Code</label>
                                    <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ $vendorDetails['vendor_business']['postal_code'] }}" placeholder="Lagos">
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{ $vendorDetails['vendor_business']['city'] }}" placeholder="Ikeja">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{ $vendorDetails['vendor_business']['country'] }}" placeholder="Somewhere in the world">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Means of ID</label>
                                    <input type="text" class="form-control" value="{{ $vendorDetails['vendor_business']['means_id'] }}">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Upload a copy of means of ID</label>
                                    <input type="file" class="form-control" name="means_id_proof" id="means_id_proof" />
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">CAC Registration Number</label>
                                    <input type="text" class="form-control" name="license_id" id="license_id" value="{{ $vendorDetails['vendor_business']['license_id'] }}" placeholder="e.g RC00000002">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Upload a copy of the CAC Certificate</label>
                                    <input type="file" style="height: 44px;" class="form-control" name="license_proof" id="license_proof" >
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Manager's name</label>
                                    <input type="text" class="form-control" name="manager_name" id="manager_name" value="{{ $vendorDetails['vendor_business']['manager_name'] }}" placeholder="e.g: Lawyer">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Manager's Phone</label>
                                    <input type="text" class="form-control" name="manager_phone" id="manager_phone" value="{{ $vendorDetails['vendor_business']['manager_phone'] }}" placeholder="e.g: Lawyer">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Legal Representatives</label>
                                    <input type="text" class="form-control" name="legal_rep" id="legal_rep" value="{{ $vendorDetails['vendor_business']['legal_rep'] }}" placeholder="e.g: Lawyer">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Rep Address</label>
                                    <input type="text" class="form-control" name="legal_address" id="legal_address" value="{{ $vendorDetails['vendor_business']['legal_address'] }}" placeholder="">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">Uploaded Documents</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            @if (!empty($vendorDetails['vendor_business']['means_id_proof']))
                            <div class="col-md-3">
                                <img src="{{ asset('storage/images/proof/'.$vendorDetails['vendor_business']['means_id_proof']) }}" alt="" class="" style="width: 100%">
                            </div>
                            @endif
                            <div class="col-md-3">
                                <img src="{{ asset('storage/images/proof/'.$vendorDetails['vendor_business']['license_proof']) }}" alt="" class="" style="width: 100%">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('admin/images/credit.png') }}" alt="" class="" style="width: 100%">
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('admin/images/credit.png') }}" alt="" class="" style="width: 100%">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" style="font-size: 16px; color: #1b1a1a; font-weight: 600;">
                                        Bank Information
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="profile-settings" class="tab-pane fade active show" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Bank Name</label>
                                                        <input type="text" name="bank_name"  value="{{ $vendorDetails['vendor_bank']['bank_name'] }}" class="form-control" >
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Account Number</label>
                                                        <input type="text"  name="account_number" id="account_number" value="{{ $vendorDetails['vendor_bank']['account_number'] }}" class="form-control" maxlength="11" minlength="11">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Account Holder</label>
                                                        <input type="text"  name="account_holder_name" value="{{ $vendorDetails['vendor_bank']['account_holder_name'] }}" class="form-control">
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
    </div>
</div>
@endsection
