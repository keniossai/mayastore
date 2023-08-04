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

                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead >
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th></th>
                                            <th rowspan="1" colspan="1">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as $section)
                                        <tr>
                                            <th><strong></strong></th>
                                            <td>
                                                {{ $section['id'] }}
                                            </td>
                                            <td>
                                                <img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt="">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="w-space-no">{{ $section['name'] }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                @if($section['status']==1)
                                                    <a href="javascript:void(0)" class="updateSectionStatus" id="section-{{ $section['id'] }}" section_id="{{ $section['id'] }}">
                                                        <i class="fa fa-toggle-on" aria-hidden="true" status='Active'></i>
                                                    </a>
                                                @else
                                                    <a href="javaacript:void(0)" class="updateSectionStatus" id="section-{{ $section['id'] }}" section_id="{{ $section['id'] }}">
                                                        <i class="fa fa-toggle-off" aria-hidden="true" status='Inactive'></i>
                                                    </a>
                                                @endif
                                            </td>
                                            <th><strong></strong></th>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                    <form action="{{ url('admin/delete-section/'.$section['id']) }}" method="GET">
                                                        @method('DELETE')
                                                        <button type="submit" title="section" class="btn btn-danger shadow btn-xs sharp confirmDelete"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<style>

.fa-toggle-on {
  color: rgb(19, 157, 95);
}

.updateSectionStatus i{
    font-size: 20px;
    transition: all .3s ease;
}
.updateSectionStatus i::before{
    transition: all .3s ease;
}

</style>
@endsection

