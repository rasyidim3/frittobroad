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
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Data User Broadcast
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
                    <div class="table-responsive">
                        <div class="mb-3 mb-xl-20">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".new-project-modaladduser"><i class="bi bi-person-plus"></i>Add New</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".new-project-modal"><i class="bi bi-file-earmark-excel-fill"></i>Import</button>
                        </div>
                        
                        <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                            <thead class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Whatsapp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Whatsapp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>

                                </tr>
                            </tfoot>
                            <tbody class="text-center">
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>+62 822 7450 8677  </td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Sidney</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Singapore</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Sidney</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Suki Burks</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Prescott Bartlett</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Gavin Cortez</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Martena Mccray</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Unity Butler</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Howard Hatfield</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Hope Fuentes</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Vivian Harrell</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Timothy Mooney</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Jackson Bradshaw</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Olivia Liang</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Singapore</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Bruno Nash</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Sakura Yamamoto</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Tokyo</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Thor Walton</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Serge Baldwin</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Singapore</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Zenaida Frank</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Zorita Serrano</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Jennifer Acosta</td>
                                    <td>Junior +62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Cara Stevens</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Hermione Butler</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Lael Greer</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>London</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Jonas Alexander</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>San Francisco</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>Singapore</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>+62 822 7450 8677</td>
                                    <td>New York</td>
                                    <td>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-pencil-square"></i>Edit</button>
                                        <button class="btn btn-default btn-sm"><i class="bi bi-trash3"></i>Hapus</button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection