@extends('layouts.main-layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('content')
    <div class="container col-md-6">
        <div class="mb-5">
            <form id="imageForm" method="POST" action="/form" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Title</span><br>
                    </div>
                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                </div>

                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                <label for="Image" class="form-label">Max image count is 15 (jpg,jpeg,png)*</label>
                <input class="form-control" type="file" id="formFile" name="images[]" onchange="preview()" multiple>
                <button type="button" onclick="clearImages()" class="btn btn-primary mt-3">Clear Images</button>
                <button type="submit" id="sendBtn" onclick="send()" class="btn btn-success mt-3">Upload to Backend
                </button>
                <div id="previewContainer">
                    <!-- Preview images will be displayed here -->
                </div>
            </form>
        </div>
    </div>
@endsection
<script>
    const selectedImages = [];

    function preview() {
        const files = event.target.files;
        const previewContainer = document.getElementById('previewContainer');

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.width = 100;
            img.classList.add('img-fluid', 'mb-2');

            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.classList.add('btn', 'btn-danger', 'mx-2');
            deleteButton.addEventListener('click', function () {
                deleteImage(img, file);
            });

            const container = document.createElement('div');
            container.appendChild(img);
            container.appendChild(deleteButton);

            previewContainer.appendChild(container);
            selectedImages.push(file);
        }

        event.target.value = null;
    }

    function deleteImage(imgElement, file) {
        const previewContainer = document.getElementById('previewContainer');
        previewContainer.removeChild(imgElement.parentElement);
        const index = selectedImages.indexOf(file);
        if (index > -1) {
            selectedImages.splice(index, 1);
        }
    }

    function clearImages() {
        const previewContainer = document.getElementById('previewContainer');
        previewContainer.innerHTML = '';
        document.getElementById('formFile').value = null;
        selectedImages.length = 0;
    }

    function send() {
        selectedImages.forEach(function (file, index) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'selected_images[' + index + ']';
            input.value = file.name; // You can adjust this value as needed, e.g., file URL, ID, etc.
            document.getElementById('imageForm').appendChild(input);
        });
    }

    document.getElementById('imageForm').addEventListener('submit', function () {
        // Add the selected images as hidden inputs before submitting the form
        selectedImages.forEach(function (file, index) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'selected_images[' + index + ']';
            input.value = file.name; // You can adjust this value as needed, e.g., file URL, ID, etc.
            document.getElementById('imageForm').appendChild(input);
        });
    });
</script>
