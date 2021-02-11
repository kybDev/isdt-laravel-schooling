<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>

    <!-- CSS only -->
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" >
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet" >

    
    
</head>
<body>

    <div class="container" >

        <div class="row">
            <div class="col-9">
                <h1>Reminder</h1>
            </div>
            <div class="col-3">
                <a href="{{ URL::route('crud.form') }}" class="btn btn-success pull-left"> Create Reminder </a>
            </div>

            <div class="col-12">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success')}}
                    </div>
                @endif
            </div>
        </div>
        
        
        <div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($reminder as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->due_date }}</td>
                            <td>{{ $row->priority }}</td>
                            <td>{{ $row->status }}</td>
                            <td>
                                <a href="{{ URL::route('crud.update', ['id' => $row->id]) }}" class="btn btn-small btn-success ">Update</a>
                                <a href="{{ URL::route('crud.delete', ['id' => $row->id]) }}" class="btn btn-small btn-danger " onclick="return confirm('Are you sure?')">Delete</a>
                           
                            </td>
                        </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>
</html>