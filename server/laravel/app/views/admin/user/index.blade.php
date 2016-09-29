@extends('layouts.default_admin')

@section('addcss')
    {{ HTML::style('B3ATm/css/DT_bootstrap.css') }}
    @stop

@section('content')

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="row">
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <li class="active">
                    <a href="{{ URL::to('admin/users/') }}"><i class="glyphicon glyphicon-chevron-right"></i>index</a>
                </li>
                <li>
                    <a href="{{ URL::to('admin/users/create') }}"><i class="glyphicon glyphicon-chevron-right"></i>create</a>
                </li>
            </ul>
        </div>

        <div class="col-md-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title">Bootstrap dataTables</div>
                        </div>
                        <div class="bootstrap-admin-panel-content">
                            <table class="table table-striped table-bordered" id="example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $key => $value)
                                    <tr @if($key%2==0) class="even" @else class="odd" @endif >
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>
                                            <a href="#"><button class="btn btn-sm btn-danger deletedata"><i class="glyphicon glyphicon-trash"></i>Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('addjs')
    {{ HTML::script('B3ATm/vendors/datatables/js/jquery.dataTables.min.js') }}
    {{ HTML::script('B3ATm/js/DT_bootstrap.js') }}
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#example').dataTable( {
                "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records per page"
                },
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 3 ] }
                ]
            } );

            $('.deletedata').on('click',function(){
                //if (confirm("Hapus?")) {
                    var url= window.location;
                    $.ajax({
                        url: url + 'admin/users/index',
                        method: 'DELETE',
                        data: "tes",
                        dataType: '',
                        success: function( data, status, xhr ) {
                            console.log('sukses');
                        }
                    });
//                } else {
//                }
            });
        });
    </script>
@stop


