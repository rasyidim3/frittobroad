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
                <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">

                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Broadcast</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" novalidate>



                            <div class="form-group c_form_group">
                                <label>Tanggal Broadcast</label>
                                <div class="input-group">
                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
                                </div>
                            </div>



                            <div class="form-group c_form_group">
                                <div class="mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addevent">Pilih User</button>
                                </div>
                            </div>


                            <div class="form-group c_form_group">
                                <label>Judul Broadcast</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="form-group c_form_group">
                                <label>Media Gambar</label>
                                <div class="body">
                                    <input type="file" id="dropify-event" data-default-file="assets/images/image-gallery/1.jpg">
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Isi Pesan</h2>
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
                                            <div class="body">
                                                <textarea id="ckeditor">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <br>
                            <button type="submit" class="btn btn-primary theme-bg gradient">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection