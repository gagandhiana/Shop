<!DOCTYPE html>
<html>

<head>
    <title>Add Product - Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css\addproduct.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="main-div">
        @include('common_files.header')
    </div>
    <div class="shadow p-3 mb-5 bg-body rounded div">
        <form action="{{ url('add-product') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label class="form-lable">Select category</label>
                <input type="text" class="form-control" name="cat" required>
            </div>
            <div class="mb-3">
                <label class="form-lable">Product Name</label>
                <input type="text" name="pname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-lable">Model</label>
                <input type="text" name="model" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-lable">manufacturer</label>
                <input type="text" name="man" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-lable">Price</label>
                <input type="text" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-lable">Uplolad Image</label>
                <input type="file" name="pimage" class="form-control" required>
            </div>
            <input type="submit" name="save" class="btn btn-primary bt" value="submit">
        </form>
</body>

</html>
