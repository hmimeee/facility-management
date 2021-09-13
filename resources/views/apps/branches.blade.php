@extends('layouts.app', ["page_title"=> "Ecommerce Products"])
@section('css')
    <!-- third party css -->
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Branches</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-lg-end mb-3">
                            <a href="{{route('second', ['apps', 'branch-edit'])}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add Branch</a>
                        </div>
                        <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>Branch Name</th>
                                <th>Client</th>
                                <th>Contracts Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Branch 01</td>
                                <td>Google</td>
                                <td> Contract 01 </td>
                                <td>Dhaka, Bangladesh</td>
                                <td>mahadihassa.cse@gmail.com</td>
                                <td>+8801795232590</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch 01</td>
                                <td>Google</td>
                                <td> Contract 01 </td>
                                <td>Dhaka, Bangladesh</td>
                                <td>mahadihassa.cse@gmail.com</td>
                                <td>+8801795232590</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch 01</td>
                                <td>Google</td>
                                <td> Contract 01 </td>
                                <td>Dhaka, Bangladesh</td>
                                <td>mahadihassa.cse@gmail.com</td>
                                <td>+8801795232590</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch 01</td>
                                <td>Google</td>
                                <td> Contract 01 </td>
                                <td>Dhaka, Bangladesh</td>
                                <td>mahadihassa.cse@gmail.com</td>
                                <td>+8801795232590</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch 01</td>
                                <td>Google</td>
                                <td> Contract 01 </td>
                                <td>Dhaka, Bangladesh</td>
                                <td>mahadihassa.cse@gmail.com</td>
                                <td>+8801795232590</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch 01</td>
                                <td>Google</td>
                                <td> Contract 01 </td>
                                <td>Dhaka, Bangladesh</td>
                                <td>mahadihassa.cse@gmail.com</td>
                                <td>+8801795232590</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch 01</td>
                                <td>Google</td>
                                <td> Contract 01 </td>
                                <td>Dhaka, Bangladesh</td>
                                <td>mahadihassa.cse@gmail.com</td>
                                <td>+8801795232590</td>
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>

    </div> <!-- container -->
@endsection
@section('script')
    <!-- third party js -->
    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
    <!-- end demo js-->
@endsection
