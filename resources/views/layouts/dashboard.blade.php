<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">


    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- Styles -->
    <link href="/css/copya-dashboard.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                'config_path' => config('copya.admin_path'),
        ]); ?>

    </script>
</head>
<body class="fixed-header sidebar-visible">
    <div class="container-fluid container-fixed-lg" id="app">
        @yield('content')
    </div>

    {{--<div data-ng-view class="shuffle-animation"></div>--}}

    <!-- BEGIN VENDOR JS -->

    <script src="/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    {{--<script src="/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>--}}
    <script src="/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="/plugins/classie/classie.js"></script>
    <script src="/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script type="text/javascript" src="/plugins/jquery-autonumeric/autoNumeric.js"></script>
    <script type="text/javascript" src="/plugins/dropzone/dropzone.min.js"></script>
    <script type="text/javascript" src="/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
    <script src="/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script src="/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
    <script src="/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
    <script src="/plugins/handlebars/handlebars-v4.0.5.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/assets/copya/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="/assets/copya/js/form_elements.js" type="text/javascript"></script>
    <script src="/assets/copya/js/scripts.js" type="text/javascript"></script>

    <!-- Scripts -->

    <script src="/js/copya.js"></script>
</body>
</html>
