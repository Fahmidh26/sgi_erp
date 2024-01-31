@extends('layouts.master')
@section('title') SGI Data Entry @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data @endslot
@slot('title') Entry  @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
           
            <div class="card-body">
               
                <div class="live-preview">
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                                    <label for="firstnamefloatingInput">First Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="lastnamefloatingInput" placeholder="Enter your Lastname">
                                    <label for="lastnamefloatingInput">Last Name</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="emailfloatingInput" placeholder="Enter your email">
                                    <label for="emailfloatingInput">Email Address</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="passwordfloatingInput" placeholder="Enter your password">
                                    <label for="passwordfloatingInput">Password</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="passwordfloatingInput1" placeholder="Confirm password">
                                    <label for="passwordfloatingInput1">Confirm Password</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cityfloatingInput" placeholder="Enter your city">
                                    <label for="cityfloatingInput">City</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                      <option selected>Choose...</option>
                                      <option value="1">USA</option>
                                      <option value="2">Brazil</option>
                                      <option value="3">France</option>
                                      <option value="4">Germany</option>
                                    </select>
                                    <label for="floatingSelect">Country</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="zipfloatingInput" placeholder="Enter your zipcode">
                                    <label for="zipfloatingInput">Zipcode</label>
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
