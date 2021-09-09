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
                    <h4 class="page-title">Create / Edit Users</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" id="first-name" class="form-control" placeholder="First Name">
                        </div>

                        <div class="mb-3">
                            <label for="user" class="form-label">User </label>
                            <input type="text" id="user" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="birth-date" class="form-label">Date Of Birth </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fa fa-calendar"></span>
                                </div>
                                <input type="text" id="birth-date" class="form-control" autocomplete="off" placeholder="dd-mm-yyyy" data-provide="datepicker">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword4" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>

                        <div class="mb-3">
                            <label for="phone-number" class="form-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" id="phone-number" class="form-control" placeholder="Phone number">
                        </div>

                        <div class="mb-3">
                            <label for="admission-date" class="form-label">Admission Date <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fa fa-calendar"></span>
                                </div>
                                <input type="text" id="admission-date" class="form-control" autocomplete="off" placeholder="dd-mm-yyyy" data-provide="datepicker">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="finish-date" class="form-label">Finish Date </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fa fa-calendar"></span>
                                </div>
                                <input type="text" id="finish-date" class="form-control" autocomplete="off" placeholder="dd-mm-yyyy" data-provide="datepicker">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo </label>
                            <input type="file" id="photo" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                            <select class="form-select" name="country" id="country">
                                <option data-display="Select">-- Select Country --</option>
                                <option value="1">America</option>
                                <option value="2">Bangladesh</option>
                                <option value="4">Pakistan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">City </label>
                            <select class="form-select" name="city" id="city">
                                <option data-display="Select">-- Select City --</option>
                                <option value="1">City 01</option>
                                <option value="2">City 02</option>
                                <option value="4">City 03</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="last-name" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" id="last-name" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>

                            <div class="d-flex justify-content-between col-md-4">
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customradio2">
                                    <label class="form-check-label" for="customradio2">Male</label>
                                </div>

                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customradio3">
                                    <label class="form-check-label" for="customradio3">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="example-email" class="form-label">Email<span class="text-danger">*</span></label>
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword4" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="mobile-number" class="form-label">Mobile Number</label>
                            <input type="text" id="mobile-number" class="form-control" placeholder="Mobile Number">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                            <input type="text" id="role" class="form-control" placeholder="Role">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Boss </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Role">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="User">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="client" class="form-label">Client </label>
                                    <input id="client" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <label for="contract" class="form-label">Contract </label>
                                    <input id="contract" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <label for="branch" class="form-label">Branch </label>
                                    <input id="branch" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="user-status" class="form-label">Status </label>
                            <select class="form-select" name="status" id="user-status">
                                <option data-display="Select">-- Select Status --</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="address" rows="2" placeholder="Enter a Description"></textarea>
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
