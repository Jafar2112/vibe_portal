@extends('layouts.main-layout')

@section('content')
    <style>
        #choose-photo {
            background-color: indigo;
            color: white;
            padding: 0.5rem;
            font-family: sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
            margin-top: 1rem;

        }
    </style>
    <div class="container">
        <div class="row flex-lg-nowrap">
            <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                <div class="card p-3">
                    <div class="e-navlist e-navlist--active-bg">
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link px-2 active" href="#"><i
                                        class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2"
                                                    href="https://www.bootdey.com/snippets/view/bs4-crud-users"
                                                    target="__blank"><i
                                        class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2"
                                                    href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page"
                                                    target="__blank"><i
                                        class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="e-profile">
                                    <div class="row">
                                        <div class="col-12 col-sm-auto mb-3">
                                            <div class="mx-auto" style="width: 140px;">
                                                <div class="d-flex justify-content-center align-items-center rounded"
                                                     style="height: 140px; background-color: rgb(233, 236, 239);">
                                                    <img style="width: 140px; height: 140px"
                                                         src="/images/profile_photos/{{$user->profile_photo}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$user->name}}</h4>
                                                <p class="mb-0">{{$user->email}}</p>
                                                <div class="mt-2">
                                                    <!--default html file upload button-->





                                                </div>
                                            </div>
                                            <div class="text-center text-sm-right">
                                                <div class="text-muted">
                                                    <small>Joined {{$user->created_at->format('d-m-Y')}}</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    @include('includes.error-validations')
                                    @include('includes.changes-saved')
                                    @include('user.my-profile.profile-edit-nav',['other_information'=>true])
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <form class="form" method="post" action="{{route('user.change.password')}}">
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-3">
                                                        <div class="mb-2"><b>Other Information</b></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <input name="address" class="form-control" type="text"
                                                                           placeholder="USA, New York">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>New Password</label>
                                                                    <input name="password" class="form-control" type="password"
                                                                           placeholder="••••••">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                    <input name="password_confirmation" class="form-control" type="password"
                                                                           placeholder="••••••"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-end">
                                                        <button class="btn btn-primary" type="submit">Save Changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mb-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="px-xl-3">
                                    <button class="btn btn-block btn-secondary">
                                        <i class="fa fa-sign-out"></i>
                                        <span>Logout</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold">Support</h6>
                                <p class="card-text">Get fast, free help from our friendly assistants.</p>
                                <button type="button" class="btn btn-primary">Contact Us</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
