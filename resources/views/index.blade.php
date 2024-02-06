@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('css')
<link href="assets/libs/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/swiper/swiper.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboards @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row mb-0 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">

                        <div class="card">
                         
                            <div class="row align-items-end">
                                {{-- <h4 class="fs-16 m-5">Good Morning, {{Auth::user()->name}}!</h4> --}}
                                <div class="col-sm-8">

                                    <div class="p-3"> 
                                        <p class="fs-20 lh-base"><span class="fw-semibold">As-Salaam-Alaikum</span>,  {{Auth::user()->name}}!</p>

                                        <p class="fs-20 lh-base"><span class="fw-semibold">Welcome</span>, to ‘Syed Group of Industries’ </p>
                                        <div class="mt-3">
                                            <a href="pages-pricing.html" class="btn btn-secondary">Visit Now!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="px-3">
                                        <img src="assets/images/user-illustarator-2.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
            
                

                {{-- STATA --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body position-relative">
                            <h4><span class="badge badge-label bg-info">STATA</span></h4>
                            <div class="vstack gap-2">
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid1">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-success-subtle text-success fs-18 rounded">
                                                        <i class="ri-visa-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Sale</h6>
                                                <b class="pay-amount">TK {{$stata->total_sale}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid2" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-info-subtle text-info fs-18 rounded">
                                                        <i class="ri-bank-card-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Expenditure</h6>
                                                <b class="pay-amount">TK {{$stata->total_expenditure}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Customer Due</h6>
                                                <b class="pay-amount">TK {{$stata->total_customer_due}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Current Balance</h6>
                                                <b class="pay-amount">TK {{$stata->current_balance}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="card ribbon-box right border shadow-none mb-lg-0 mt-2">
                                <div class="card-body text-muted">
                                    <div class="ribbon-two ribbon-two-info"><span>Updated</span></div>
                                    <h6 class="mb-0">{{ $stata->created_at->format('jS M Y') }}</h6>
                                    <br>
                                </div>
                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
       



                {{-- STATA IT --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body position-relative">
                            <h4><span class="badge badge-label bg-success">STATA IT</span></h4>
                            <div class="vstack gap-2">
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid1">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-success-subtle text-success fs-18 rounded">
                                                        <i class="ri-visa-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Sale</h6>
                                                <b class="pay-amount">TK {{$statait->total_sale}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid2" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-info-subtle text-info fs-18 rounded">
                                                        <i class="ri-bank-card-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Expenditure</h6>
                                                <b class="pay-amount">TK {{$statait->total_expenditure}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Customer Due</h6>
                                                <b class="pay-amount">TK {{$statait->total_customer_due}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Current Balance</h6>
                                                <b class="pay-amount">TK {{$statait->current_balance}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="card ribbon-box right border shadow-none mb-lg-0 mt-2">
                                <div class="card-body text-muted">
                                    <div class="ribbon-two ribbon-two-success"><span>Updated</span></div>
                                    <h6 class="mb-0">{{ $statait->created_at->format('jS M Y') }}</h6>
                                    <br>
                                </div>
                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
       



                {{-- STF --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body position-relative">
                            <h4><span class="badge badge-label bg-warning">Syed Timber & Furniture</span></h4>
                            <div class="vstack gap-2">
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid1">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-success-subtle text-success fs-18 rounded">
                                                        <i class="ri-visa-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Sale</h6>
                                                <b class="pay-amount">TK {{$stf->total_sale}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid2" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-info-subtle text-info fs-18 rounded">
                                                        <i class="ri-bank-card-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Expenditure</h6>
                                                <b class="pay-amount">TK {{$stf->total_expenditure}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Customer Due</h6>
                                                <b class="pay-amount">TK {{$stf->total_customer_due}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Current Balance</h6>
                                                <b class="pay-amount">TK {{$stf->current_balance}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="card ribbon-box right border shadow-none mb-lg-0 mt-2">
                                <div class="card-body text-muted">
                                    <div class="ribbon-two ribbon-two-warning"><span>Updated</span></div>
                                    <h6 class="mb-0">{{ $stf->created_at->format('jS M Y') }}</h6>
                                    <br>
                                </div>
                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
       



                {{-- AARSL --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body position-relative">
                            <h4><span class="badge badge-label bg-danger">AARSL</span></h4>
                            <div class="vstack gap-2">
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid1">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-success-subtle text-success fs-18 rounded">
                                                        <i class="ri-visa-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Sale</h6>
                                                <b class="pay-amount">TK {{$aarsl->total_sale}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid2" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-info-subtle text-info fs-18 rounded">
                                                        <i class="ri-bank-card-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Expenditure</h6>
                                                <b class="pay-amount">TK {{$aarsl->total_expenditure}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Total Customer Due</h6>
                                                <b class="pay-amount">TK {{$aarsl->total_customer_due}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check card-radio">
                                    <input id="listGroupRadioGrid3" name="listGroupRadioGrid" type="radio" class="form-check-input">
                                    <label class="form-check-label" for="listGroupRadioGrid3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-danger-subtle text-danger fs-18 rounded">
                                                        <i class="ri-mastercard-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Current Balance</h6>
                                                <b class="pay-amount">TK {{$aarsl->current_balance}}</b>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="card ribbon-box right border shadow-none mb-lg-0 mt-2">
                                <div class="card-body text-muted">
                                    <div class="ribbon-two ribbon-two-danger"><span>Updated</span></div>
                                    <h6 class="mb-0">{{ $aarsl->created_at->format('jS M Y') }}</h6>
                                    <br>
                                </div>
                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
       

       
            </div> <!-- end row-->


        </div> <!-- end .h-100-->

    </div> <!-- end col -->

</div>
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/swiper/swiper.min.js')}}"></script>
<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
