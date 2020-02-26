
    <div class="header py-4">
        <div class="container">
            <div class="d-flex">
                <a class="header-brand" href=".">
                    <img src="{{cdn('favicon_io/android-chrome-512x512.png')}}" class="header-brand-img" alt="tabler logo">
                </a>
                <div class="d-flex order-lg-2 ml-auto">

                    <div class="dropdown d-none d-md-flex">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                            <span class="nav-unread"></span>
                        </a>
{{--                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">--}}
{{--                        </div>--}}
                    </div>
                    <div class="dropdown">
                        <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
{{--                            <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>--}}
                            <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">{{auth()->user()->name}}</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-user"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-settings"></i> Settings
                            </a>
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <span class="float-right"><span class="badge badge-primary">6</span></span>--}}
{{--                                <i class="dropdown-icon fe fe-mail"></i> Inbox--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="dropdown-icon fe fe-send"></i> Message--}}
{{--                            </a>--}}
                            <div class="dropdown-divider"></div>
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="dropdown-icon fe fe-help-circle"></i> Need help?--}}
{{--                            </a>--}}
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="dropdown-icon fe fe-log-out"></i> Sign out
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                    <span class="header-toggler-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 ml-auto">
{{--                    <form class="input-icon my-3 my-lg-0">--}}
{{--                        <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">--}}
{{--                        <div class="input-icon-addon">--}}
{{--                            <i class="fe fe-search"></i>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
                <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-lock"></i> Access</a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a  href="{{route('access')}}" class="dropdown-item ">Configure Access</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-package"></i> Domains</a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a href="{{route('domain')}}" class="dropdown-item ">Configure Domain</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-user-check"></i> Profile</a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a href="{{route('profile')}}"  class="dropdown-item ">Create Profile</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a  href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-database"></i> Data </a>
                            <div class="dropdown-menu dropdown-menu-arrow">
                                <a href="{{route('data')}}"  class="dropdown-item ">Configure Data Model</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a  href="javascript:void(0)"  class="nav-link"><i class="fe fe-file-text" ></i> Documentation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

