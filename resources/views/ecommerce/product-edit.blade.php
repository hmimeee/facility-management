@extends('layouts.app', ["page_title"=> "Add & Edit Products"])

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
                <h4 class="page-title">Add / Edit Product</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="equipment-number" class="form-label">Equipment Number <span class="text-danger">*</span></label>
                        <input type="text" id="equipment-number" class="form-control" placeholder="PR765123">
                    </div>

                    <div class="mb-3">
                        <label for="equipment-name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" id="equipment-name" class="form-control" placeholder="Enter Equipment Name">
                    </div>

                    <div class="mb-3">
                        <label for="manufacturer-name" class="form-label">Manufacturer Name </label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="manufacturer_id" id="manufacturer-name">
                                    <option data-display="Select">-- Select Manufacturer --</option>
                                    <option value="1">Toyota Group</option>
                                    <option value="2">Apple</option>
                                    <option value="4">Samsung Electronics</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="color-name" class="form-label">Color Name </label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="color_id" id="color-name">
                                    <option data-display="Select">-- Select Color --</option>
                                    <option value="1">Red</option>
                                    <option value="2">Green</option>
                                    <option value="4">Blue</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit Of Measurement <span class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="unit_id" id="unit">
                                    <option data-display="Select">-- Select Unit --</option>
                                    <option value="1">Length - meter (m)</option>
                                    <option value="2">Time - second (s)</option>
                                    <option value="4">Electric current - ampere (A)</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="client" class="form-label">Client <span class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="client_id" id="client">
                                    <option data-display="Select">-- Select Client --</option>
                                    <option value="1">Client 01</option>
                                    <option value="2">Client 02</option>
                                    <option value="4">Client 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="service" class="form-label">Service <span class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="service" id="service">
                                    <option data-display="Select">-- Select Service --</option>
                                    <option value="1">Service 01</option>
                                    <option value="2">Service 02</option>
                                    <option value="4">Service 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="family" class="form-label">Family <span class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="family_id" id="family">
                                    <option data-display="Select">-- Select Family --</option>
                                    <option value="1">Family 01</option>
                                    <option value="2">Family 02</option>
                                    <option value="4">Family 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="subfamily" class="form-label">Subfamily <span class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="subfamily" id="subfamily">
                                    <option data-display="Select">-- Subfamily --</option>
                                    <option value="1">Subfamily 01</option>
                                    <option value="2">Subfamily 02</option>
                                    <option value="4">Subfamily 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Responsibility <span class="text-danger">*</span></label>

                        <div class="d-flex justify-content-between col-md-4">
                            <div class="form-check mb-2 form-check-primary">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="owner">
                                <label class="form-check-label" for="owner">Owner</label>
                            </div>

                            <div class="form-check mb-2 form-check-primary">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="shared">
                                <label class="form-check-label" for="shared">Shared</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Equipment Image </label>
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
                        <label for="income-reason" class="form-label">Reason Of Income</label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="reason_of_income" id="income-reason">
                                    <option data-display="Select">-- Select Reason Of Income --</option>
                                    <option value="1">Reason 01</option>
                                    <option value="2">Reason 02</option>
                                    <option value="4">Reason 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="income-type" class="form-label">Type Of Income</label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="reason_of_income" id="income-type">
                                    <option data-display="Select">-- Select Type Of Income --</option>
                                    <option value="1">Type 01</option>
                                    <option value="2">Type 02</option>
                                    <option value="4">Type 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="product-status" class="form-label">Status</label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="status" id="product-status">
                                    <option data-display="Select">-- Select Status --</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <select class="form-select" name="priority" id="priority">
                            <option data-display="Select">-- Select Priority --</option>
                            <option value="No Priority">No Priority</option>
                            <option value="2">Urgent</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>

                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="product-date" class="form-label">Product Date <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-calendar"></span>
                            </div>
                            <input type="text" id="product-date" class="form-control date-picker" placeholder="yyyy-mm-dd">
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="branch" class="form-label">Branch <span class="text-danger">*</span></label>
                        <select class="form-select" name="branch_id" id="family">
                            <option data-display="Select">-- Select Branch --</option>
                            <option value="1">Branch 01</option>
                            <option value="2">Branch 02</option>
                            <option value="4">Branch 03</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="product-price" class="form-label">Price($) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="product-price" placeholder="Enter Equipment Price">
                    </div>

                    <div class="mb-3">
                        <label for="warranty" class="form-label">Warranty</label>
                        <input type="number" class="form-control" id="warranty" placeholder="Enter Equipment Warranty">
                    </div>

                    <div class="mb-3">
                        <label for="supplier" class="form-label">Suppliers <span class="text-danger">*</span></label>
                        <select class="form-select" name="supplier_id" id="supplier">
                            <option data-display="Select">-- Select Supplier --</option>
                            <option value="1">Supplier 01</option>
                            <option value="2">Supplier 02</option>
                            <option value="4">Supplier 03</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="serial-number" class="form-label">Serial Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="serial-number" placeholder="Enter Serial Number">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="6" placeholder="Enter a Description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="characteristics" class="form-label">Characteristics</label>
                        <input class="form-control" id="characteristics" placeholder="Enter Specific Characteristics" />
                    </div>
                    <div class="mb-3">
                        <label for="characteristics" class="form-label">Characteristics</label> <br>
                        <label class="btn btn-light d-flex justify-content-between" style="cursor: pointer">
                            <input type="file" id="characteristics" name="photo" style="display: none">
                            Attach file, warranty files, etc. <i class="fa fa-plus" style="padding-left: 15px"></i>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="observation" class="form-label">Observations</label> <br>
                        <label class="btn btn-light d-flex justify-content-between" style="cursor: pointer">
                            <input type="file" id="observation" name="observation" style="display: none">
                            Add observations <i class="fa fa-plus" style="padding-left: 15px"></i>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="parts" class="form-label">Parts</label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="parts" id="parts">
                                    <option data-display="Select">-- Select Part/s --</option>
                                    <option value="1">Parts 01</option>
                                    <option value="2">Parts 02</option>
                                    <option value="4">Parts 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="spares" class="form-label">Spares</label>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="form-select" name="spares" id="spares">
                                    <option data-display="Select">-- Select Spare/s --</option>
                                    <option value="1">Spares 01</option>
                                    <option value="2">Spares 02</option>
                                    <option value="4">Spares 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="install-date" class="form-label">Install Date <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-calendar"></span>
                            </div>
                            <input type="text" id="install-date" name="install_date" class="form-control date-picker" autocomplete="off" placeholder="yyyy-mm-dd">
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <select class="form-select" name="floor">
                                    <option data-display="Select">-- Select Floor --</option>
                                    <option value="1">Floor 01</option>
                                    <option value="2">Floor 02</option>
                                    <option value="4">Floor 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <select class="form-select" name="area">
                                    <option data-display="Select">-- Select Area --</option>
                                    <option value="1">Area 01</option>
                                    <option value="2">Area 02</option>
                                    <option value="4">Area 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <select class="form-select" name="sector">
                                    <option data-display="Select">-- Select Sector --</option>
                                    <option value="1">Sector 01</option>
                                    <option value="2">Sector 02</option>
                                    <option value="4">Sector 03</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-light"> Add Or Remove</button>
                            </div>
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

    <script type="text/javascript">
        $(document).ready(function () {
            $('.date-picker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
@endsection
