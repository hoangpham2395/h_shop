@extends('layouts.backend.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Products</h3>
                    </div>
                    <div class="box-body">
                        <!-- Info boxes -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-aqua"><a href="#"><i class="fa fa-mobile"></i></a></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Products</span>
                                        <span class="info-box-number">90<small>%</small></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-red"><a href="#"><i class="fa fa-barcode"></i></a></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Categories</span>
                                        <span class="info-box-number">100</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->

                            <!-- fix for small devices only -->
                            <div class="clearfix visible-sm-block"></div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-green"><a href="#"><i class="fa fa-apple"></i></a></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Brands</span>
                                        <span class="info-box-number">760</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-yellow"><a href="#"><i class="fa fa-shopping-cart"></i></a></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Orders</span>
                                        <span class="info-box-number">2,000</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Employees</h3>
                    </div>
                    <div class="box-body">
                        <!-- Info boxes -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-aqua"><a href="{{route('employees.index')}}"><i class="fa fa-users"></i></a></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Employees</span>
                                        <span class="info-box-number">100</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-red"><a href="{{route('jobs.index')}}"><i class="fa fa-suitcase"></i></a></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jobs</span>
                                        <span class="info-box-number">10</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Admin</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-green"><a href="{{route('admin.index')}}"><i class="fa fa-user"></i></a></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Admin</span>
                                        <span class="info-box-number">10</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection