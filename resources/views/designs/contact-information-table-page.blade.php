@extends('layouts.app', ["page_title"=> "Sellers"])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Sellers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Contact Information</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between mb-2">
                            <div class="col-auto">
                                <form class="search-bar position-relative mb-sm-0 mb-2">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end">
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                    <a href="/ecommerce/seller-create" class="btn btn-danger waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus-circle"></i> Add Contact</a>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>Basic Info</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>User Role</th>
                                    <th style="width: 82px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Cashier</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> General User</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td> +32546789 </td>

                                    <td> jonson@gmail.com </td>

                                    <td> Vine Corporation </td>

                                    <td> Admin</td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pagination-rounded justify-content-end my-2">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle" height="50" width="50">
                            </div>
                            <div class="col-lg-9 ms-3">
                                <h4 class="mb-1 font-20">Jade M. Walker</h4>
                                <h4 class="header-title text-muted mb-1">Branch Manager</h4>
                                <h5 class="mt-2 fw-normal text-muted"><span class="mdi mdi-square"></span> Vine Corporation</h5>
                                <div class="d-flex justify-content-around mt-2">
                                    <a class="btn btn-xs btn-info fw-normal" href="">Send Email</a>
                                    <a class="btn btn-xs btn-secondary fw-normal" href="">Call</a>
                                    <a class="btn btn-xs btn-secondary fw-normal" href="">Edit</a>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                                    <span class="d-block py-1 mdi mdi-account font-15"> Personal Information</span>
                                </h6>
                                <p class="text-muted mt-3 mb-2 text-uppercase">About Me : </p>
                                <p class="text-muted mt-1 text-justify">
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up.
                                </p>
                                <p class="text-muted mt-3 mb-1 text-uppercase">Date Of Birth : </p>
                                <p class="text-muted mt-1">23 June, 1997 (24 Years)</p>
                                <p class="text-muted mt-3 mb-1 text-uppercase">Company : </p>
                                <p class="text-muted mt-1">Vine Corporation</p>
                                <p class="text-muted mt-3 mb-1 text-uppercase">Added : </p>
                                <p class="text-muted mt-1">April 22, 2019</p>
                                <p class="text-muted mt-3 mb-1 text-uppercase">Updated : </p>
                                <p class="text-muted mt-1">April 29, 2019</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
@endsection
