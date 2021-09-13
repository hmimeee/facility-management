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
                    <h4 class="page-title">Add / Edit User Role</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="card">
            <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="role-name" class="form-label">Role Name <span class="text-danger">*</span></label>
                          <input type="text" id="role-name" class="form-control"  placeholder="Role Name">
                      </div>
                      <div class="mb-3">
                          <div class="d-flex justify-content-between mb-3">
                              <h4 class="page-title">User Types</h4>
                              <div class="form-check form-check-primary mt-2">
                                  <input class="form-check-input" type="checkbox" value="" id="customckeck1">
                                  <label class="form-check-label" for="customckeck1">Service Staff</label>
                              </div>
                          </div>
                      </div>
                      <div class="mb-3">
                          <h4 class="header-title">Permissions : </h4>
                      </div>
                      <div class="mb-3">
                          <div class="d-flex justify-content-between mb-3">
                              <h4 class="header-title">Module</h4>
                              <div class="form-check form-check-primary mt-2">
                                  <input class="form-check-input" type="checkbox" value="" id="select-all">
                                  <label class="form-check-label" for="select-all">Select All</label>
                              </div>
                              <div class="form-check form-check-primary mt-2">
                                  <input class="form-check-input" type="checkbox" value="" id="view-user">
                                  <label class="form-check-label" for="view-user">View Users</label>
                                  <div class="d-flex justify-content-between mt-1">
                                      <label class="form-check-label" for="user-view"> Need Authorization </label>
                                     <div class="switchery-demo ms-1">
                                         <input class="ms-2" id="user-view" type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                                     </div>
                                 </div>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                         <div class="col-auto ms-auto">
                             <div class="form-check form-check-primary mt-1">
                                 <input class="form-check-input" type="checkbox" value="" id="add-user">
                                 <label class="form-check-label" for="add-user">Add User</label>
                                 <div class="d-flex justify-content-between mt-1">
                                     <label class="form-check-label" for="user-add"> Need Authorization </label>
                                     <div class="switchery-demo ms-1">
                                         <input class="ms-2" id="user-add" type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                                     </div>
                                 </div>
                             </div>
                             <div class="form-check form-check-primary mt-1">
                                 <input class="form-check-input" type="checkbox" value="" id="edit-user">
                                 <label class="form-check-label" for="edit-user">Edit User</label>
                                 <div class="d-flex justify-content-between mt-1">
                                     <label class="form-check-label" for="user-edit"> Need Authorization </label>
                                     <div class="switchery-demo ms-1">
                                         <input class="ms-2" id="user-edit" type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                                     </div>
                                 </div>
                             </div>
                             <div class="form-check form-check-primary mt-1">
                                 <input class="form-check-input" type="checkbox" value="" id="delete-user">
                                 <label class="form-check-label" for="delete-user">Delete User</label>
                                 <div class="d-flex justify-content-between mt-1">
                                     <label class="form-check-label" for="user-delete"> Need Authorization </label>
                                     <div class="switchery-demo ms-1">
                                         <input class="ms-2" id="user-delete" type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                                     </div>
                                 </div>
                             </div>
                         </div>
                      </div>
                      <div class="mb-3">
                          <div class="form-check form-check-primary">
                              <input class="form-check-input" type="checkbox" id="log-out">
                              <label class="form-check-label" for="log-out">Logout</label>
                          </div>
                      </div>
                      <div class="mb-3 row set-logout-time">
                          <label for="after" class="form-label">After </label>
                          <div class="col-lg-6">
                              <select class="form-select" name="after" id="after">
                                  <option value="1">Minutes</option>
                                  <option value="2">Hours</option>
                                  <option value="3">Days</option>
                                  <option value="3">Never</option>
                              </select>
                          </div>
                          <div class="col-lg-6">
                              <input type="text" class="form-control" value="#320RR2">
                          </div>
                      </div>

                  </div>
              </div>
            </div>
        </div> <!-- end card -->
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

    <script type="text/javascript">
        $(document).ready(function() {
            /********************************
             SELECT ALL SCRIPTING START HERE
             ********************************/
            $('#select-all').change(function () {
                if ($(this).prop('checked')) {
                    $('#view-user,#add-user, #delete-user').prop('checked', true);
                } else {
                    $('#view-user,#add-user, #delete-user').prop('checked', false);
                }
            });

            /***************************
             LOGOUT SCRIPTING START HERE
             ***************************/
            $('.set-logout-time').hide();
            $('#log-out').change(function () {
                if ($(this).prop('checked')) $('.set-logout-time').show();
                 else $('.set-logout-time').hide();
            });

            $('#select-all').trigger('change');
            $('#logout').trigger('change');
        });

    </script>

@endsection
