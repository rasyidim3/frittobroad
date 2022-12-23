@extends('admin.panel')
@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="tab-content mt-0">
            <div class="tab-pane show active" id="All-Contacts">
                <div class="form-group c_form_group bg-white">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                        <div class="input-group-append"><button class="btn btn-primary btn-sm theme-bg gradient" type="button">Search</button></div>
                    </div>
                </div>
                <div class="mb-3 mb-xl-20">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".new-project-modaladd"><i class="bi bi-person-plus"></i>Add New</button>
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
        </div>
    </div>
</div>

@endsection