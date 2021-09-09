@extends('layouts.app', ["page_title"=> "Add & Edit Products"])

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
                <h4 class="page-title">Add / Edit Company</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="product-name" class="form-label">Company Name <span class="text-danger">*</span></label>
                            <input type="text" id="product-name" class="form-control" placeholder="Company name">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="product-reference" class="form-label">Telephone <span class="text-danger">*</span></label>
                            <input type="text" id="product-reference" class="form-control" placeholder="Telephone">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="product-reference" class="form-label">Person Name <span class="text-danger">*</span></label>
                            <input type="text" id="product-reference" class="form-control" placeholder="Person name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="priority" class="form-label">Priority</label>
                            <select class="form-select" name="priority" id="priority">
                                <option data-display="Select">-- Select Priority --</option>
                                <option value="1">No Priority</option>
                                <option value="2">Urgent</option>
                                <option value="4">High</option>
                                <option value="4">Medium</option>
                                <option value="4">Low</option>
                            </select>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="product-reference" class="form-label">User Name <span class="text-danger">*</span></label>
                            <input type="text" id="product-reference" class="form-control" placeholder="User name">
                        </div>

                        <div class="mb-3 col-lg-6">
                        <label for="example-fileinput" class="form-label">Company Image</label>
                        <input type="file" id="example-fileinput" class="form-control">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="password" class="form-label">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" placeholder="Enter confirm password">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
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
