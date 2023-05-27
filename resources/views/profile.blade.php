@extends('layouts.master')
@section('title', 'dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            @include('layouts.sidebar')
            <div class="col py-3 overflow-x-hidden overflow-y-scroll" style="height: 100vh">
                    <div class="container shadow rounded bg-white border">
                        <h5 class="fw-bold mt-3 ms-3">Profile</h5>
                            <form action="updateProfile/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                            <div class="d-md-flex justify-content-evenly my-5">
                                <div class="col-md-5 shadow border rounded">
                                    <div class="p-3 pt-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profile Settings</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label>User name</label>
                                                <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                                <select class="form-select" name="gender">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="Male" {{ Auth::user()->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female" {{ Auth::user()->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label>Phone Number</label><input type="tel" name="phone" class="form-control" value="{{Auth::user()->phone}}" placeholder="Add your Phone Number"></div>
                                            <div class="col-md-12"><label>Email</label><input type="email" name="email" class="form-control" value="{{Auth::user()->email}}"></div>
                                            <div class="col-md-12"><label>Cover</label><input type="file" id="imgInput" name="image"  class="form-control"/></div>
                                            
                                        </div>
                                    </div>
                                    <div class="my-2 text-center">
                                        <button class="btn btn-outline-success" type="submit">Save Changes</button>
                                    </div>
                                </form>
                                </div>
                                <div class="col-md-5 mt-3 mt-md-0 shadow border rounded">
                                    <div class="p-3 pt-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Password Update</h4>
                                        </div>
                                        <form action="updatePassword/{{Auth::user()->id}}" method="POST">
                                            @method('put')
                                            @csrf
                                            <div class="col-md-12">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" name="old_password">
                                            </div> <br>
                                            <div class="col-md-12">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div> <br>
                                            <div class="col-md-12">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" name="confirm_pass">
                                            </div>
                                            <div class="my-5 mb-0 text-center">
                                                <button class="btn btn-outline-success" type="submit">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection