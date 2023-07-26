@extends('admin.layout.app')

@section('content')
    <div class="content-body" style="min-height: 900px;">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Manage Client</h5>
                </li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                                stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        Home </a>
                </li>
            </ol>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects manage-client">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">{{ $title }}</h4>
                                </div>
                                <div id="reports-tbl_wrapper" class="dataTables_wrapper no-footer">
                                    <table id="reports-tbl" class="table dataTable no-footer" role="grid"
                                        aria-describedby="reports-tbl_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">ID</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: to sort column descending">Image</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: to sort column descending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-label="User Name: activate to sort column ascending">Type</th>
                                                <th class="sorting" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Contact: activate to sort column ascending">Phone</th>
                                                <th class="sorting" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Gender: activate to sort column ascending">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Location: activate to sort column ascending">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Location: activate to sort column ascending">isVerified</th>
                                                <th class="sorting" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending">Approve/Reject</th>
                                                <th class="sorting" tabindex="0" aria-controls="reports-tbl"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $admin)
                                            <tr role="row" class="odd">
                                                <td><span class="text-primary">{{ $admin['id'] }}</span></td>
                                                <td class="sorting_1">
                                                    <div class="products">
                                                        <img src="{{ asset("storage/images/".Auth::guard('admin')->user()->photo) }}" class="avatar avatar-md" alt="">
                                                    </div>
                                                </td>
                                                <td><span class="text-primary">{{ $admin['name'] }}</span></td>
                                                <td>
                                                    <span>{{ $admin['type'] }}</span>
                                                </td>
                                                <td>
                                                    <span>{{ $admin['mobile'] }}</span>
                                                </td>
                                                <td>
                                                    <span>{{ $admin['email'] }}</span>
                                                </td>
                                                <td>
                                                    @if($admin['status']==1)
                                                    <span class="badge badge-success light border-0">Active</span>
                                                    @else
                                                    <span class="badge badge-danger light border-0">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <img src="{{ asset('admin/icons/verified.png') }}" width="35" alt="">
                                                </td>
                                                <td>
                                                    <input type="checkbox" checked data-toggle="toggle" >
                                                </td>

                                                <td>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right" style="">
															@if ($admin['type']=='vendor')
                                                            <a class="dropdown-item" href="{{ url('admin/view-vendor-profile/'.$admin['id']) }}">View</a>
                                                            @endif
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div class="dataTables_info" id="reports-tbl_info" role="status"
                                        aria-live="polite">Showing 1 to 10 of 12 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="reports-tbl_paginate"><a
                                            class="paginate_button previous disabled" aria-controls="reports-tbl"
                                            data-dt-idx="0" tabindex="0" id="reports-tbl_previous"><i
                                                class="fa-solid fa-angle-left"></i></a><span><a
                                                class="paginate_button current" aria-controls="reports-tbl"
                                                data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                                aria-controls="reports-tbl" data-dt-idx="2" tabindex="0">2</a></span><a
                                            class="paginate_button next" aria-controls="reports-tbl" data-dt-idx="3"
                                            tabindex="0" id="reports-tbl_next"><i
                                                class="fa-solid fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
