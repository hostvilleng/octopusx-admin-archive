@extends('layouts.app')
@section('title', 'Dashboard')
@section('body_content_main')
    <div class="page-main">
        @section('navbar')
            @include('layouts.blocks.nav')
            <div class="page-header">
                <div class="container">
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
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <h2 class="page-title">
                                Data  Models
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ml-auto d-print-none">
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#create_domain">
                                    <i class="fe fe-plus-circle"></i>
                                    New Custom  Model
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($models as $model)
                      <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                          <div class="card card-sm">
                              <div class="card-body d-flex align-items-center">
                                <span class=" text-white stamp mr-3 " style="background: none">
                                  <span class="mt-4">
                                   <img src="{{cdn('assets/images/icons/server.svg')}}">
                                  </span>
                                </span>
                                  <div class="mr-3 lh-sm">
                                      <div class="strong">
                                          {{$model->model_name}}
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    @endforeach
                </div>
            </div>
    </div>

    <div class="modal fade" id="create_domain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Model</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- SVG icon code -->
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('data')}}">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="profile_name">Model Name</label>
                                <input  id="model_name" type="text" class="form-control" name="model_name"  placeholder="example (EmployeesModel) "/>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
                                Cancel
                            </a>
                            <button type="submit"  href="#" class="btn btn-primary ml-auto" >
                                <!-- SVG icon code -->
                                Create new Model
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection


