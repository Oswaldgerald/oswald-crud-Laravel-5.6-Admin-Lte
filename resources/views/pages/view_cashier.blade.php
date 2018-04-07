@extends('layouts.master')

@section('content')
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
                        <h3 class="box-title">LIST OF CASHIERS</h3>
                        <a href="{{ url('/addcashier') }}" class="btn btn-default pull-right"><i
                                    class="fa fa-plus-square"></i> ADD CASHIER</a>
                    </div>
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
                            @foreach($cashier as $saler)
                                <tbody>
                                <tr>
                                    <td>{{ $saler->email }}</td>
                                    <td>{{ $saler->name }}</td>
                                    <td>{{ $saler->middlename }}</td>
                                    <td>{{ $saler->lastname }}</td>
                                    <td>
                                        <a href="/edit/Owner/{{ $saler->id }}" class="btn btn-primary btn-flat">EDIT</a>
                                        <a href="/list/Owner/delete/{{ $saler->id }}"
                                           class="btn btn-danger btn-flat"
                                           onClick="return confirm('Are you sure you want to delete this BusinessOwner?')">DELETE</a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection