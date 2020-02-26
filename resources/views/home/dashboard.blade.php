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
                            <div class="h1 m-0">43</div>
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
                            <div class="h1 m-0">43</div>
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
                            <div class="h1 m-0">43</div>
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
                            <div class="h1 m-0">43</div>
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
                              <h3 class="card-title">Development Activity</h3>
                          </div>
                          <div class="table-responsive">
                              <table class="table card-table table-striped table-vcenter">
                                  <thead>
                                  <tr>
                                      <th colspan="2">User</th>
                                      <th>Commit</th>
                                      <th>Date</th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td class="w-1"><span class="avatar" style="background-image: url(./demo/faces/male/9.jpg)"></span></td>
                                      <td>Ronald Bradley</td>
                                      <td>Initial commit</td>
                                      <td class="text-nowrap">May 6, 2018</td>
                                      <td class="w-1"><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar">BM</span></td>
                                      <td>Russell Gibson</td>
                                      <td>Main structure</td>
                                      <td class="text-nowrap">April 22, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar" style="background-image: url(./demo/faces/female/1.jpg)"></span></td>
                                      <td>Beverly Armstrong</td>
                                      <td>Left sidebar adjustments</td>
                                      <td class="text-nowrap">April 15, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar" style="background-image: url(./demo/faces/male/4.jpg)"></span></td>
                                      <td>Bobby Knight</td>
                                      <td>Topbar dropdown style</td>
                                      <td class="text-nowrap">April 8, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar" style="background-image: url(./demo/faces/female/11.jpg)"></span></td>
                                      <td>Sharon Wells</td>
                                      <td>Fixes #625</td>
                                      <td class="text-nowrap">April 9, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Development Activity</h3>
                          </div>
                          <div class="table-responsive">
                              <table class="table card-table table-striped table-vcenter">
                                  <thead>
                                  <tr>
                                      <th colspan="2">User</th>
                                      <th>Commit</th>
                                      <th>Date</th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td class="w-1"><span class="avatar" style="background-image: url(./demo/faces/male/9.jpg)"></span></td>
                                      <td>Ronald Bradley</td>
                                      <td>Initial commit</td>
                                      <td class="text-nowrap">May 6, 2018</td>
                                      <td class="w-1"><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar">BM</span></td>
                                      <td>Russell Gibson</td>
                                      <td>Main structure</td>
                                      <td class="text-nowrap">April 22, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar" style="background-image: url(./demo/faces/female/1.jpg)"></span></td>
                                      <td>Beverly Armstrong</td>
                                      <td>Left sidebar adjustments</td>
                                      <td class="text-nowrap">April 15, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar" style="background-image: url(./demo/faces/male/4.jpg)"></span></td>
                                      <td>Bobby Knight</td>
                                      <td>Topbar dropdown style</td>
                                      <td class="text-nowrap">April 8, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
                                  <tr>
                                      <td><span class="avatar" style="background-image: url(./demo/faces/female/11.jpg)"></span></td>
                                      <td>Sharon Wells</td>
                                      <td>Fixes #625</td>
                                      <td class="text-nowrap">April 9, 2018</td>
                                      <td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
                                  </tr>
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


