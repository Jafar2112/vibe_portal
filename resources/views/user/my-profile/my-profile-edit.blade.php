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
            <form class="form" method="post" action="{{route('user.profile.edit')}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
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
                                                        <img id="profile-preview" style="width: 140px; height: 140px"
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


                                                        <!--our custom file upload button-->
                                                        <label id="choose-photo" for="actual-btn">Choose profile
                                                            photo</label>
                                                        <input name="profile_photo" type="file" id="actual-btn" hidden/>


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

                                        @include('user.my-profile.profile-edit-nav',['settings'=>true])
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active">

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">

                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Username</label>
                                                                        <input  class="form-control" type="text" name="name"
                                                                               value="{{$user->name}}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input name="email" class="form-control" type="email"
                                                                               value="{{$user->email}}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <div class="form-group">
                                                                        <label>About</label>
                                                                        <textarea name="about" class="form-control"
                                                                                  rows="5"> {{$user->about?:old('about  ')}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">


                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <button class="btn btn-primary" type="submit">Save Changes
                                                            </button>
                                                        </div>
                                                    </div>

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
            </form>
        </div>
    </div>
    <script>
        // JavaScript ile fotoğraf seçildiğinde önizleme gösterme işlemi
        const actualBtn = document.getElementById('actual-btn');
        const profilePreview = document.getElementById('profile-preview');

        actualBtn.addEventListener('change', function () {
            const selectedFile = actualBtn.files[0];

            if (selectedFile) {
                const objectURL = URL.createObjectURL(selectedFile);
                profilePreview.src = objectURL;
            }
        });
    </script>
@endsection







