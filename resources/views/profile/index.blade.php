@extends('layouts.app')
@section('title', 'Dashboard')
@section('body_content_main')
    <div class="page-main">
        @section('navbar')
            @include('layouts.blocks.nav')
        @if(session()->has('error'))
                <div class="container px-5 py-5">
                    <div class="alert alert-danger" role="alert">
                        <i class="fe fe-alert-triangle"></i>
                        {{session()->get('error')}}
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    </div>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="container px-5 py-5">
                    <div class="alert alert-success" role="alert">
                        <i class="fe fe-alert-triangle"></i>
                        {{session()->get('success')}}
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    </div>
                </div>
            @endif
        @if ($profiles->isEmpty())
                <div class="row px-9 py-9 mt-5">
                    <div class="col col-login mx-auto">
                        <div class="container">
                            <div class="content">
                                <main class="container text-center">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <img src="{{cdn('assets/images/static/illustrations/undraw_printing_invoices_5r4r.svg')}}" class="h-9 mb-4" alt="">
                                        </div>
                                        <p class="empty-title h3">No Profile found</p>
                                        <div class="empty-action">
                                            <a href="./." class="btn btn-primary"  data-toggle="modal" data-target="#create_domain">
                                                <i class="fe fe-plus-circle"></i>
                                               Add Profile
                                            </a>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="page-header">

                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h2 class="page-title">
                                    Profile  Services
                                </h2>
                            </div>
                            <div class="content">

                            </div>
                            <!-- Page title actions -->
                            <div class="col-auto ml-auto d-print-none">
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary text-white"  data-toggle="modal" data-target="#create_domain">
                                        <i class="fe fe-plus-circle"></i>
                                        New Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                       @foreach($profiles as $profile)
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row row-sm align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col">
                                                <h3 class="mb-0"><a href="#">{{$profile->profile_name}}</a></h3>
                                                <div class="text-muted text-h5">Profile</div>
                                            </div>
                                            <div class="col-auto lh-1 align-self-start">
                                            </div>
                                        </div>
                                        <div class="row align-items-center mt-4">
                                            <div class="col-auto">
                                                <div class="btn-list">
                                                    <form method="get" action="{{route('profile-users')}}">
                                                        <input type="hidden" name="_id" value="{{$profile->id}}">
                                                        <button type="submit" class="btn btn-secondary btn-sm" >
                                                            Create users
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                    </div>
                </div>
        @endif

    </div>
    <div class="modal fade" id="create_domain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- SVG icon code -->
                    </button>
                </div>
                <form method="post" action="{{route('profile')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="profile_name">Profile Name</label>
                            <input  id="profile_name" type="text" class="form-control" name="profile_name"  placeholder="example (Citizen  Profile ) "/>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ml-auto" data-toggle="modal" >
                            <!-- SVG icon code -->
                            Create new profile
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection


