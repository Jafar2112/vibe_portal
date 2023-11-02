@extends('layouts.main-layout')
@section('content')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
          integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous"/>
    <style>
        body {
            margin-top: 20px;
            background-color: #f0f2f5;
        }

        .dropdown-list-image {
            position: relative;
            height: 2.5rem;
            width: 2.5rem;
        }

        .dropdown-list-image img {
            height: 2.5rem;
            width: 2.5rem;
        }

        .btn-light {
            color: #2cdd9b;
            background-color: #e5f7f0;
            border-color: #d8f7eb;
        }
    </style>
    <div class="container">
        <div class="row">

            <div class="col-lg-9 right">
                @foreach($notifications as $notification)
                    @if(!$notification->seen)
                        <div class="box shadow-sm rounded bg-white mb-3">
                            <div class="box-title border-bottom p-3">
                                <h6 class="m-0">Recent</h6>
                            </div>

                            <div class="box-body p-0">
                                <div class="p-3 d-flex align-items-center bg-light border-bottom osahan-post-header">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                             src="/images/profile_photos/{{$notification->from_user->profile_photo}}"
                                             alt=""/>
                                    </div>
                                    <div class="font-weight-bold mr-3">
                                        <div class="text-truncate">{{$notification->content. ' from '}}<a
                                                href="/profile/{{$notification->from_user_id}}">{{$notification->from_user->name}}</a>
                                        </div>
                                        <div class="small">{{Str::limit($notification->post->title,40)}}
                                        </div>
                                    </div>
                                    <span class="ml-auto mb-auto">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light btn-sm rounded"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"><i
                                                        class="mdi mdi-delete"></i> Delete</button>
                                                <button class="dropdown-item" type="button"><i
                                                        class="mdi mdi-close"></i> Turn Off</button>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="text-right text-muted pt-1">3d</div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="box shadow-sm rounded bg-white mb-3">
                            <div class="box-title border-bottom p-3">
                                <h6 class="m-0">Seen</h6>
                            </div>
                            <div class="box-body p-0">
                                <div class="p-3 d-flex align-items-center bg-light border-bottom osahan-post-header">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                             src="/images/profile_photos/{{$notification->from_user->profile_photo}}"
                                             alt=""/>
                                    </div>
                                    <div class="font-weight-bold mr-3">
                                        <div class="text-truncate">{{$notification->content. ' from '}}<a
                                                href="/profile/{{$notification->from_user_id}}">{{$notification->from_user->name}}</a>
                                        </div>
                                        <div class="small">{{Str::limit($notification->post->title,40)}}
                                        </div>
                                    </div>
                                    <span class="ml-auto mb-auto">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light btn-sm rounded"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"><i
                                                        class="mdi mdi-delete"></i> Delete</button>
                                                <button class="dropdown-item" type="button"><i
                                                        class="mdi mdi-close"></i> Turn Off</button>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="text-right text-muted pt-1">3d</div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
