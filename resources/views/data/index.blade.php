@extends('layouts.app')
@section('title', 'Dashboard')
@section('body_content_main')
    <div class="page-main">
        @section('navbar')
            @include('layouts.blocks.nav')
            <div class="page-header">
                <div class="container">
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
                                      <div class="text-muted">32 shipped</div>
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

                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
                        Cancel
                    </a>
                    <a href="#" class="btn btn-primary ml-auto" data-dismiss="modal">
                        <!-- SVG icon code -->
                        Create new Model
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


