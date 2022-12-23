@extends('admin.panel')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-5 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>Muhammad Rasyidi</span>
                </div>
                <div class="col-md-7 col-sm-12 text-md-right">
                    <div class="d-flex align-items-center justify-content-md-end mt-4 mt-md-0 flex-wrap vivify pullUp delay-550">
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                            <p class="text-muted mb-1">Total Data Admin</p>
                            <h5 class="mb-0">561</h5>
                        </div>
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                            <p class="text-muted mb-1">Total Data User</p>
                            <h5 class="mb-0">87</h5>
                        </div>
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                            <p class="text-muted mb-1">Total Keseluruhan</p>
                            <h5 class="mb-0">0</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-12">
                <div class="card bg-clear">
                    <div class="header">
                        <ul class="nav nav-tabs3">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#All-Contacts">Data Admin</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Google-Contacts">Data User</a></li>
                        </ul>

                    </div>
                    <div class="body">

                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="All-Contacts">
                                <div class="form-group c_form_group bg-white">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <div class="input-group-append"><button class="btn btn-primary btn-sm theme-bg gradient" type="button">Search</button></div>
                                    </div>
                                </div>
                                <div class="mb-3 mb-xl-20">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnote"><i class="bi bi-person-plus"></i>Add New</button>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="card contact_card">
                                            <div class="header">
                                                <ul class="header-dropdown dropdown">
                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                                        <ul class="dropdown-menu theme-bg gradient">
                                                            <li><a href="javascript:void(0);">Action</a></li>
                                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                                            <li><a href="javascript:void(0);">Something else</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="body text-center">
                                                <div class="circle">
                                                    <img class="rounded-circle" src="assets/images/sm/avatar1.jpg" alt="">
                                                </div>
                                                <h6 class="mt-3 mb-0">Muhammad Rasyidi</h6>
                                                <span>Rasyidim3@gmail.com</span>
                                                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                    <!-- <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li> -->
                                                </ul>
                                                <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                                <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Google-Contacts">
                                <div class="form-group c_form_group bg-white">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <div class="input-group-append"><button class="btn btn-primary btn-sm theme-bg gradient" type="button">Search</button></div>
                                    </div>
                                </div>
                                <div class="mb-3 mb-xl-20">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnote"><i class="bi bi-person-plus"></i>Add New</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-custom spacing5 mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>
                                                    <!-- <div class="fancy-checkbox mr-0">
                                                        <label class="mb-0"><input type="checkbox"><span></span></label>
                                                    </div> -->
                                                </th>
                                                <th></th>
                                                <th>Nama</th>
                                                <th>E-Mail</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="fancy-checkbox mr-0">
                                                        <label class="mb-0"><input type="checkbox"><span></span></label>
                                                    </div>
                                                </td>
                                                <td class="w60">
                                                    <img src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35">
                                                </td>
                                                <td>
                                                    <a href="#" title="">Muhammad Rasyidi</a>
                                                    <p class="mb-0">+ 62822-7450-8677</p>
                                                </td>
                                                <td>
                                                    <span>rasyidim3@gmail.com</span>
                                                </td>
                                                <td>
                                                    <span>Jl. Sejati Medan Polonia Medan</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary theme-bg gradient btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                                    <button class="btn btn-dark btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="Invitations-Contacts">
                                <h6>No Invitations</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection