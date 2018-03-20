@extends('layouts.master')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="box">
                <div class="box-header box-header-title">
                    <h3 class="box-title">LIST OF ADMINISTRATORS</h3>
                    <a href="{{ url('/pages/admin') }}" class="btn btn-default pull-right"><i
                                class="fa fa-plus-square"></i> ADD ADMIN</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>STAFF ID</th>
                            <th>FIRST NAME</th>
                            <th>MIDDLE NAME</th>
                            <th>LAST NAME</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        @foreach($admin as $administrator)
                            <tbody>
                            <tr>
                                <td>{{ $administrator->email }}</td>
                                <td>{{ $administrator->name }}</td>
                                <td>{{ $administrator->middlename }}</td>
                                <td>{{ $administrator->lastname }}</td>
                                <td>
                                    <a href="/edit/admins/{{ $administrator->id }}" class="btn btn-primary btn-flat">EDIT</a>
                                    <a href="/list/admins/delete/{{ $administrator->id }}"
                                       class="btn btn-danger btn-flat"
                                       onClick="return confirm('Are you sure you want to delete this Admin?')">DELETE</a>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection