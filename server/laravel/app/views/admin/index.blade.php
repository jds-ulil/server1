@extends('layouts.default_admin')

@section('content')
    <div class="row">
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <li class="active">
                    <a href="{{ URL::to('admin/index') }}"><i class="glyphicon glyphicon-chevron-right"></i>index</a>
                </li>
                <li>
                    <a href="{{ URL::to('admin/users/') }}"><i class="glyphicon glyphicon-chevron-right"></i>User</a>
                </li>
            </ul>
        </div>

        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">Details</div>
                        </div>
                        <div class="bootstrap-admin-panel-content">
                            <ul>
                                <li>An admin theme built with <a href="http://getbootstrap.com" target="_blank">Bootstrap 3.x.</a></li>
                                <li>Free for personal and commercial use</li>
                                <li>Inspired by and based on <a href="https://github.com/VinceG/Bootstrap-Admin-Theme" target="_blank">Bootstrap-Admin-Theme</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">Source</div>
                        </div>
                        <div class="bootstrap-admin-panel-content">
                            <ul>
                                <li>
                                    <a href="https://github.com/meritoo/Bootstrap-3-Admin-Theme" target="_blank">Github Repository</a>
                                </li>
                                <li>
                                    <a href="https://github.com/meritoo/Bootstrap-3-Admin-Theme/archive/master.zip">Download (.zip package)</a>
                                </li>
                                <li>
                                    License: MIT (see below)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop