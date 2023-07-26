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
                                                    <button type="button" class="btn btn-xs btn-secondary btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
                                                        <div class="handle"></div>
                                                    </button>
                                                    @else
                                                    <button type="button" class="btn btn-xs btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                        <div class="handle"></div>
                                                    </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <img src="{{ asset('admin/icons/verified.png') }}" width="35" alt="">
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
<style>

.example .btn-toggle {
  top: 50%;
  transform: translateY(-50%);
}
.btn-toggle {
  margin: 0 4rem;
  padding: 0;
  position: relative;
  border: none;
  height: 1.5rem;
  width: 3rem;
  border-radius: 1.5rem;
  color: #6b7381;
  background: #bdc1c8;
}
.btn-toggle:focus,
.btn-toggle.focus,
.btn-toggle:focus.active,
.btn-toggle.focus.active {
  outline: none;
}
.btn-toggle:before,
.btn-toggle:after {
  line-height: 1.5rem;
  width: 4rem;
  text-align: center;
  font-weight: 600;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: absolute;
  bottom: 0;
  transition: opacity 0.25s;
}
.btn-toggle:before {
  content: 'Off';
  left: -4rem;
}
.btn-toggle:after {
  content: 'On';
  right: -4rem;
  opacity: 0.5;
}
.btn-toggle > .handle {
  position: absolute;
  top: 0.1875rem;
  left: 0.1875rem;
  width: 1.125rem;
  height: 1.125rem;
  border-radius: 1.125rem;
  background: #fff;
  transition: left 0.25s;
}
.btn-toggle.active {
  transition: background-color 0.25s;
}
.btn-toggle.active > .handle {
  left: 1.6875rem;
  transition: left 0.25s;
}
.btn-toggle.active:before {
  opacity: 0.5;
}
.btn-toggle.active:after {
  opacity: 1;
}
.btn-toggle.btn-sm:before,
.btn-toggle.btn-sm:after {
  line-height: -0.5rem;
  color: #fff;
  letter-spacing: 0.75px;
  left: 0.4125rem;
  width: 2.325rem;
}
.btn-toggle.btn-sm:before {
  text-align: right;
}
.btn-toggle.btn-sm:after {
  text-align: left;
  opacity: 0;
}
.btn-toggle.btn-sm.active:before {
  opacity: 0;
}
.btn-toggle.btn-sm.active:after {
  opacity: 1;
}
.btn-toggle.btn-xs:before,
.btn-toggle.btn-xs:after {
  display: none;
}
.btn-toggle:before,
.btn-toggle:after {
  color: #6b7381;
}
.btn-toggle.active {
  background-color: #29b5a8;
}
.btn-toggle.btn-lg {
  margin: 0 5rem;
  padding: 0;
  position: relative;
  border: none;
  height: 2.5rem;
  width: 5rem;
  border-radius: 2.5rem;
}
.btn-toggle.btn-lg:focus,
.btn-toggle.btn-lg.focus,
.btn-toggle.btn-lg:focus.active,
.btn-toggle.btn-lg.focus.active {
  outline: none;
}
.btn-toggle.btn-lg:before,
.btn-toggle.btn-lg:after {
  line-height: 2.5rem;
  width: 5rem;
  text-align: center;
  font-weight: 600;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: absolute;
  bottom: 0;
  transition: opacity 0.25s;
}
.btn-toggle.btn-lg:before {
  content: 'Off';
  left: -5rem;
}
.btn-toggle.btn-lg:after {
  content: 'On';
  right: -5rem;
  opacity: 0.5;
}
.btn-toggle.btn-lg > .handle {
  position: absolute;
  top: 0.3125rem;
  left: 0.3125rem;
  width: 1.875rem;
  height: 1.875rem;
  border-radius: 1.875rem;
  background: #fff;
  transition: left 0.25s;
}
.btn-toggle.btn-lg.active {
  transition: background-color 0.25s;
}
.btn-toggle.btn-lg.active > .handle {
  left: 2.8125rem;
  transition: left 0.25s;
}
.btn-toggle.btn-lg.active:before {
  opacity: 0.5;
}
.btn-toggle.btn-lg.active:after {
  opacity: 1;
}
.btn-toggle.btn-lg.btn-sm:before,
.btn-toggle.btn-lg.btn-sm:after {
  line-height: 0.5rem;
  color: #fff;
  letter-spacing: 0.75px;
  left: 0.6875rem;
  width: 3.875rem;
}
.btn-toggle.btn-lg.btn-sm:before {
  text-align: right;
}
.btn-toggle.btn-lg.btn-sm:after {
  text-align: left;
  opacity: 0;
}
.btn-toggle.btn-lg.btn-sm.active:before {
  opacity: 0;
}
.btn-toggle.btn-lg.btn-sm.active:after {
  opacity: 1;
}
.btn-toggle.btn-lg.btn-xs:before,
.btn-toggle.btn-lg.btn-xs:after {
  display: none;
}
.btn-toggle.btn-sm {
  margin: 0 0.5rem;
  padding: 0;
  position: relative;
  border: none;
  height: 1.5rem;
  width: 3rem;
  border-radius: 1.5rem;
}
.btn-toggle.btn-sm:focus,
.btn-toggle.btn-sm.focus,
.btn-toggle.btn-sm:focus.active,
.btn-toggle.btn-sm.focus.active {
  outline: none;
}
.btn-toggle.btn-sm:before,
.btn-toggle.btn-sm:after {
  line-height: 1.5rem;
  width: 0.5rem;
  text-align: center;
  font-weight: 600;
  font-size: 0.55rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: absolute;
  bottom: 0;
  transition: opacity 0.25s;
}
.btn-toggle.btn-sm:before {
  content: 'Off';
  left: -0.5rem;
}
.btn-toggle.btn-sm:after {
  content: 'On';
  right: -0.5rem;
  opacity: 0.5;
}
.btn-toggle.btn-sm > .handle {
  position: absolute;
  top: 0.1875rem;
  left: 0.1875rem;
  width: 1.125rem;
  height: 1.125rem;
  border-radius: 1.125rem;
  background: #fff;
  transition: left 0.25s;
}
.btn-toggle.btn-sm.active {
  transition: background-color 0.25s;
}
.btn-toggle.btn-sm.active > .handle {
  left: 1.6875rem;
  transition: left 0.25s;
}
.btn-toggle.btn-sm.active:before {
  opacity: 0.5;
}
.btn-toggle.btn-sm.active:after {
  opacity: 1;
}
.btn-toggle.btn-sm.btn-sm:before,
.btn-toggle.btn-sm.btn-sm:after {
  line-height: -0.5rem;
  color: #fff;
  letter-spacing: 0.75px;
  left: 0.4125rem;
  width: 2.325rem;
}
.btn-toggle.btn-sm.btn-sm:before {
  text-align: right;
}
.btn-toggle.btn-sm.btn-sm:after {
  text-align: left;
  opacity: 0;
}
.btn-toggle.btn-sm.btn-sm.active:before {
  opacity: 0;
}
.btn-toggle.btn-sm.btn-sm.active:after {
  opacity: 1;
}
.btn-toggle.btn-sm.btn-xs:before,
.btn-toggle.btn-sm.btn-xs:after {
  display: none;
}
.btn-toggle.btn-xs {
  margin: 0 0;
  padding: 0;
  position: relative;
  border: none;
  height: 1rem;
  width: 2rem;
  border-radius: 1rem;
}
.btn-toggle.btn-xs:focus,
.btn-toggle.btn-xs.focus,
.btn-toggle.btn-xs:focus.active,
.btn-toggle.btn-xs.focus.active {
  outline: none;
}
.btn-toggle.btn-xs:before,
.btn-toggle.btn-xs:after {
  line-height: 1rem;
  width: 0;
  text-align: center;
  font-weight: 600;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: absolute;
  bottom: 0;
  transition: opacity 0.25s;
}
.btn-toggle.btn-xs:before {
  content: 'Off';
  left: 0;
}
.btn-toggle.btn-xs:after {
  content: 'On';
  right: 0;
  opacity: 0.5;
}
.btn-toggle.btn-xs > .handle {
  position: absolute;
  top: 0.125rem;
  left: 0.125rem;
  width: 0.75rem;
  height: 0.75rem;
  border-radius: 0.75rem;
  background: #fff;
  transition: left 0.25s;
}
.btn-toggle.btn-xs.active {
  transition: background-color 0.25s;
}
.btn-toggle.btn-xs.active > .handle {
  left: 1.125rem;
  transition: left 0.25s;
}
.btn-toggle.btn-xs.active:before {
  opacity: 0.5;
}
.btn-toggle.btn-xs.active:after {
  opacity: 1;
}
.btn-toggle.btn-xs.btn-sm:before,
.btn-toggle.btn-xs.btn-sm:after {
  line-height: -1rem;
  color: #fff;
  letter-spacing: 0.75px;
  left: 0.275rem;
  width: 1.55rem;
}
.btn-toggle.btn-xs.btn-sm:before {
  text-align: right;
}
.btn-toggle.btn-xs.btn-sm:after {
  text-align: left;
  opacity: 0;
}
.btn-toggle.btn-xs.btn-sm.active:before {
  opacity: 0;
}
.btn-toggle.btn-xs.btn-sm.active:after {
  opacity: 1;
}
.btn-toggle.btn-xs.btn-xs:before,
.btn-toggle.btn-xs.btn-xs:after {
  display: none;
}
.btn-toggle.btn-secondary {
  color: #6b7381;
  background: #bdc1c8;
}
.btn-toggle.btn-secondary:before,
.btn-toggle.btn-secondary:after {
  color: #6b7381;
}
.btn-toggle.btn-secondary.active {
  background-color: #ff8300;
}

</style>


@endsection

