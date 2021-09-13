@extends('layouts.app', ["page_title"=> "User Page Design"])

@section('css')
    <!-- third party css -->
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/quill/quill.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/mohithg-switchery/mohithg-switchery.min.css')}}" rel="stylesheet" type="text/css" />
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
                    <h4 class="page-title">Contract Information</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="contract-name" class="form-label">Contract's Name <span class="text-danger"> *</span></label>
                            <input type="text" id="contract-name" class="form-control"  placeholder="Contract's Name">
                        </div>
                        <div class="mb-3">
                            <label for="client" class="form-label">Client <span class="text-danger"> *</span></label>
                            <select class="form-select" name="client" id="client">
                                <option data-display="Select">-- Select Client --</option>
                                <option value="1">Client O1</option>
                                <option value="2">Client O2</option>
                                <option value="4">Client O3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <label for="client-type" class="form-label">Client Type<span class="text-danger"> *</span></label>
                                <div class="col-md-6">
                                    <select class="form-select" name="client_type" id="client-type">
                                        <option data-display="Select">-- Select Client Type --</option>
                                        <option value="1">Client Type O1</option>
                                        <option value="2">Client Type O2</option>
                                        <option value="4">Client Type O3</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="branch-id" class="form-label">Branches</label>
                            <select class="form-select" name="branch_id" id="branch-id">
                                <option data-display="Select">-- Select Branch --</option>
                                <option value="1">Branch O1</option>
                                <option value="2">Branch O2</option>
                                <option value="4">Branch O3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="third-parties" class="form-label">Third Parties <span class="text-danger">*</span></label>

                            <div class="d-flex justify-content-between col-md-4">
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="third_parties" id="third-parties-yes" checked>
                                    <label class="form-check-label" for="third-parties-yes">Yes</label>
                                </div>

                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="third_parties" id="third-parties-no">
                                    <label class="form-check-label" for="third-parties-no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company <span class="text-danger">*</span></label>

                            <div class="d-flex justify-content-between col-md-4">
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="company" id="company-yes">
                                    <label class="form-check-label" for="company-yes">Yes</label>
                                </div>
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="company" id="company-no" checked>
                                    <label class="form-check-label" for="company-no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="third-parties" class="form-label">Share Responsibility <span class="text-danger">*</span></label>

                            <div class="d-flex justify-content-between col-md-4">
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="share_responsibility" id="responsibility-yes">
                                    <label class="form-check-label" for="responsibility-yes">Yes</label>
                                </div>
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="share_responsibility" id="responsibility-no" checked>
                                    <label class="form-check-label" for="responsibility-no">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="branch-id" class="form-label">Priority</label>
                            <select class="form-select" name="branch_id" id="branch-id">
                                <option data-display="Select">-- Select Priority --</option>
                                <option value="no priority">No Priority</option>
                                <option value="urgent">Urgent</option>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- end demo js--->


    <!-- demo app -->
    <script src="{{asset('assets/libs/mohithg-switchery/mohithg-switchery.min.js')}}"></script>
    <script src="{{asset('assets/libs/selectize/selectize.min.js')}}"></script>
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>


    <script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
    <!-- end demo js-->

@endsection
