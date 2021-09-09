@extends('layouts.app', ["page_title"=> "Companies"])

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">Companies</li>
                    </ol>
                </div>
                <h4 class="page-title">Companies</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-8">
                            <form class="d-flex flex-wrap align-items-center">
                                <label for="inputPassword2" class="visually-hidden">Search</label>
                                <div class="me-3">
                                    <input type="search" class="form-control my-1 my-md-0" id="inputPassword2" placeholder="Search...">
                                </div>
                                <label for="status-select" class="me-2">Sort By</label>
                                <div class="me-sm-3">
                                    <select class="form-select my-1 my-md-0" id="status-select">
                                        <option>Select</option>
                                        <option>Date</option>
                                        <option selected>Name</option>
                                        <option>Revenue</option>
                                        <option>Employees</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="text-md-end mt-3 mt-md-0">
                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                <a  href="/apps/company-create" class="btn btn-danger waves-effect waves-light me-1"><i class="mdi mdi-plus-circle me-1"></i> Add New</a>
                            </div>
                        </div><!-- end col-->
                    </div> <!-- end row -->
                </div>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('assets/images/companies/amazon.png')}}" alt="logo" class="avatar-xl rounded-circle mb-3">
                        <h4 class="mb-1 font-20">Amazon Inc.</h4>
                        <p class="text-muted  font-14">Seattle, Washington</p>
                    </div>
                     <div class="font-14 text-center text-muted">
                        <p>
                            <a href="#"> <i class="fas fa-envelope"></i><span class="px-1">client@gmail.com</span></a>
                        </p>
                        <p>
                            <a href="#"> <i class="fe-phone"></i><span class="px-1">838493737</span></a>
                        </p>
                     </div>

                    <div class="row mt-4 text-center">
                        <div class="col-6">
                            <h3>5</h3>
                            <h5 class="fw-normal text-muted">Contracts </h5>
                        </div>
                        <div class="col-6">
                            <h3>56</h3>
                            <h5 class="fw-normal text-muted">Branches</h5>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div><!-- end col -->

        <div class="col-lg-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('assets/images/companies/apple.png')}}" alt="logo" class="avatar-xl rounded-circle mb-3">
                        <h4 class="mb-1 font-20">Apple Inc.</h4>
                        <p class="text-muted  font-14">Cupertino, California</p>
                    </div>
                    <div class="font-14 text-center text-muted">
                        <p>
                            <a href="#"> <i class="fas fa-envelope"></i><span class="px-1">client@gmail.com</span></a>
                        </p>
                        <p>
                            <a href="#"> <i class="fe-phone"></i><span class="px-1">838493737</span></a>
                        </p>
                     </div>

                    <div class="row mt-4 text-center">
                        <div class="col-6">
                            <h3>3</h3>
                            <h5 class="fw-normal text-muted">Contracts </h5>
                        </div>
                        <div class="col-6">
                            <h3>7</h3>
                            <h5 class="fw-normal text-muted">Branches</h5>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div><!-- end col -->

        <div class="col-lg-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('assets/images/companies/google.png')}}" alt="logo" class="avatar-xl rounded-circle mb-3">
                        <h4 class="mb-1 font-20">Google LLC</h4>
                        <p class="text-muted  font-14">Menlo Park, California</p>
                    </div>

                     <div class="font-14 text-center text-muted">
                        <p>
                            <a href="#"> <i class="fas fa-envelope"></i><span class="px-1">client@gmail.com</span></a>
                        </p>
                        <p>
                            <a href="#"> <i class="fe-phone"></i><span class="px-1">838493737</span></a>
                        </p>
                     </div>

                    <div class="row mt-4 text-center">
                        <div class="col-6">
                            <h3>15</h3>
                            <h5 class="fw-normal text-muted">Contracts </h5>
                        </div>
                        <div class="col-6">
                            <h3>6</h3>
                            <h5 class="fw-normal text-muted">Branches</h5>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('assets/images/companies/airbnb.png')}}" alt="logo" class="avatar-xl rounded-circle mb-3">
                        <h4 class="mb-1 font-20">Airbnb Inc.</h4>
                        <p class="text-muted  font-14">San Francisco, California</p>
                    </div>

                    <div class="font-14 text-center text-muted">
                        <p>
                            <a href="#"> <i class="fas fa-envelope"></i><span class="px-1">client@gmail.com</span></a>
                        </p>
                        <p>
                            <a href="#"> <i class="fe-phone"></i><span class="px-1">838493737</span></a>
                        </p>
                     </div>

                    <div class="row mt-4 text-center">
                        <div class="col-6">
                            <h3>15</h3>
                            <h5 class="fw-normal text-muted">Contracts </h5>
                        </div>
                        <div class="col-6">
                            <h3>76</h3>
                            <h5 class="fw-normal text-muted">Branches</h5>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div><!-- end col -->

        <div class="col-lg-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('assets/images/companies/facebook.png')}}" alt="logo" class="avatar-xl rounded-circle mb-3">
                        <h4 class="mb-1 font-20">Facebook Inc.</h4>
                        <p class="text-muted  font-14">Cambridge, Massachusetts</p>
                    </div>

                    <div class="font-14 text-center text-muted">
                        <p>
                            <a href="#"> <i class="fas fa-envelope"></i><span class="px-1">client@gmail.com</span></a>
                        </p>
                        <p>
                            <a href="#"> <i class="fe-phone"></i><span class="px-1">838493737</span></a>
                        </p>
                     </div>

                    <div class="row mt-4 text-center">
                        <div class="col-6">
                            <h3>50</h3>
                            <h5 class="fw-normal text-muted">Contracts </h5>
                        </div>
                        <div class="col-6">
                            <h3>56</h3>
                            <h5 class="fw-normal text-muted">Branches</h5>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div><!-- end col -->

        <div class="col-lg-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('assets/images/companies/cisco.png')}}" alt="logo" class="avatar-xl rounded-circle mb-3">
                        <h4 class="mb-1 font-20">Cisco Systems</h4>
                        <p class="text-muted  font-14">San Jose, California</p>
                    </div>

                    <div class="font-14 text-center text-muted">
                        <p>
                            <a href="#"> <i class="fas fa-envelope"></i><span class="px-1">client@gmail.com</span></a>
                        </p>
                        <p>
                            <a href="#"> <i class="fe-phone"></i><span class="px-1">838493737</span></a>
                        </p>
                     </div>

                    <div class="row mt-4 text-center">
                        <div class="col-6">
                            <h3>57</h3>
                            <h5 class="fw-normal text-muted">Contracts </h5>
                        </div>
                        <div class="col-6">
                            <h3>9</h3>
                            <h5 class="fw-normal text-muted">Branches</h5>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-end">
                <ul class="pagination pagination-rounded justify-content-end">
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
    <!-- end row -->

</div> <!-- container -->
@endsection
