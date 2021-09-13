@extends('layouts.app', ["page_title"=> "seller create | edit"])

@section('css')
<!-- third party css -->
<link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">seller edit | crete</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Add / Edit Seller</h4>
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
                        <label for="product-name" class="form-label">Seller Name <span class="text-danger">*</span></label>
                        <input type="text" id="product-name" class="form-control" placeholder="Seller name">
                    </div>

                    <div class="mb-3 col-lg-6">
                        <label for="product-reference" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" id="product-reference" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="product-reference" class="form-label">Company Name <span class="text-danger">*</span></label>
                        <input type="text" id="product-reference" class="form-control" placeholder="Company name">
                    </div>

                    <div class="mb-3 col-lg-6">
                        <label for="product-reference" class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" id="product-reference" class="form-control" placeholder="Phone number">
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
                    <div class="mb-3 col-lg-6">
                        <div class="mt-3 relative">
                            <input type="file" data-plugins="dropify" data-default-file="../assets/images/small/img-2.jpg')}}" />
                        </div>
                    </div>
                        <div class="mb-3 col-lg-6">
                            <div class="switchery-demo">
                                <label for="create-user" class="form-label"> Create User </label>
                                <input class="ms-2" id="create-user" type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                            </div>
                        </div>
                    <div class="mb-3 col-lg-12">
                            <label class="form-label px-2" for="address">Address</label>
                            <input class="form-control" name="address" />
                    </div>
                        <div class="mb-3 col-lg-12 row">
                            <div class="mb-3 col-lg-4">
                                <label for="example-select" class="form-label">Select City</label>
                                <select class="form-select" id="example-select">
                                <option>city one</option>
                                <option>city two</option>
                                <option>city three</option>
                                </select>
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="example-select" class="form-label">Select State</label>
                                <select class="form-select" id="example-select">
                                <option>State one</option>
                                <option>State two</option>
                                <option>State three</option>
                                </select>
                            </div>
                             <div class="mb-3 col-lg-4">
                                <label for="example-select" class="form-label">Zip</label>
                                 <input type="text" id="product-reference" class="form-control" placeholder="Zip">
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div> <!-- end card -->
    </div>
</div> <!-- container -->
@endsection

@section('script')
<!-- third party js -->
<script src="{{asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
<script src="{{asset('assets/libs/dropify/dropify.min.js')}}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{asset('assets/js/pages/form-fileuploads.init.js')}}"></script>
<script src="{{asset('assets/libs/mohithg-switchery/mohithg-switchery.min.js')}}"></script>
<script src="{{asset('assets/libs/selectize/selectize.min.js')}}"></script>
<script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>


<script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
<!-- end demo js-->
@endsection
