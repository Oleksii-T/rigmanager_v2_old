@extends('adminlte::page')

@section('css')
    <x-admin.notifications/>  
    <link rel="stylesheet" href="{{asset('css/admin/all.css')}}">
    @yield('styles')
@stop

@section('js')
    <script type="text/javascript" src="{{asset('js/admin/all.js')}}"></script>
    @yield('scripts')
@stop