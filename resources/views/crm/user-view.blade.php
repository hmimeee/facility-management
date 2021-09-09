@extends('layouts.app', ["page_title"=> "CRM Customers"])

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Customers</li>
                    </ol>
                </div>
                <h4 class="page-title">Customers</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
       <div class="col-lg-4">
            <div class="text-center card">
                <div class="card-body">
                    <div class="pt-2 pb-2">
                        <img src="https://facility.test/assets/images/users/user-3.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Freddie J. Plourde</a></h4>
                        <p class="text-muted">@Founder  <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                    </div> <!-- end .padding -->
                </div>
            </div> <!-- end card-->
        </div>
        <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
               <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                            <h4> Finish orders</h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6><span class="float-end">60</span></h6>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-6">
               <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                            <h4>Work Hours</h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6><span class="float-end">60</span></h6>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-6">
               <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                            <h4>Pendient Orders</h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6><span class="float-end">6</span></h6>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-6">
               <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                            <h4>Not started orders</h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6><span class="float-end">60</span></h6>
                        </div>
                    </div>
                </div>
              </div>


            </div>
        </div>
    </div>


    <div>
        <div class="col-lg-12">
            <!-- new post -->
            <div class="card">
                <div class="card-body p-0">
                    <ul class="nav nav-tabs nav-bordered">
                        <li class="nav-item">
                            <a href="#newpost" data-bs-toggle="tab" aria-expanded="false" class="nav-link px-3 py-2">
                                <i class="mdi mdi-pencil-box-multiple font-18 d-md-none d-block"></i>
                                <span class="d-none d-md-block">Information</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#photo-video" data-bs-toggle="tab" aria-expanded="true" class="nav-link px-3 py-2">
                                <i class="mdi mdi-image font-18 d-md-none d-block"></i>
                                <span class="d-none d-md-block">Orders</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content pt-0">
                        <div class="tab-pane show p-3 active" id="newpost">
                          <div class="row">
                            <div class="col-lg-4">
                               <h4>ID Empleado</h4>
                               <p>30303</p>
                            </div>
                            <div class="col-lg-4">
                               <h4>Nombre completo</h4>
                               <p>30303</p>
                            </div>
                            <div class="col-lg-4">
                               <h4>calurar</h4>
                               <p>30303</p>
                            </div>
                          </div>

                           <div class="row">
                            <div class="col-lg-4">
                               <h4>Email</h4>
                               <p>admin@gmail.com</p>
                            </div>
                            <div class="col-lg-4">
                               <h4>Direceion</h4>
                            </div>
                          </div>
                           <div class="row">
                            <div class="col-lg-4">
                               <h4>Cargos</h4>
                               <p>admin@gmail.com</p>
                            </div>
                            <div class="col-lg-4">
                               <h4>sucural</h4>
                               <p>admin</p>
                            </div>
                          </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end new post -->

            <!-- end loader -->
        </div>
    </div>


</div>
@endsection
