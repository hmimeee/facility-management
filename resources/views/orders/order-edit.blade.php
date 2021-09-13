@extends('layouts.app', ["page_title"=> "User Page Design"])

@section('css')
    <!-- third party css -->
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/quill/quill.min.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('assets/libs/spectrum-colorpicker2/spectrum-colorpicker2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/clockpicker/clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

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
                    <h4 class="page-title">Add / Edit Order</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="id-number" class="form-label">Order ID Number <span class="text-danger">*</span></label>
                            <input type="text" id="id-number" class="form-control" value="J00009"  placeholder="Order Id Number" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="associated-product" class="form-label">Associated Product <span class="text-danger">*</span></label>
                            <select class="form-select" name="associated_product " id="associated-product ">
                                <option data-display="Select">-- Select Associated Product --</option>
                                <option value="1">Associated Product 01</option>
                                <option value="2">Associated Product 02</option>
                                <option value="4">Associated Product 03</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="order-title" class="form-label">Order Title <span class="text-danger">*</span></label>
                            <input type="text" id="order-title" class="form-control" placeholder="Order Title">
                        </div>

                        <div class="mb-3">
                            <label for="product-category" class="form-label">Categories <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="product-category">
                                <option>Select</option>
                                <optgroup label="Shopping">
                                    <option value="SH1">Shopping 1</option>
                                    <option value="SH2">Shopping 2</option>
                                    <option value="SH3">Shopping 3</option>
                                    <option value="SH4">Shopping 4</option>
                                </optgroup>
                                <optgroup label="CRM">
                                    <option value="CRM1">Crm 1</option>
                                    <option value="CRM2">Crm 2</option>
                                    <option value="CRM3">Crm 3</option>
                                    <option value="CRM4">Crm 4</option>
                                </optgroup>
                                <optgroup label="eCommerce">
                                    <option value="E1">eCommerce 1</option>
                                    <option value="E2">eCommerce 2</option>
                                    <option value="E3">eCommerce 3</option>
                                    <option value="E4">eCommerce 4</option>
                                </optgroup>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Details</label>
                            <textarea class="form-control" id="details" rows="6"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Type <span class="text-danger">*</span></label>

                            <div class="d-flex justify-content-between col-md-4">
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customradio2">
                                    <label class="form-check-label" for="customradio2">Preventive</label>
                                </div>

                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customradio3" checked>
                                    <label class="form-check-label" for="customradio3">Corrective</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="client" class="form-label">Client <span class="text-danger">*</span></label>
                            <select class="form-select" name="client" id="client">
                                <option data-display="Select">-- Select Client --</option>
                                <option value="1">Client 01</option>
                                <option value="2">Client 02</option>
                                <option value="4">Client 03</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="contract " class="form-label">Contract <span class="text-danger">*</span></label>
                            <select class="form-select" name="contract " id="contract ">
                                <option data-display="Select">-- Select Contract --</option>
                                <option value="1">Contract 01</option>
                                <option value="2">Contract 02</option>
                                <option value="4">Contract 03</option>
                            </select>
                        </div>
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
                            <label class="form-label">Date & Time</label>
                            <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time">
                        </div>
                        <div class="mb-3">
                            <label for="assign-to" class="form-label">Assign To <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" id="assign-to" name="install_date" class="form-control" autocomplete="off" placeholder="Username">
                            </div>

                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
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

    <!-- third party js -->
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/libs/spectrum-colorpicker2/spectrum-colorpicker2.min.js')}}"></script>
    <script src="{{asset('assets/libs/clockpicker/clockpicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset('assets/js/pages/form-pickers.init.js')}}"></script>
    <!-- end demo js-->
@endsection
