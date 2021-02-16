@extends('layout.main')
@section('menu', 'employee') 
@section('content')
    <div class="container-fluid">
        Employee Page
    </div>
@endsection

@section('extraJs')
    <script>
        $(document).ready(function(){
            alert('Employee');
        });
    </script>
@endsection