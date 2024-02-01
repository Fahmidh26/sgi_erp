@extends('layouts.master')
@section('title') SGI Data Entry @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Entry  @endslot
@endcomponent

<div class="row">
    <div class="col-lg-8">
        <div class="card">
           
            <div class="card-body">
               
                <div class="live-preview">
                    <form class="insert-form" id="insert_form" method="post" action="{{ route('dataentry.store')}}">
                        @csrf
                        <div class="row g-3">

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

                          
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="d-none code-view">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
