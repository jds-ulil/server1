@extends('layouts.default_admin')

@section('addcss')
    {{ HTML::style('B3ATm/css/DT_bootstrap.css') }}
    @stop

@section('content')
    <h1>User</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop


@section('addjs')
    {{ HTML::script('B3ATm/js/DT_bootstrap.js') }}
    {{ HTML::script('B3ATm/vendors/datatables/js/jquery.dataTables.min.js') }}
@stop
