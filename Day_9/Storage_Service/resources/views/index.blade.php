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
            @foreach ($product as $item)
            <div class="col-4">
                <div class="card" >
                    <img src="{{  $item->photo }}" />
                    <div class="card-body">
                        <h5 class="card-title">{{  $item->name }}</h5>
                        <p class="card-text text-warning font-weight-bold">{{  $item->price }}</p>
                    </div>
                </div>        
            </div>
            @endforeach

           
        </div>
       
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>