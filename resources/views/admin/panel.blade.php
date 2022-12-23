<!doctype html>
<html lang="en">

<head>
    <title>Fritto Broadcast</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/animate-css/vivify.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/dist/summernote.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/dist/summernote-bs4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/dropify/css/dropify.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css')}}">



    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert/sweetalert.css')}}" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/mooli.min.css')}}">

</head>

<body>

    <div id="body" class="theme-orange">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{url('assets/images/loading.png')}}" width="60" height="60" alt="Mooli"></div>
                <p>Please wait...</p>
            </div>
        </div>

        @include('admin.header')
        @include('admin.sidebar')
        @include('admin.theme_sidebar')
        @include('modal.modal')

        @yield ('content')




    </div>
    </div>


    <!-- bootsrap link javascript -->
 

    <!-- Javascript -->
    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

    <!-- Vedor js file and create bundle with grunt  -->
    <script src="{{asset('assets/bundles/flotscripts.bundle.js')}}"></script><!-- flot charts Plugin Js -->
    <script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script>
    <script src="{{asset('assets/vendor/toastr/toastr.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
    <script src="{{asset('assets/bundles/fullcalendarscripts.bundle.js')}}"></script>


    <!--/ calender javascripts -->

    <script src="{{asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script><!-- Bootstrap Colorpicker Js -->
    <script src="{{asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script><!-- Input Mask Plugin Js -->
    <script src="{{asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script><!-- Multi Select Plugin Js -->
    <script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script><!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('assets/vendor/nouislider/nouislider.js')}}"></script><!-- noUISlider Plugin Js -->

    <script src="{{asset('assets/vendor/summernote/dist/summernote-bs4.min.js')}}"></script>
    <!--summbernote -->
    <script>
        $('.summernote').summernote({
            placeholder: '',
            tabsize: 1,
            height: 300
        });
    </script>
    <script src="{{asset('assets/vendor/dropify/js/dropify.js')}}"></script>

  
    <script src="{{asset('assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>

   
    <script src="{{asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script><!-- SweetAlert Plugin Js -->

    <script src="{{asset('assets/bundles/flotscripts.bundle.js')}}"></script><!-- flot charts Plugin Js -->
    <script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script>


    <!-- <script src="{{asset('assets/js/index3.js')}}"></script> -->
    <script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{asset('assets/js/pages/charts/apex.js')}}"></script>
    
    <script src="{{asset('js/pages/forms/dropify.js')}}"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
    <script src="{{asset('js/pages/forms/editors.js')}}"></script>
    <script src="{{asset('js/pages/calendar.js')}}"></script>
    <script src="{{asset('js/pages/tables/invoice.js')}}"></script>
    <script type="text/javascript">
        function checkAll(ele) {
            var checkboxes = document.getElementsByTagName('input');
            if (ele.checked) {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = true;
                    }
                }
            } else {
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].type == 'checkbox') {
                        checkboxes[i].checked = false;
                    }
                }
            }
        }
    </script>
    <!-- Project core js file minify with grunt -->
    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>