@extends('admin.layout.app')


@section('content')
<div class="content-body" style="min-height: 900px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 active-p">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="heading mb-0">Contacts</h4>
                    <div>
                        <a class="btn btn-primary btn-sm me-1" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Contacts</a>
                        <button type="button" class="btn btn-secondary btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal1">+ Invite Customer
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects style-1 shorting dt-filter exports">
                            <div class="tbl-caption">
                            </div>
                            <div id="contacts-tbl_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons"><button class="dt-button buttons-excel buttons-html5 btn btn-sm border-0 processing" tabindex="0" aria-controls="contacts-tbl" type="button"><span> Export Report</span></button> </div><div id="contacts-tbl_filter" class="dataTables_filter"><label> <i class="fa-solid fa-magnifying-glass"></i><input type="search" class="" placeholder="Search..." aria-controls="contacts-tbl"></label></div><table id="contacts-tbl" class="table dataTable no-footer" role="grid" aria-describedby="contacts-tbl_info">
                                <thead class="p-5">
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">SL</th>
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">Order ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">Order Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">Customer Info</th>
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">Store</th>
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">Total Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">Order Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="contacts-tbl">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd mt-5">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 ms-2">1</p>
                                            </div>
                                        </td>
                                        <td class="pe-0">120029</td>

                                        <td class="pe-0">
                                            <span>09 Nov 2023,</span>
                                            <p>10:13 AM</p>
                                        </td>
                                        <td class="pe-0">
                                            <span>Antoine Vernat</span>
                                           <p>737637893</p>
                                        </td>
                                        <td class="pe-0">
                                            <span>Antoine Vernat</span>
                                        </td>
                                        <td class="pe-0 c-status">
                                            <span>$444,00</span>
                                            <p>Unpaid</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success border-0 badge-sm">Delivered</span>
                                        </td>
                                        <td>
                                            <a href=""
                                                class="btn btn-primary shadow btn-xs sharp me-1">
                                                <i class="fa fa-eye"></i></a>
                                            <a href="javascript:void()"
                                                class="btn btn-danger shadow btn-xs sharp confirmDelete"><i
                                                    class="fa fa-download"></i></a>
                                            <div class="d-flex">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table><div class="dataTables_info" id="contacts-tbl_info" role="status" aria-live="polite">Showing 1 to 13 of 13 entries</div><div class="dataTables_paginate paging_simple_numbers" id="contacts-tbl_paginate"><a class="paginate_button previous disabled" aria-controls="contacts-tbl" data-dt-idx="0" tabindex="0" id="contacts-tbl_previous"><i class="fa-solid fa-angle-left"></i></a><span><a class="paginate_button current" aria-controls="contacts-tbl" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="contacts-tbl" data-dt-idx="2" tabindex="0" id="contacts-tbl_next"><i class="fa-solid fa-angle-right"></i></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
