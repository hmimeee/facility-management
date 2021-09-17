@extends('layouts.app', ["page_title"=> "Support Ticket Details"])

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
                            <li class="breadcrumb-item active">Ticket Detail</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Order Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="float-sm-end mb-2 mb-sm-0">
                            <div class="row g-2">
                                <div class="col-auto">
                                    <a href="{{route('second', ['tickets', 'list'])}}" class="btn btn-sm btn-link"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                                </div>
                            </div>
                        </div> <!-- end dropdown-->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <h4 class="header-title font-26 fw-bold">Order Name - #0012345</h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="header-title font-26 fw-bold">Title - Order Type</h4>
                            </div>
                            <div class="col-md-4 mt-3">
                                <!-- Reported by -->
                                <label class="mt-2 mb-1">Assigned To  :</label>
                                <div class="d-flex align-items-start">
                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="Arya S" class="rounded-circle me-2" height="24" />
                                    <div class="w-100">
                                        <p> Jonathan Andrews </p>
                                    </div>
                                </div>
                                <!-- end Reported by -->
                            </div> <!-- end col -->
                            <div class="col-md-4 mt-3">
                                <label class="mt-2 mb-1">Priority :</label> <br>
                                <span class="badge bg-soft-success text-success ms-2">Active</span>
                                <!-- end assignee -->
                            </div> <!-- end col -->
                            <div class="col-md-4 mt-3">
                                <label class="mt-2 mb-1">Due :</label>
                                <p>10 Feb 2020 <small class="text-muted">1:37 PM</small></p>
                                <!-- end assignee -->
                            </div> <!-- end col -->
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-7">
                                <div class="card border">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Status</label>
                                <select class="form-select" name="user-role" id="report-day">
                                    <option value="1"><span class="badge bg-danger">Not Started</span></option>
                                    <option value="2"><span class="badge bg-info">In Progress</span></option>
                                    <option value="2"><span class="badge bg-warning">On Hold</span></option>
                                    <option value="2"><span class="badge bg-success">Completed</span></option>
                                </select>

                            </div>
                        </div>
                    </div> <!-- end card-body-->

                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-4 col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-16 mb-3">Attachments</h5>
                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                        <span class="avatar-title badge-soft-primary text-primary rounded">
                                            pdf
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">invoice-dec-2019.pdf</a>
                                        <p class="mb-0 font-12">2.3 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                        <span class="avatar-title badge-soft-primary text-primary rounded">
                                            doc
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">paypal-statement.docs</a>
                                        <p class="mb-0 font-12">0.25 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                        <span class="avatar-title bg-secondary rounded">
                                            pdf
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">visa-credit-card.pdf</a>
                                        <p class="mb-0 font-12">1.05 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
