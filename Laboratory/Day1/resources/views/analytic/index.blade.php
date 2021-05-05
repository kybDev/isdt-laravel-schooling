@extends('template')
@section('layout')

    <div>

        <style>
            tbody tr:nth-child(odd){
                background: #6a7171 !important;
                color: #fff;
            }

            .btn{
                border-radius: 0px;
            }
        </style>

        <div class="col-sm-12" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <h1>Analytics</h1>
            <a href="{{ URL::route('analytic_create') }}" class="btn btn-sm btn-primary">ADD NEW</a>
        </div>

        @if(session('success')) 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div style="margin-bottom: 50px;    font-family: sans-serif;">
            <form>
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-sm-4">
                        <div class="form-group" style="flex: 1;">
                            <label for="age">Search By Age</label>
                           <div style="display:flex;">
                                <select class="form-control" name="operator" style="width: 50px;">
                                    <option >=</option>
                                    <option >!=</option>
                                    <option >></option>
                                    <option ><</option>
                                </select>
                                <input style="flex: 1;" type="number" class="form-control" id="age" placeholder="Search By Age" name="age" >
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group" style="flex: 1;">
                            <label for="age">Search By Gender</label>
                            <input type="text" class="form-control" id="age" placeholder="Search By Gender" name="gender">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group" style="flex: 1;">
                            <label for="age">Search By City</label>
                            <input type="text" class="form-control" id="age" placeholder="Search By City" name="city">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group" style="flex: 1;">
                            <label for="age">Search between Data</label>
                            <input type="date" class="form-control" id="date1" placeholder="Search By Gender" name="date1">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group" style="flex: 1;">
                            <input type="date" class="form-control" id="date2" placeholder="Search By City" name="date2">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Start Search</button>
                      <a href="{{ URL::route('analytic_index') }}" class="btn btn-secondary">Clear</a>
                </div>
            </form>
        </div>
        <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td style="width: 120px">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ URL::route('analytic_edit', ['id' => $item->id ]) }}" class="btn btn-sm btn-primary">EDIT</a>
                                <a href="{{ URL::route('analytic_destroy', ['id' => $item->id ]) }}" class="btn btn-sm btn-danger">DELETE</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="padding: 10px 0;">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if ($data->currentPage() != $data->lastPage())
                        <li class="page-item"><a class="page-link" href="?page={{ $data->currentPage() - 1}}">Previous</a></li>
                    @endif

                    @for ($i = 1; $i < $data->perPage() ; $i++)
                        <li class="page-item @if(isset($_GET['page']) && $_GET['page'] == $i) active  @endif"> 
                            <a  class="page-link" href="?page={{ $i }}">{{ $i }}</a> 
                        </li>
                    @endfor

                    @if ($data->currentPage() != $data->lastPage())
                        <li class="page-item"><a class="page-link" href="?page={{ $data->currentPage() + 1}}">Next</a></li>
                    @endif
                 
                </ul>
              </nav>
        </div>

    </div>
@endsection

@section('JScripts')
<script>
    $(document).ready( function () {
        // $('#myTable').DataTable();
    } );
</script>
@endsection