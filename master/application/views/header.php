<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Satnica - <?php echo $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if (isset($canonical)): ?><link rel="canonical" href="<?php echo base_url() . $canonical ?>" /><?php endif ?>

        <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/shift.css">

        <script src="<?php echo base_url() ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo base_url() ?>js/vendor/jquery-1.10.1.min.js"></script>
        <script src="<?php echo base_url() ?>js/vendor/globalize.min.js"></script>
        <script src="<?php echo base_url() ?>js/vendor/dx.chartjs.js"></script>
    </head>
    <body>
        <!-- Google Tag Manager -->
        <noscript>
            <iframe src="//www.googletagmanager.com/ns.html?id=GTM-PBRNPG" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <script>
          (function(w,d,s,l,i) {
            w[l]=w[l] || [];
            w[l].push({
              'gtm.start': new Date().getTime(),
              event:'gtm.js'
            });
            var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-PBRNPG');
        </script>
        <!-- End Google Tag Manager -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>">Satnica</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li id="menu-add"><a href="<?php echo site_url('/shift/add'); ?>"><span class="glyphicon glyphicon-plus"></span> <?php echo lang('add'); ?></a></li>
                        <li id="menu-report"><a href="<?php echo site_url('/shift/report_period/report'); ?>"><span class="glyphicon glyphicon-th-list"></span> <?php echo lang('report'); ?></a></li>
                        <li id="menu-pdf"><a href="<?php echo site_url('/shift/report_period/pdf'); ?>"><span class="glyphicon glyphicon-file"></span> <?php echo lang('pdf'); ?></a></li>
                        <li id="menu-dashboard"><a href="<?php echo site_url('/shift/stats'); ?>"><span class="glyphicon glyphicon-stats"></span> <?php echo lang('stats'); ?></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $username ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('/user/profile'); ?>"><span class="glyphicon glyphicon-wrench"></span> <?php echo lang('profile'); ?></a></li>
                                <li><a href="<?php echo site_url('/user/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> <?php echo lang('sign_out'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <!-- ajax modal -->
        <div class="modal fade" id="ajax-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" id="ajax-body">
                        <p>One fine body&hellip;</p>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- content -->
        <div class="container">
