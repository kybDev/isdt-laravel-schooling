<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <h1>UPDATE BMI</h1>

        @if($errors->any())
            @foreach($errors->all() as $item)
                <div class="text-danger"> {{ $item }} </div>
            @endforeach
        @endif

        <form action="{{ URL::route('crud.bmi.update', $statistics->id)}}" method="post">
            @csrf

            <div>
                <label for="">Height (cm)</label>
                <input type="text" name="height" value="{{ $statistics->height }}">
            </div>

            <div>
                <label for="">Weight (kg)</label>
                <input type="text" name="weight" value="{{ $statistics->weight }}">
            </div>
     
            <button type="submit" class="btn success">Submit</button>
        </form>
    </div>
    

    
</body>
</html>