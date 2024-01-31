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
{{-- <pre class="language-markup" style="height: 275px">
<code>&lt;form action=&quot;#&quot;&gt;
&lt;div class=&quot;row g-3&quot;&gt;
&lt;div class=&quot;col-lg-6&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;firstnamefloatingInput&quot; placeholder=&quot;Enter your firstname&quot;&gt;
&lt;label for=&quot;firstnamefloatingInput&quot;&gt;First Name&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-6&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;lastnamefloatingInput&quot; placeholder=&quot;Enter your Lastname&quot;&gt;
&lt;label for=&quot;lastnamefloatingInput&quot;&gt;Last Name&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;emailfloatingInput&quot; placeholder=&quot;Enter your email&quot;&gt;
&lt;label for=&quot;emailfloatingInput&quot;&gt;Email Address&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;passwordfloatingInput&quot; placeholder=&quot;Enter your password&quot;&gt;
&lt;label for=&quot;passwordfloatingInput&quot;&gt;Password&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;passwordfloatingInput1&quot; placeholder=&quot;Confirm password&quot;&gt;
&lt;label for=&quot;passwordfloatingInput1&quot;&gt;Confirm Password&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;cityfloatingInput&quot; placeholder=&quot;Enter your city&quot;&gt;
&lt;label for=&quot;cityfloatingInput&quot;&gt;City&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;select class=&quot;form-select&quot; id=&quot;floatingSelect&quot; aria-label=&quot;Floating label select example&quot;&gt;
&lt;option selected&gt;USA&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;Brazil&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;France&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Germany&lt;/option&gt;
&lt;/select&gt;
&lt;label for=&quot;floatingSelect&quot;&gt;Country&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-4&quot;&gt;
&lt;div class=&quot;form-floating&quot;&gt;
&lt;input type=&quot;number&quot; class=&quot;form-control&quot; id=&quot;zipfloatingInput&quot; placeholder=&quot;Enter your zipcode&quot;&gt;
&lt;label for=&quot;zipfloatingInput&quot;&gt;Zipcode&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-lg-12&quot;&gt;
&lt;div class=&quot;text-end&quot;&gt;
&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;</code></pre> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
