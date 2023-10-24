@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Testimonial</h6>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle mx-auto mb-4"
                         src="/images/profile_photos/{{$user->profile_photo}}"
                         style="width: 100px; height: 100px;">
                    <h5 class="mb-1">{{$user->name}}</h5>
                    <p>{{$user->email}}</p>
                    <p class="mb-0">{{$user->about}}</p>
                    <a href="/admin/users/posts/{{$user->id}}">
                        <button type="button" class="btn btn-info m-2">See posts</button>
                    </a>
                    <form method="post" action="/users/{{$user->id}}">
                        @csrf
                        @method('delete')
                        <button id="delete-confirmation" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            window.open = function () {
                alert(1)
            };
            $("#delete-confirmation").on("click", function (e) {
                e.preventDefault();

                Swal.fire({
                    title: "Are you sure?",
                    text: "Once deleted, this complaint cannot be recovered!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).closest("form").submit();
                    }
                });
            });
        });
    </script>
@endsection
