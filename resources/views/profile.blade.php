@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header mt-5">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#"> <img class="rounded-circle" alt="User Image"
                                        src="assets/img/profiles/avatar-02.jpg"> </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-3">{{ Auth::user()->name }}</h4>
                                <h6 class="text-muted mt-1">Manager</h6>
                                <div class="user-Location mt-1"><i class="fas fa-map-marker-alt"></i> Florida, United States
                                </div>
                                <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                            <div class="col-auto profile-btn"> <a href="" class="btn btn-primary">
                                    Message
                                </a> <a href="edit-profile.html" class="btn btn-primary">
                                    Edit
                                </a> </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                    href="#per_details_tab">About</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab"
                                    href="#password_tab">Password</a> </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
