@extends('layouts.app', ["page_title"=> "User Page Design"])

@section('css')
    <!-- third party css -->
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/quill/quill.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endsection

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
                            <li class="breadcrumb-item active">Product Edit</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add / Edit Ticket</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="invoice-id-number" class="form-label">Invoice ID Number <span class="text-danger">*</span></label>
                            <input type="text" id="invoice-id-number" class="form-control"  placeholder="Invoice Id Number">
                        </div>

                        <div class="mb-3">
                            <label for="order-id-number" class="form-label">Order ID Number <span class="text-danger">*</span></label>
                            <select class="form-select" name="order_id" id="order-id-number">
                                <option data-display="Select">-- Select One --</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="order-date" class="form-label">Date <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fa fa-calendar"></span>
                                </div>
                                <input type="text" id="order-date" class="form-control" autocomplete="off" placeholder="dd-mm-yyyy">
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for="details" class="form-label">Details</label>
                            <textarea class="form-control" id="details" rows="2"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="order-status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="order_status" id="order-status">
                                <option data-display="Select">-- Select Order Status --</option>
                                <option value="1">Pending</option>
                                <option value="2">Received</option>
                                <option value="3">Cancel</option>
                            </select>
                        </div>

                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="product-category" class="form-label">Branch</label>
                            <select class="form-control select2" id="product-category">
                                <option>Select Branch</option>
                                <optgroup label="Shopping">
                                    <option value="SH1">Branch 01</option>
                                    <option value="SH2">Branch 02</option>
                                    <option value="SH3">Branch 03</option>
                                    <option value="SH4">Branch 04</option>
                                </optgroup>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date-time" class="form-label">Date & Time </label>
                            <input type="text" id="date-time" class="form-control"  placeholder="Date and Time">
                        </div>
                        <div class="mb-3">
                            <label for="date-time" class="form-label">Files </label>
                            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                                <div class="dz-message needsclick">
                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                    <h3>Drop files here or click to upload.</h3>
                                    <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </form>
                            <!-- Preview -->
                            <div class="dropzone-previews mt-3" id="file-previews"></div>

                        </div>
                        <div class="mb-3">
                            <label for="payment-type" class="form-label">Type Of Payment <span class="text-danger">*</span></label>
                            <select class="form-select" name="payment_type" id="payment-type">
                                <option data-display="Select">-- Select Type Of Payment --</option>
                                <option value="1">Payment Type 01</option>
                                <option value="2">Payment Type 02</option>
                                <option value="3">Payment Type 03</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- end card -->

            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                    <button type="button" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                    <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <!-- file preview template -->
        <div class="d-none" id="uploadPreviewTemplate">
            <div class="card mt-1 mb-0 shadow-none border">
                <div class="p-2">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                        </div>
                        <div class="col ps-0">
                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                <i class="dripicons-cross"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- container -->
@endsection

@section('script')
    <!-- third party js -->
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/libs/quill/quill.min.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset('assets/js/pages/form-fileuploads.init.js')}}"></script>
    <script src="{{asset('assets/js/pages/add-product.init.js')}}"></script>
    <!-- end demo js-->
@endsection
