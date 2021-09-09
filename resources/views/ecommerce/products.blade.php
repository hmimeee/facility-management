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
                <h4 class="page-title">Products</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <form class="d-flex flex-wrap align-items-center">
                                <label for="inputPassword2" class="visually-hidden">Search</label>
                                <div class="me-3">
                                    <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Search...">
                                </div>
                                <label for="status-select" class="me-2">Sort By</label>
                                <div class="me-sm-3">
                                    <select class="form-select my-1 my-lg-0" id="status-select">
                                        <option selected="">All</option>
                                        <option value="1">Popular</option>
                                        <option value="2">Price Low</option>
                                        <option value="3">Price High</option>
                                        <option value="4">Sold Out</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-auto">
                            <div class="text-lg-end my-1 my-lg-0">
                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                <a href="{{route('second', ['ecommerce', 'product-edit'])}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add New</a>
                            </div>
                        </div><!-- end col-->
                    </div> <!-- end row -->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Product Number</th>
                                <th>Image</th>
                                <th>Manufacturer Name</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Seller Name</th>
                                <th>Priority</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                               <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9708</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-1.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-2.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>
                                       Google
                                    </td>
                                    <td>
                                        Goolge Drive
                                    </td>
                                    <td>
                                        $176.41
                                    </td>
                                    <td>
                                        Mastercard
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-info">High</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9707</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-3.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-4.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-5.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>
                                        Apple Inc.
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-soft-warning text-warning"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></h5>
                                    </td>
                                    <td>
                                        $1,458.65
                                    </td>
                                    <td>
                                        Visa
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-warning">Processing</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck4">
                                            <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9706</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-7.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Facebook Inc</td>
                                    <td>
                                        <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $801.99
                                    </td>
                                    <td>
                                        Credit Card
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-warning">Processing</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck5">
                                            <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9705</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-3.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-8.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Apple Inc.</td>
                                    <td>
                                        <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $215.35
                                    </td>
                                    <td>
                                        Mastercard
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-success">Delivered</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck6">
                                            <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9704</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-5.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-7.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Amazon Inc.</td>
                                    <td>
                                        <h5><span class="badge bg-soft-danger text-danger"><i class="mdi mdi-cancel"></i> Payment Failed</span></h5>
                                    </td>
                                    <td>
                                        $2,514.36
                                    </td>
                                    <td>
                                        Paypal
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-danger">Cancelled</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck7">
                                            <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9703</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-2.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Facebook Inc</td>
                                    <td>
                                        <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $183.20
                                    </td>
                                    <td>
                                        Payoneer
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-info">Shipped</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck8">
                                            <label class="form-check-label" for="customCheck8">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9702</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-4.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-6.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Amazon Inc.</td>
                                    <td>
                                        <h5><span class="badge bg-soft-warning text-warning"><i class="mdi mdi-timer-sand"></i> Awaiting Authorization</span></h5>
                                    </td>
                                    <td>
                                        $1,768.41
                                    </td>
                                    <td>
                                        Visa
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-warning">Processing</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck9">
                                            <label class="form-check-label" for="customCheck9">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9701</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-6.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-8.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-3.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Facebook Inc</small></td>
                                    <td>
                                        <h5><span class="badge bg-soft-info text-info"><i class="mdi mdi-cash"></i> Cash on Delivery</span></h5>
                                    </td>
                                    <td>
                                        $3,582.99
                                    </td>
                                    <td>
                                        Paypal
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-info">Shipped</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck10">
                                            <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9700</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-2.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-5.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Airbnb Inc.</td>
                                    <td>
                                        <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $923.95
                                    </td>
                                    <td>
                                        Credit Card
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-success">Delivered</span></h5>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck11">
                                            <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="text-body fw-bold">#UB9699</a> </td>
                                    <td>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-7.png')}}" alt="product-img" height="32" /></a>
                                        <a href="{{route('second', ['ecommerce', 'product-detail'])}}"><img src="{{asset('assets/images/products/product-8.png')}}" alt="product-img" height="32" /></a>
                                    </td>
                                    <td>Airbnb Inc.</td>
                                    <td>
                                        <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                    </td>
                                    <td>
                                        $5,177.68
                                    </td>
                                    <td>
                                        Mastercard
                                    </td>
                                    <td>
                                        <h5><span class="badge bg-info">Shipped</span></h5>
                                    </td>
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
