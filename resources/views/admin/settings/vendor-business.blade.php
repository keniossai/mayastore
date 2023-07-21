@extends('admin.layout.app')

@section('title', 'Vendor Profile | Shop info')

@section('content')
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
                            <h4>Thomas Fleming</h4>
                        </div>
                        <div class="c-details">
                            <ul>
                                <li>
                                    <span>Email</span>
                                    <p>demo123@gmail.com</p>
                                </li>
                                <li>
                                    <span>Phone</span>
                                    <p>+91 12345647890</p>
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
                        <div class="d-flex mt-4 justify-content-end">
                            <a href="javascript:void(0)" class="btn btn-danger btn-sm light me-2"><i class="fa-solid fa-trash me-1"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card h-auto">
                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center c-busiess">
                            <img src="images/economics.png" class="avatar">
                            <div>
                                <h5 class="mb-0">Business board pro<span class="badge badge-danger badge-xs ms-1">Active</span></h5>
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
                    <div class="card-header">
                        <h6 class="title">Business Info</h6>
                    </div>
                    <form class="profile-form" action="{{ url('admin/vendor-profile/business') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Name</label>
                                    <input type="text" class="form-control" name="shop_name" placeholder="Casablanca">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Registration Name</label>
                                    <input type="text" class="form-control" name="company_reg__name" placeholder="e.g Casablanca Limited">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Owner's Name</label>
                                    <input type="text" class="form-control" name="vendor_name" value="{{ $vendorDetails['vendor_name'] }}" placeholder="e.g Mary Doe" readonly>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" name="email" value="{{ $vendorDetails['email'] }}" placeholder="e.g chido@co.ng" readonly>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="" value="{{ $vendorDetails['mobile'] }}" placeholder="e.g +234(73738) 299">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Address 1</label>
                                    <input type="text" class="form-control" name="address_one" value="{{ $vendorDetails['address_one'] }}" placeholder="Enter Address 1">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Shop Address 2</label>
                                    <input type="text" class="form-control" name="address_two" value="{{ $vendorDetails['address_two'] }}"  placeholder="Enter Address 2">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Business Entity</label>
                                    <select name="" id="" class="form-control" name="business_entity">
                                        <option value="">{{ $vendorDetails['business_entity'] }}</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" value="{{ $vendorDetails['state'] }}" placeholder="Lagos">
                                </div>

                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $vendorDetails['city'] }}" placeholder="Ikeja">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{ $vendorDetails['country'] }}" placeholder="Somewhere in the world">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Means of ID</label>
                                    <select name="identification" id="" class="form-control">
                                        <option value="">{{ $vendorDetails['identification'] }}</option>
                                        <option value="">Passport</option>
                                        <option value="">Driver's License</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">CAC Registration No</label>
                                    <input type="text" class="form-control" name="cac_reg_number" value="{{ $vendorDetails['cac_reg_number'] }}" placeholder="e.g RC00000002">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">CAC Certificate</label>
                                    <input type="file" style="height: 44px;" class="form-control" name="" placeholder="e.g RC00000002">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Tax ID</label>
                                    <input type="text" class="form-control" name="tax_id" value="{{ $vendorDetails['tax_id'] }}" placeholder="e.g: 2993883">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Legal Representatives</label>
                                    <input type="text" class="form-control" name="legal_rep" value="{{ $vendorDetails['legal_rep'] }}" placeholder="e.g: Lawyer">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Address Proof</label>
                                    <input type="text" class="form-control" name="" placeholder="">
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Proof Image</label>
                                    <input type="file" class="form-control" name="" />
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
@endsection
