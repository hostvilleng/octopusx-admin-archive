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
           @if ($domains->isEmpty())
                <div class="row px-9 py-9 mt-5">
                    <div class="col col-login mx-auto">
                        <div class="container">
                            <div class="content">
                                <main class="container text-center">
                                    <div class="empty">
                                        <div class="empty-icon">
                                            <img src="{{cdn('assets/images/static/illustrations/undraw_printing_invoices_5r4r.svg')}}" class="h-9 mb-4" alt="">
                                        </div>
                                        <p class="empty-title h3">No Domain found</p>
                                        <div class="empty-action">
                                            <a href="./." class="btn btn-primary"  data-toggle="modal" data-target="#create_domain">
                                                <i class="fe fe-plus-circle"></i>
                                                Add Domain
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
                                    Domains
                                </h2>
                            </div>
                            <!-- Page title actions -->
                            <div class="col-auto ml-auto d-print-none">
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#create_domain">
                                        <i class="fe fe-plus-circle"></i>
                                        New Domain
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            @foreach($domains as $domain)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row row-sm align-items-center">
                                                <div class="col-auto">
                                                </div>
                                                <div class="col">
                                                    <h3 class="mb-0"><a href="#">{{$domain->domain_name}}</a></h3>
                                                    <div class="text-muted text-h5">Domain</div>
                                                </div>
                                                <div class="col-auto lh-1 align-self-start">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
           @endif
    </div>

    <div class="modal fade" id="create_domain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Domain</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- SVG icon code -->
                    </button>
                </div>
                <form action="{{route('data')}}" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">domain url</label>
                                    <div class="input-group input-group-flat">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            https://octopusx.io/domains/
                                        </span>
                                        </div>
                                        <input type="text" class="form-control pl-0"  name="domain_name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ml-auto" data-dismiss="modal">
                            <!-- SVG icon code -->
                            Create new Domain
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


