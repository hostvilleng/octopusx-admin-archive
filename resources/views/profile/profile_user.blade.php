@extends('layouts.app')
@section('title', 'Dashboard')
@section('body_content_main')
    <div class="page-main">
        @section('navbar')
            @include('layouts.blocks.nav')
        <div class="container">
            <div class="col-auto px-5 py-5">
                <h2 class="page-title">
                    {{$profile->profile_name}}
                </h2>
            </div>
        </div>
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
            @if ($profileUsers->isEmpty())
                <div class="row px-9 py-9 mt-5">
                    <div class="col col-login mx-auto">
                        <div class="container">
                            <div class="content">
                                <main class="container text-center">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <img src="{{cdn('assets/images/static/illustrations/undraw_printing_invoices_5r4r.svg')}}" class="h-9 mb-4" alt="">
                                        </div>
                                        <p class="empty-title h3">No User found</p>
                                        <div class="empty-action">
                                            <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#create_user">
                                                <i class="fe fe-plus-circle"></i>
                                                Add User
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
                                    Profile  Users
                                </h2>
                            </div>
                            <div class="content">

                            </div>
                            <!-- Page title actions -->
                            <div class="col-auto ml-auto d-print-none">
                                <div class="d-flex">
                                    <a  class="btn btn-primary text-white"  data-toggle="modal" data-target="#create_user">
                                        <i class="fe fe-plus-circle"></i>
                                        New User
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach($profileUsers as $user)
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row row-sm align-items-center">
                                            <div class="col-auto">
                                                <span class="avatar avatar-md" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                            </div>
                                            <div class="col">
                                                <h3 class="mb-0"><a href="#">{{$user->name}}</a></h3>
                                                <div class="text-muted text-h5">{{$user->email}}</div>
                                            </div>

                                        </div>
                                        <div class="row align-items-center mt-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            @endif

    </div>
    <div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- SVG icon code -->
                    </button>
                </div>
                <form method="post" action="{{route('profile-create')}}">
                    @csrf
                    <input type="hidden" class="form-control" value="{{$profile->id}}" name="_id">

                    <div class="card-body p-6">
                        <div class="card-title">Create new account</div>
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email">

                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control " placeholder="Password" name="password">

                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Create new user</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
                            Cancel
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection


