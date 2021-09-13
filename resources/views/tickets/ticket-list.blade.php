@extends('layouts.app', ["page_title"=> "FooTable"])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Foo</li>
                        </ol>
                    </div>
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
                                <h4 class="page-title">Manage <small>Tickets</small></h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('second', ['tickets', 'ticket-create'])}}" class="btn btn-primary"><i class="mdi mdi-plus-circle"></i> Add Tickets</a>
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
                        <table id="demo-foo-row-toggler" class="table table-striped toggle-circle mb-0">
                            <thead>
                            <tr>
                                <th data-toggle="true"> Invoice Id </th>
                                <th> Client </th>
                                <th> Detail </th>
                                <th data-hide="phone"> Price</th>
                                <th data-hide="phone"> Status </th>
                                <th data-hide="all"> Date </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-success">Open</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-secondary">Closed</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-secondary">Closed</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-secondary">Closed</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-success">Open</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-secondary">Closed</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-secondary">Closed</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-success">Open</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            <tr>
                                <td>#005321</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>Job 2</td>
                                <td><span class="badge label-table bg-success">Open</span></td>
                                <td>22 Jun 1972</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    <!-- third party js -->
    <script src="{{asset('assets/libs/footable/footable.min.js')}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset('assets/js/pages/foo-tables.init.js')}}"></script>
    <!-- end demo js-->
@endsection
