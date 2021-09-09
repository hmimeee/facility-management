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
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light mb-2">
                            <span class="d-block py-1">General</span>
                        </h6>
                        <div class="mb-3">
                            <label for="floor" class="form-label">Floor <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="floor">
                                <option>Select Floor</option>
                                <option value="1">Floor 01</option>
                                <option value="2">Floor 02</option>
                                <option value="3">Floor 03</option>
                                <option value="4">Floor 04</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="area" class="form-label">Area <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="area">
                                <option>Select Area</option>
                                <option value="1">Area 01</option>
                                <option value="2">Area 02</option>
                                <option value="3">Area 03</option>
                                <option value="4">Area 04</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sector" class="form-label">Sector <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="sector">
                                <option>Select Sector</option>
                                <option value="1">Sector 01</option>
                                <option value="2">Sector 02</option>
                                <option value="3">Sector 03</option>
                                <option value="4">Sector 04</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="equipment" class="form-label">Equipment <span class="text-danger">*</span></label>
                            <select class="form-control select2" id="equipment">
                                <option>Select Equipment</option>
                                <option value="1">Equipment 01</option>
                                <option value="2">Equipment 02</option>
                                <option value="3">Equipment 03</option>
                                <option value="4">Equipment 04</option>
                            </select>
                        </div>

                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light mb-2">
                            <span class="d-block py-1">QR</span>
                        </h6>
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
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn w-sm btn-info waves-effect waves-light me-1">Scan</button>
                            <button type="button" class="btn w-sm btn-success waves-effect waves-light">Generate</button>
                        </div>
                    </div>
                </div> <!-- end card -->

            </div> <!-- end col-->
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
