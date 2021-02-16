@extends('layout.main')
@section('menu', 'department') 
@section('content')
    <div class="container-fluid">
        Department Page
    </div>
@endsection

@section('extraJs')
    <script>
        $(document).ready(function(){
            alert('Department');
        });
    </script>
@endsection