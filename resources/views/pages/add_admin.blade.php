@extends('layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @include('pages.heading')
            <ol class="breadcrumb" align="center">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">add admins</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- right column -->
            <div class="col-md-10 col-md-offset-1">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="row">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">ADD ADMIN</h3>
                        </div>
                        <form class="form-horizontal" action="" method="post" data-parsley-validate>
                            <div class="box-body">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Enter First Name">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                                    <label for="middlename" class="col-sm-2 control-label">Middle Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="middlename" name="middlename"
                                               placeholder="Enter Middle Name">
                                        @if ($errors->has('middlename'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label for="lastname" class="col-sm-2 control-label">Last Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                               placeholder="Enter Last Name">
                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-sm-2 control-label">Reg Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email"
                                               name="email"
                                               placeholder="Reg #">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password"
                                               name="password" placeholder="Enter Password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                             </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default">Clear</button>
                                <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection