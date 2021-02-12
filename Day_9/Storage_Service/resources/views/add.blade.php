<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    
    <div class="container" >
        <nav class="navbar navbar-light bg-light mt-5">
            <div class="container-fluid">
                <h1>Add Products</h1>
                <div class="d-flex">
                    <a href="{{ URL::route('index') }}" class="btn btn-success">
                       Back
                    </a>
                </div>
            </div>
        </nav>

        <form method="post" action="{{ URL::route('add_save') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nameId" class="form-label">Upload File</label>
                <input type="file" name="photo" class="form-control" id="nameId" aria-describedby="uploadHelp" accept="image/x-png,image/gif,image/jpeg" >
                <div id="uploadHelp" class="form-text">We'll never share your photo with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="nameId" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="nameId" aria-describedby="">
            </div>

            <div class="mb-3">
                <label for="priceId" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="priceId" aria-describedby="">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>