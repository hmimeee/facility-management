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
                    <h4 class="page-title">Ticket #1632</h4>
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
                                    <a href="{{route('second', ['tickets', 'ticket-list'])}}" class="btn btn-sm btn-link"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                                </div>
                            </div>
                        </div> <!-- end dropdown-->
                        <div class="clerfix"></div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 me-auto"><h4 class="header-title">Client :</h4></div>
                                    <div class="col-md-4 me-auto"><p class="text-body fw-bold">Client Name</p></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 me-auto"><h4 class="header-title">Branch :</h4></div>
                                    <div class="col-md-4 me-auto"><p class="text-body fw-bold">Branch Name</p></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 me-auto"><h4 class="header-title">Order :</h4></div>
                                    <div class="col-md-4 me-auto"><a href="" class="text-body fw-bold">#0001325</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 me-auto"><h4 class="header-title">Status :</h4></div>
                                    <div class="col-md-4 me-auto"><span class="badge bg-primary">Shipped</span></div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <h4 class="header-title">Details :</h4>
                                <div class="card border" style="border-radius: 20px">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h4 class="header-title">Price : </h4>
                                <h4 class="page-title ms-2">$3550</h4>
                            </div>
                        </div>
                    </div> <!-- end card-body-->

                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-4 col-lg-5">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title font-16 mb-3">Attachments</h5>
                            <span class="fas fa-cloud-upload-alt"></span>
                        </div>
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
