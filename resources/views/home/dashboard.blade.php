@extends('layouts.app')
@section('title', 'Dashboard')
@section('body_content_main')
    <div class="page-main">
        @section('navbar')
            @include('layouts.blocks.nav')
        <div class="my-3 mx-5 my-md-5">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">
                    Dashboard
                </h1>
            </div>
            <div class="row row-cards">
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-secondary">
                                <i class="fe fe-package"></i>
                            </div>
                            <div class="h1 m-0">{{$domains}}</div>
                            <div class="text-muted mb-4">Domains</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-green">
                                <i class="fe fe-user-check"></i>
                            </div>
                            <div class="h1 m-0">{{$profiles}}</div>
                            <div class="text-muted mb-4">Profile Services</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-primary">
                                <i class="fe fe-lock"></i>
                            </div>
                            <div class="h1 m-0">{{$access}}</div>
                            <div class="text-muted mb-4">Access Services</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-warning">
                                <i class="fe fe-database"></i>
                            </div>
                            <div class="h1 m-0">{{$data}}</div>
                            <div class="text-muted mb-4">Data Services</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
              <div class="row">
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Created  Users</h3>
                          </div>
                          <div class="table-responsive">
                              <table class="table card-table table-striped table-vcenter">
                                  <thead>
                                  <tr>
                                      <th >User</th>
                                      <th>Date</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($users as $user)
                                  <tr>
                                      <td>{{$user->name}}</td>
                                      <td class="text-nowrap">{{$user->created_at}}</td>
                                  </tr>
                                  @endforeach

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Active Accesses</h3>
                          </div>
                          <div class="table-responsive">
                              <table class="table card-table table-striped table-vcenter">
                                  <thead>
                                  <tr>
                                      <th > Access Admin</th>
                                      <th>Access Service</th>
                                      <th>Date</th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($active_access as $active)
                                      <tr>
                                          <td>{{auth()->user()->name}}</td>
                                          <td>{{$active->access_name}}</td>
                                          <td>{{$active->created_at}}</td>
                                          <td><span class="badge badge-success">Active</span></td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

        </div>
        </div>
    </div>
@endsection


