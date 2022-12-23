@extends('admin.panel')

@section('content')


<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>Muhammad Rasyidi</span>
                </div>

            </div>
        </div>
        <div class="row clearfix">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars text-muted"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item vivify swoopInTop delay-150 active"><a class="nav-link">Analytics</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-12">
                <div class="card theme-bg gradient">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="slider1" class="carousel vert slide" data-ride="carousel" data-interval="2700">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div>Total Nomor</div>
                                                    <div class="mt-3 h1">12K</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="2800">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div>Total Broadcast</div>
                                                    <div class="mt-3 h1">1,258</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="slider3" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div>Total Admin</div>
                                                    <div class="mt-3 h1">20</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="slider4" class="carousel vert slide" data-ride="carousel" data-interval="2500">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div>Total Saldo</div>
                                                    <div class="mt-3 h1">Rp. 1T</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-12">
                <div class="section_title">
                    <div class="mr-3">
                        <h3>GRAFIK</h3>
                       
                    </div>
                    <div>
                        <div class="btn-group mb-3">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    2022</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Today’s</a>
                                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last 12 Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Custom Dates</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Report</span></button>
                            <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i>
                                <span class="hidden-md">Export</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix row-deck">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>This Year's Total Revenue</h2>
                        <small class="text-muted font-12">It is the period time a user is actively engaged
                            with your website, page or app, etc</small>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu theme-bg gradient">
                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                    <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="d-flex flex-row">
                            <div class="pb-3">
                                <h5 class="mb-0">$3,056</h5>
                                <small class="text-muted font-11">Total Sales</small>
                            </div>
                            <div class="pb-3 pl-4 pr-4">
                                <h5 class="mb-0">$1,098</h5>
                                <small class="text-muted font-11">Total Profit</small>
                            </div>
                            <div class="ml-auto">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-sm btn-default">Day</button>
                                    <button type="button" class="btn btn-sm btn-default">Week</button>
                                    <button type="button" class="btn btn-sm btn-primary theme-bg gradient">Month</button>
                                </div>
                            </div>
                        </div>
                        <div id="flotChart" class="flot-chart"></div>
                    </div>  
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Sales By Campaign</h2>
                        <small class="font-12">The total number of Page Impressions within the date
                            range</small>
                    </div>
                    <div class="body">
                        <div class="d-flex flex-row">
                            <div class="pb-3">
                                <h5 class="mb-0">$356</h5>
                                <small class="text-muted font-11">Paid</small>
                            </div>
                            <div class="pb-3 pl-4 pr-4">
                                <h5 class="mb-0">$198</h5>
                                <small class="text-muted font-11">Viral</small>
                            </div>
                            <div class="ml-auto">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-sm btn-default">D</button>
                                    <button type="button" class="btn btn-sm btn-primary theme-bg gradient">W</button>
                                    <button type="button" class="btn btn-sm btn-default">M</button>
                                </div>
                            </div>
                        </div>
                        <div id="chart-bar-rotated" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection