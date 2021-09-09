@extends('layouts.app', ["page_title"=> "Sellers"])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Sellers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Roles <small>Manage roles</small></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between mb-3">
                            <div class="col-auto">
                                <h4 class="header-title">All roles</h4>
                            </div>
                            <div class="col-auto">
                                <a href="/designs/role-create-page" class="btn btn-primary"><i class="mdi mdi-plus-circle"></i> Add</a>
                            </div>
                        </div>
                        <div class="row justify-content-between mb-2">
                            <div class="col-auto">
                                <label class="d-inline-flex align-items-center mb-3">
                                    Show
                                    <select id="demo-show-entries" class="form-select form-select-sm ms-1 me-1">
                                        <option value="5">25</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>
                                    entries
                                </label>
                            </div>
                            <div class="col-auto">
                                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                            </div>
                        </div>

                        <table id="demo-foo-addrow" class="table table-centered table-striped mb-0 toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th data-sort-initial="true" data-toggle="true">Roles</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Admin</td>
                                <td>
                                    <a class="tabledit-edit-button btn btn-success btn-sm"><span class="mdi mdi-pencil"></span> Edit</a>
                                    <a class="tabledit-edit-button btn btn-danger btn-sm"><span class="mdi mdi-trash-can"></span> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cashier</td>
                                <td>
                                    <a class="tabledit-edit-button btn btn-success btn-sm"><span class="mdi mdi-pencil"></span> Edit</a>
                                    <a class="tabledit-edit-button btn btn-danger btn-sm"><span class="mdi mdi-trash-can"></span> Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>General User</td>
                                <td>
                                    <a class="tabledit-edit-button btn btn-success btn-sm"><span class="mdi mdi-pencil"></span> Edit</a>
                                    <a class="tabledit-edit-button btn btn-danger btn-sm"><span class="mdi mdi-trash-can"></span> Delete</a>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="6">
                                    <div class="text-end">
                                        <ul class="pagination pagination-split justify-content-end footable-pagination"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
