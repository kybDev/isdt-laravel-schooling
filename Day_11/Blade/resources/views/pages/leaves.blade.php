@extends('layout.main')
@section('menu', 'leaves') 
@section('content')
    <div class="container-fluid">
        Leaves Page
    </div>
@endsection

@section('extraJs')
    <script>
        $(document).ready(function(){
            alert('Leaves');
        });
    </script>
@endsection