@extends('admin.layout.app')

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
                Home </a>
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
                                <li>
                                    <span>Date of birth</span>
                                    <p>13 June 1996</p>
                                </li>
                                <li>
                                    <span>Position</span>
                                    <p>Computer Engineer</p>
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
                            <button type="button" class="modal-btn btn btn-primary btn-sm  ms-2 " data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                <i class="fa-solid fa-pen-to-square me-1"></i>
                                <span>Edit </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <h4 class="heading">Membership</h4>
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
                <div class="card h-auto">
                    <div class="card-header py-3">
                        <h4 class="heading mb-0">Payment History</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects style-1">
                            <div id="empoloyees-tbl_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons"><button class="dt-button buttons-excel buttons-html5 btn btn-sm border-0" tabindex="0" aria-controls="empoloyees-tbl" type="button"><span><i class="fa-solid fa-file-excel"></i> Export Report</span></button> </div><table id="empoloyees-tbl" class="table dataTable no-footer" role="grid" aria-describedby="empoloyees-tbl_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="empoloyees-tbl" rowspan="1" colspan="1" style="width: 116.567px;" aria-sort="ascending" aria-label="REFERENCE: activate to sort column descending">REFERENCE</th><th class="sorting" tabindex="0" aria-controls="empoloyees-tbl" rowspan="1" colspan="1" style="width: 250.517px;" aria-label="PRODUCT: activate to sort column ascending">PRODUCT</th><th class="sorting" tabindex="0" aria-controls="empoloyees-tbl" rowspan="1" colspan="1" style="width: 129.683px;" aria-label="STATUS: activate to sort column ascending">STATUS</th><th class="sorting" tabindex="0" aria-controls="empoloyees-tbl" rowspan="1" colspan="1" style="width: 148.767px;" aria-label="DATE: activate to sort column ascending">DATE</th><th class="sorting" tabindex="0" aria-controls="empoloyees-tbl" rowspan="1" colspan="1" style="width: 103.333px;" aria-label="AMOUNT: activate to sort column ascending">AMOUNT</th></tr>
                                </thead>
                                <tbody>






                                <tr role="row" class="odd">
                                        <td class="sorting_1"><span>#5454421</span></td>
                                        <td>
                                            <span>Salesforce CRM</span>
                                        </td>
                                        <td><span class="badge badge-primary light border-0">Inprogress</span></td>
                                        <td>
                                            <span>13 March 2023</span>
                                        </td>
                                        <td>
                                            <span>$500</span>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1"><span>#5454421</span></td>
                                        <td>
                                            <span>Shopify eCommerce</span>
                                        </td>
                                        <td><span class="badge badge-success light border-0">Completed</span></td>
                                        <td>
                                            <span>13 March 2023</span>
                                        </td>
                                        <td>
                                            <span>$500</span>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1"><span>#552145252</span></td>
                                        <td>
                                            <span>Zoom video conferencing</span>
                                        </td>
                                        <td><span class="badge badge-danger light border-0">Pending</span></td>
                                        <td>
                                            <span>12 February 2022</span>
                                        </td>
                                        <td>
                                            <span>$900</span>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1"><span>#552145252</span></td>
                                        <td>
                                            <span>Google Chrome</span>
                                        </td>
                                        <td><span class="badge badge-danger light border-0">Pending</span></td>
                                        <td>
                                            <span>12 February 2022</span>
                                        </td>
                                        <td>
                                            <span>$900</span>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1"><span>#5857455</span></td>
                                        <td>
                                            <span>Slack collaboration platform</span>
                                        </td>
                                        <td><span class="badge badge-primary light border-0">Inprogress</span></td>
                                        <td>
                                            <span>24 January 2022</span>
                                        </td>
                                        <td>
                                            <span>$800</span>
                                        </td>
                                    </tr></tbody>

                            </table><div class="dataTables_info" id="empoloyees-tbl_info" role="status" aria-live="polite">Showing 1 to 5 of 6 entries</div><div class="dataTables_paginate paging_simple_numbers" id="empoloyees-tbl_paginate"><a class="paginate_button previous disabled" aria-controls="empoloyees-tbl" data-dt-idx="0" tabindex="0" id="empoloyees-tbl_previous"><i class="fa-solid fa-angle-left"></i></a><span><a class="paginate_button current" aria-controls="empoloyees-tbl" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="empoloyees-tbl" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="empoloyees-tbl" data-dt-idx="3" tabindex="0" id="empoloyees-tbl_next"><i class="fa-solid fa-angle-right"></i></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-xxl-8">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">Payment Methods</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <img src="images/credit.png" alt="" class="w-100">
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="c-card-details">
                                            <ul>
                                                <li>
                                                    <span>Name:</span>
                                                    <h6>Henry Saiplay</h6>
                                                </li>
                                                <li>
                                                    <span>Number:</span>
                                                    <h6>1234 5678 9101 1213</h6>
                                                </li>
                                                <li>
                                                    <span>Expires:</span>
                                                    <h6>11/2023</h6>
                                                </li>
                                                <li>
                                                    <span>Type:</span>
                                                    <h6>Master Card</h6>
                                                </li>
                                                <li>
                                                    <span>Issuer:</span>
                                                    <h6>IDBF</h6>
                                                </li>
                                                <li>
                                                    <span>Id:</span>
                                                    <h6>1-85222gfgvv52</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="c-card-details">
                                            <ul>
                                                <li>
                                                    <span>Billing address:</span>
                                                    <h6>USA </h6>
                                                </li>
                                                <li>
                                                    <span>Phone:</span>
                                                    <h6>+01 123 456 789 0</h6>
                                                </li>
                                                <li>
                                                    <span>Email:</span>
                                                    <h6>demo@gmail.com</h6>
                                                </li>
                                                <li>
                                                    <span>Origin:</span>
                                                    <h6>Uk</h6>
                                                </li>
                                                <li>
                                                    <span>CVC check:</span>
                                                    <h6>Done</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="heading mb-0">Premium user</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="c-work">
                            <div class="c-task bg-primary">
                                <p>Earnings<i class="fa-solid fa-arrow-down ms-2"></i></p>
                                <span>$50,585</span>
                            </div>
                            <div class="c-task bg-success">
                                <p>Project <i class="fa-solid fa-arrow-up ms-2"></i></p>
                                <span>415</span>
                            </div>
                            <div class="c-task bg-secondary">
                                <p>Hours <i class="fa-solid fa-arrow-up ms-2"></i></p>
                                <span>200</span>
                            </div>
                        </div>
                        <ul class="c-primium">
                            <li>
                                <h6>Account ID:</h6>
                                <span>#5-658A555c</span>
                            </li>
                            <li>
                                <h6>Billing Email:</h6>
                                <span>demo@gmail.com</span>
                            </li>
                            <li>
                                <h6>Billing Address:</h6>
                                <span>Po.123 USA</span>
                            </li>
                            <li>
                                <h6>Language:</h6>
                                <span>English</span>
                            </li>
                            <li>
                                <h6>Tax ID:</h6>
                                <span>W3-52325</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
