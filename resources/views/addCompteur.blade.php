@extends('layouts.master')
@section('title', 'dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            @include('layouts.sidebar')
            {{-----------------------------------------}}

            <div class="col py-3 overflow-x-hidden overflow-y-scroll" style="height: 100vh">
                <div class="container shadow rounded bg-white border">
                    <h5 class="fw-bold mt-3 ms-3">Ajouter Compteur</h5>
                    <div class="row">
                        <div class="">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Compteur Info</h4>
                                </div>
                                {{-- <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label>First  Name</label>
                                            <input type="text" name="firstName" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Second Name</label>
                                            <input type="text" name="secondName" class="form-control">
                                            @error('secondName')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label>Phone Number</label>
                                            <input type="number" name="phoneNumber" class="form-control">
                                            @error('phoneNumber')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control">
                                            @error('email')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"> 
                                            <label>Gender</label>
                                            <select class="form-select" name="gender">
                                                <option value="" disabled selected>Select</option>
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                            </select>
                                            @error('gender')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Inter the apartment Address">
                                            @error('address')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary" type="submit" type="button">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-----------------------------------------}}
        </div>
    </div>
@endsection