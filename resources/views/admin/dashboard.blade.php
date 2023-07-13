@extends('admin.layout.app')

@section('content')

<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Dashboard</h5></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Home </a>
            </li>
        </ol>
        <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 wid-100">
                <div class="card p-4 main-card">
                    <h1 class="heading p-1">Business Analytics</h1>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 same-card ">
                            <div class="card business-analytics">
                                <div class="card-body depostit-card">
                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                        <div>
                                            <h6>Total Sales</h6>
                                            <h3>20</h3>
                                        </div>
                                        <div class="icon-box bg-primary-light">
                                            <img src="./icons/card/total-sale.png" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 same-card ">
                            <div class="card business-analytics">
                                <div class="card-body depostit-card">
                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                        <div>
                                            <h6>Total Store</h6>
                                            <h3>20</h3>
                                        </div>
                                        <div class="icon-box bg-primary-light">
                                            <img src="./icons/card/stores.png" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 same-card ">
                            <div class="card business-analytics">
                                <div class="card-body depostit-card">
                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                        <div>
                                            <h6>Total Products</h6>
                                            <h3>20</h3>
                                        </div>
                                        <div class="icon-box bg-primary-light">
                                            <img src="./icons/card/total-product.png" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 same-card ">
                            <div class="card business-analytics">
                                <div class="card-body depostit-card">
                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                        <div>
                                            <h6>Total Customer</h6>
                                            <h3>80</h3>
                                        </div>
                                        <div class="icon-box bg-primary-light">
                                            <img src="./icons/card/total-customer.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 wid-100">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Pending</h4>
                                                            <h3>50</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/pending.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Confirmed</h4>
                                                            <h3>40</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/confirmed.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Packaging</h4>
                                                            <h3>10</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/packaging.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Out for Delivery </h4>
                                                            <h3>30</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/out-of-delivery.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Delivered </h4>
                                                            <h3>0</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/delivered.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Canceled </h4>
                                                            <h3>0</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/canceled.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Returned </h4>
                                                            <h3>2</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/canceled.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 same-card">
                                        <a href="" class="">
                                            <div class="card" style="border: none;">
                                                <div class="card-body small-card depostit-card">
                                                    <div class="depostit-card-media d-flex justify-content-between style-1">
                                                        <div>
                                                            <h4>Failed to Delivery </h4>
                                                            <h3>5</h3>
                                                        </div>
                                                        <div class="icon-box bg-primary-light">
                                                            <img src="./icons/card/failed-to-deliver.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="col-xl-3 col-sm-6 same-card">
                                        <div class="card">
                                            <div class="card-body depostit-card">
                                                <div class="depostit-card-media d-flex justify-content-between style-1">
                                                    <div>
                                                        <h4>Confirmed</h4>
                                                    </div>
                                                    <div class="icon-box bg-primary-light">
                                                        <h3>20</h3>
                                                    </div>
                                                </div>
                                                <div class="progress-box mt-0">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-0">Pending Order</p>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width:50%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 wid-100">
                <div class="card p-4 main-card">
                    <h1 class="heading p-1">Admin Wallet</h1>
                    <div class="row g-3">
                        <div class="col-xl-4 col-sm-6 same-card">
                            <div class="card admin-card business-analytics h-100 d-flex justify-content-center align-items-center ">
                                <div class="card-body  depostit-card d-flex flex-column gap-10 align-items-center justify-content-center">
                                    <img src="./icons/card/inhouse-earning.png" width="48" alt="">
                                    <h1>$35,392</h1>
                                    <div class="">
                                        <p>In-House Earning</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row g-3">
                                <div class="col-md-6 same-card ">
                                    <div class="card admin-card business-analytics h-100 justify-content-center">
                                        <div class="card-body depostit-card">
                                            <div class="depostit-card-media d-flex justify-content-between style-1">
                                                <div>
                                                    <h6>Commission Earned</h6>
                                                    <h3>₦36,320</h3>
                                                </div>
                                                <div class="icon-box bg-primary-light">
                                                    <img src="./icons/card/ce.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 same-card ">
                                    <div class="card admin-card business-analytics h-100 justify-content-center">
                                        <div class="card-body depostit-card">
                                            <div class="depostit-card-media d-flex justify-content-between align-items-center style-1">
                                                <div>
                                                    <h6>Delivery Charges Earned</h6>
                                                    <h3 class="fs-74">₦98,920</h3>
                                                </div>
                                                <div class="icon-box bg-primary-light">
                                                    <img src="./icons/card/dce.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 same-card ">
                                    <div class="card admin-card business-analytics h-100 justify-content-center">
                                        <div class="card-body depostit-card">
                                            <div class="depostit-card-media d-flex justify-content-between style-1">
                                                <div>
                                                    <h6>Total Tax Collected</h6>
                                                    <h3>₦47,480</h3>
                                                </div>
                                                <div class="icon-box bg-primary-light">
                                                    <img src="./icons/card/ttc.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 same-card ">
                                    <div class="card admin-card business-analytics h-100 justify-content-center">
                                        <div class="card-body depostit-card">
                                            <div class="depostit-card-media d-flex justify-content-between style-1">
                                                <div>
                                                    <h6>Pending Amount</h6>
                                                    <h3>₦77,480</h3>
                                                </div>
                                                <div class="icon-box bg-primary-light">
                                                    <img src="./icons/card/pa.png" alt="">
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

            <div class="col-xl-12 ">
                <div class="card overflow-hidden main-card">
                    <div class="card-header border-0 pb-0 flex-wrap">
                        <h4 class="heading mb-0">Earning Statistics</h4>
                        <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
                          </li>
                           <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                          </li>
                        </ul>
                    </div>
                    <div class="card-body  p-0">
                            <div id="overiewChart"></div>
                        <div class="ttl-project">
                            <div class="pr-data">
                                <h5>12,721</h5>
                                <span>Number of Projects</span>
                            </div>
                            <div class="pr-data">
                                <h5 class="text-primary">721</h5>
                                <span>Active Projects</span>
                            </div>
                            <div class="pr-data">
                                <h5>$2,50,523</h5>
                                <span>Revenue</span>
                            </div>
                            <div class="pr-data">
                                <h5 class="text-success">12,275h</h5>
                                <span>Working Hours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
