@extends('template')
@section('layout')
    
    @include('component.sidebar')
            
    <main class="o-page__content" style="padding-bottom: 5%;"> 
        @include('component.navbar')

        @yield('content')
    </main>
@endsection