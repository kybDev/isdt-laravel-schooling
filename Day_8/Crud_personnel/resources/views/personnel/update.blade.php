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
        <h1>Update Personnel</h1>

        @if($errors->any())
            @foreach($errors->all() as $item)
                <div class="text-danger">  {{ $item }} </div>
            @endforeach
        @endif
        <form action="{{ URL::route('crud.update.save', ['id' => $personnel->id ])}}" method="post">
            @csrf

            <div>
                <label for="">Firstname</label>
                <input type="text" name="first_name" value="{{ $personnel->first_name }}">
            </div>
            <div>
                <label for="">Last Name</label>
                <input type="text" name="last_name" value="{{ $personnel->last_name }}">
            </div>
            <div>
                <label for="">Middle Name</label>
                <input type="text" name="middle_name" value="{{ $personnel->middle_name }}">
            </div>
            <div>
                <label for="">Age</label>
                <input type="number" name="age" value="{{ $personnel->age }}">
            </div>
            <div>
                <label for="">Birthdate</label>
                <input type="date" name="birthdate" value="{{  $personnel->birthdate }}">
            </div>
            <div>
                <label for="">Rating</label>
                <select  name="rating" class="form-select" aria-label="Default select example" >
                    <option disabled>Open this select menu</option>
                    <option @if($personnel->rating=="1") selected @endif> 1 </option>
                    <option @if($personnel->rating=="2") selected @endif> 2 </option>
                    <option @if($personnel->rating=="3") selected @endif> 3 </option>
                    <option @if($personnel->rating=="4") selected @endif> 4 </option>
                    <option @if($personnel->rating=="5") selected @endif> 5 </option>
                </select>
            </div>

            <a href="{{ URL::route('personnel')}}" class="btn default">Go Back</a>
            <button type="submit" class="btn success">Update</button>
        </form>
    </div>

    
</body>
</html>