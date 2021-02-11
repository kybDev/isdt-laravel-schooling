<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
</head>
<body>
    <div class="container-list">
        <h1>Personnel Lists</h1>

        <div class="create-notification">
            <div style="flex: 1;">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success')}}
                    </div>
                @endif

            </div>

            
            <div>
                @if($trash)
                    <a href="{{ URL::route('personnel')}}" class="btn default">Go Back</a>
                @else
                    <a href="{{ URL::route('crud.trash')}}" class="btn default">View Trash</a>
                    <a href="{{ URL::route('crud.create')}}" class="btn success">CREATE</a>
                @endif
            </div>
        </div>
        {{-- <button class="btn danger">CREATE</button>
        <button class="btn default">CREATE</button> --}}

        
        <div>
            <table cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Middle name</th>
                        <th>Age</th>
                        <th>Birthdate</th>
                        <th>Rating</th>
                        {{-- <th>Height</th>
                        <th>Weight</th> --}}
                        <th>BMI</th>
                        <th >Action</th>
                    </tr>
                </thead>
        
        
                <tbody>
                    @foreach(  $personnel as $x   )
                        <tr>
                            <td align="center">{{ $x->id}}</td>
                            <td>{{ $x->first_name }}</td>
                            <td>{{ $x->last_name }}</td>
                            <td>{{ $x->middle_name }}</td>
                            <td align="center">{{ $x->age }}</td>
                            <td align="center">{{ $x->birthdate }}</td>
                            <td width="10" align="center">{{ $x->rating }}</td>
                            {{-- <td width="10" align="center">{{ $x->height }}</td>
                            <td width="10" align="center">{{ $x->weight }}</td> --}}
                            <td width="10" align="center">{{ $x->bmi ?? 'Not set' }}</td>
                            <td width="185">
                                @if($trash)
                                    <a href="{{ URL::route('crud.force_delete', [ 'id' => $x->id ] )}}" class="btn danger">Force Delete</a>
                                    <a href="{{ URL::route('crud.restore', [ 'id' => $x->id ] )}}" class="btn default">Restore</a>
                                @else
                                    <a href="{{ URL::route('crud.bmi', [ 'id' => $x->id ] )}}" class="btn set-bmi">SET BMI</a>
                                    <a href="{{ URL::route('crud.update', [ 'id' => $x->id ] )}}" class="btn default">UPDATE</a>
                                    <a href="{{ URL::route('crud.delete', [ 'id' => $x->id ] )}}" class="btn danger">DELETE</a>
                                @endif
                                
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
        
        
            </table>
        </div>
    </div>


    
</body>
</html>