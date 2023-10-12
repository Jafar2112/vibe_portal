<!DOCTYPE html>
<html>
<head>
    <title>Fotoğraf Yükleme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container col-md-6">
    <div class="mb-5">
        @if ($errors->any())
            <div class="alert alert-danger w-50 mx-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="imageForm" method="POST" action="/create-post" enctype="multipart/form-data">
            @csrf
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Title</span><br>
                </div>
                <input name="title" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <label for="exampleFormControlTextarea1">Content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

            <label for="Image" class="form-label">Max image count is 15 (jpg,jpeg,png)*</label>
            <input class="form-control" type="file" id="formFile" name="images[]" onchange="preview()" multiple>
            <button type="button" onclick="clearImages()" class="btn btn-primary mt-3">Clear Images</button>
            <button type="submit" class="btn btn-success mt-3">Upload to Backend</button>
            <div id="previewContainer">
                <!-- Preview images will be displayed here -->
            </div>
        </form>
    </div>
</div>
<script>

</script>
</body>
</html>
