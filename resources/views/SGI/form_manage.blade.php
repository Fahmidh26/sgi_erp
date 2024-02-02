@extends('layouts.master')
@section('title') SGI Data Manage @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title') Listjs @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                     
                                        <th class="sort" data-sort="customer_name">Company Name</th>
                                        <th class="sort" data-sort="email">Month (Year)</th>
                                        <th class="sort" data-sort="phone">Total Sales</th>
                                        <th class="sort" data-sort="date">Total Expense</th>
                                        <th class="sort" data-sort="status">Total Customer Due</th>
                                        <th class="sort" data-sort="action">Current Balance</th>
                                        <th class="sort" data-sort="action">Action</th>
                                        
                                        </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach($records as $item)
                                    <tr>
                                      
                                      
                                        <td class="customer_name">{{ $item->company_name }}</td>
                                        <td class="email">{{ $item->month }} ({{ $item->year }})</td>
                                        <td class="phone">{{ $item->total_sale }}</td>
                                        <td class="date">{{ $item->total_expenditure }}</td>
                                        <td class="status">{{ $item->total_customer_due }}</td>
                                        <td class="action">{{ $item->current_balance }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <a href="{{ route('dataentry.view',$item->id) }}" class="btn btn-sm btn-success edit-item-btn">View</a>
                                                </div>
                                                
                                                
                                                {{-- <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                        orders for you search.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form class="insert-form" id="insert_form" method="post" action="{{ route('dataentry.store')}}">
                        @csrf
                    <div class="modal-body row g-3">

                        <div class="col-lg-12">
                            <div class="form-floating">
                                <select class="form-select" id="company_name" name="company_name" required>
                                    <option selected>Choose...</option>
                                    <option value="STATA">STATA</option>
                                    <option value="STATA IT">STATA IT</option>
                                    <option value="STF">STF</option>
                                    <option value="AARSL">AARSL</option>
                                </select>
                                <label for="company_name">Company Select</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-floating">
                                <select class="form-select" id="month" name="month" required>
                                    <option selected>Choose...</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <label for="month">Month</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-floating">
                                <select class="form-select" name="year" required>
                                    <option selected>Choose...</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                                <label for="year">Year</label>
                            </div>
                        </div>
       

                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="details" name="details" placeholder="Enter Details">
                                <label for="details">Details</label>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="total_sale" name="total_sale" placeholder="Enter total Sale" required>
                                <label for="total_sale">Total Sale</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="total_expenditure" name="total_expenditure" placeholder="Enter Total Expenditure">
                                <label for="total_expenditure">Total Expenditure</label>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="total_customer_due" name="total_customer_due" placeholder="Enter Total Customer Due">
                                <label for="total_customer_due">Total Customer Due</label>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="current_balance" name="current_balance" placeholder="Enter Current Balance">
                                <label for="current_balance">Current Balance</label>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                            <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>

    <!-- listjs init -->
    <script src="{{ URL::asset('assets/js/pages/listjs.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
