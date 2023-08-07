@extends('admin.layout.app')

@section('title', 'Admin | Sections')

@section('content')
    <div class="content-body" style="min-height: 900px;">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Sections</h5>
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
                            <div class="table-responsive active-projects style-1">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">Sections</h4>
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">
                                            + Add Section
                                        </button>
                                    </div>
                                </div>
                                <div id="empoloyees-tblwrapper_wrapper" class="dataTables_wrapper no-footer">
                                    <table id="empoloyees-tblwrapper" class="table dataTable no-footer" role="grid"
                                        aria-describedby="empoloyees-tblwrapper_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="empoloyees-tblwrapper"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Employee ID: activate to sort column descending"
                                                    style="width: 116.656px;">ID</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="empoloyees-tblwrapper"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Employee ID: activate to sort column descending"
                                                    style="width: 116.656px;">Section Icon</th>
                                                <th class="sorting" tabindex="0" aria-controls="empoloyees-tblwrapper"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Employee Name: activate to sort column ascending"
                                                    style="width: 186.516px;">Section Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="empoloyees-tblwrapper"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Department: activate to sort column ascending"
                                                    style="width: 139.234px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="empoloyees-tblwrapper"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email Address: activate to sort column ascending"
                                                    style="width: 130.766px;">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($sections as $section)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><span>{{$section['id']}}</span></td>
                                                    <td>
                                                        <img src="images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <h6>{{ $section['name'] }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($section['status'] == 1)
                                                        <a href="javascript:void(0)" class="updateSectionStatus"
                                                            id="section-{{ $section['id'] }}"
                                                            section_id="{{ $section['id'] }}">
                                                            <i class="fa fa-toggle-on" aria-hidden="true"
                                                                status='Active'></i>
                                                        </a>
                                                        @else
                                                            <a href="javaacript:void(0)" class="updateSectionStatus"
                                                                id="section-{{ $section['id'] }}"
                                                                section_id="{{ $section['id'] }}">
                                                                <i class="fa fa-toggle-off" aria-hidden="true"
                                                                    status='Inactive'></i>
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button data-id="{{ $section['id'] }}" data-section="{{ $section['name'] }}" data-bs-toggle="modal" data-bs-target="#updateModal"
                                                            class="btn btn-primary shadow btn-xs sharp me-1">
                                                            <i class="fa fa-pencil"></i></button>
                                                        <a href="javascript:void()" module="section"
                                                            moduleid="{{ $section['id'] }}"
                                                            class="btn btn-danger shadow btn-xs sharp confirmDelete"><i
                                                                class="fa fa-trash"></i></a>
                                                        <div class="d-flex">
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                <h4 class="heading mb-0 text-center">No section data</h4>
                                            @endforelse
                                        </tbody>

                                    </table>
                                    <div class="dataTables_info" id="empoloyees-tblwrapper_info" role="status"
                                        aria-live="polite">Showing 1 to 10 of 12 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="empoloyees-tblwrapper_paginate"><a class="paginate_button previous disabled"
                                            aria-controls="empoloyees-tblwrapper" data-dt-idx="0" tabindex="0"
                                            id="empoloyees-tblwrapper_previous"><i
                                                class="fa-solid fa-angle-left"></i></a><span><a
                                                class="paginate_button current" aria-controls="empoloyees-tblwrapper"
                                                data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                                aria-controls="empoloyees-tblwrapper" data-dt-idx="2"
                                                tabindex="0">2</a></span><a class="paginate_button next"
                                            aria-controls="empoloyees-tblwrapper" data-dt-idx="3" tabindex="0"
                                            id="empoloyees-tblwrapper_next"><i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @if (empty($section))

    @else
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Section</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/update-section/'.$section['id']) }}" method="POST">
                @method('PATCH')
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <label class="form-label">Section Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control">
                                <input type="hidden" name="id" id="section-id" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary btn-sm" >Update</button>
                    </div>
                </form>
        </div>
        </div>
    </div>
    @endif

    <style>
       
    </style>


@endsection
