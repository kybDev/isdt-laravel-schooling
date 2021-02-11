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
                <h1>Products</h1>
                <div class="d-flex">
                    <a href="{{ URL::route('add') }}" class="btn btn-success">
                       Add Product
                    </a>
                    
                </div>
            </div>
        </nav>

        <div class="row mt-5">
            @for($i=0; $i < 3; $i++)
                <div class="col-4">
                    <div class="card" >
                        <img src="data:image/jpeg;base64,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" />
                        <div class="card-body">
                            <h5 class="card-title">Sapatos ni Pedro</h5>
                            <p class="card-text text-warning font-weight-bold">P 3, 155.99</p>
                        </div>
                    </div>        
                </div>
            @endfor
        </div>
       
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>