<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
        <link rel="shortcut icon" href="<?php echo base_url() ?>/cdn/about/<?php echo config('favicon') ?>" type="image/x-icon" />
        <title><?php echo config('title') ?></title>
        <!-- Scripts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/core.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/forms.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/components.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/skins.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/custom.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/linecons/css/linecons.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/icons.css">
        <link rel="stylesheet" href="<?php echo STYLE_JS ?>/select2/select2.css">
        <script src="<?php echo STYLE_JS ?>/jquery-1.11.1.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery-ui.min.js"></script>
        <style>
            .xe-widget.xe-progress-counter.xe-progress-counter-pink{background-color: #f8961a}
            @media screen and (max-width: 768px){
                .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle {
                    float: left;
                }}
            </style>
            <!-- Scripts -->
            <script src="<?php echo STYLE_JS ?>/bootstrap.min.js"></script>
            <script src="<?php echo STYLE_JS ?>/TweenMax.min.js"></script>
            <script src="<?php echo STYLE_JS ?>/resizeable.js"></script>
            <script src="<?php echo STYLE_JS ?>/joinable.js"></script>
            <script src="<?php echo STYLE_JS ?>/api.js"></script>
            <script src="<?php echo STYLE_JS ?>/select2/select2.min.js"></script>
            <script src="<?php echo STYLE_JS ?>/custom.js"></script>
            <script src="<?php echo STYLE_JS ?>/toggles.js"></script>

        </head>
        <body class="page-body">

        <div class="settings-pane">

            <a href="#" data-toggle="settings-pane" data-animate="true">
                &times;
            </a>

            <div class="settings-pane-inner">

                <div class="row">

                    <div class="col-md-4">

                        <div class="user-info">

                            <div class="user-details">

                                <h3>
                                    <span class="user-status is-online"></span> 
                                    <a href="#"><?php echo session('username') ?></a>
                                </h3>

                                <p class="user-title">Administrator</p>

                                <div class="user-links">
                                    <a href="<?php echo site_url('admin/users/manage/' . session('user_id')) ?>" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
                                    <a href="<?php echo site_url('admin/logout') ?>" class="btn btn-success"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="page-container">   
            <div class="sidebar-menu toggle-others fixed">

                <div class="sidebar-menu-inner">

                    <header class="logo-env">

                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo site_url('admin/dashboard') ?>" class="logo-expanded">
                                <img style="width:100px;" src="<?php echo base_url() ?>/cdn/about/logo-allrec.png" alt="<?php echo config('title') ?>" />
                            </a>

                            <a href="<?php echo site_url('admin/dashboard') ?>" class="logo-collapsed">
                                <img src="<?php echo base_url() ?>/cdn/about/<?php echo config('favicon') ?>" width="40" alt="<?php echo config('title') ?>" />
                            </a>
                        </div>

                        <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                        <div class="mobile-menu-toggle visible-xs">


                            <a href="#" data-toggle="mobile-menu">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                        </div>

                        <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
                        <div class="settings-icon">
                            <a href="#" data-toggle="settings-pane" data-animate="true">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </a>
                        </div>


                    </header>


                    <ul id="main-menu" class="main-menu">
                        <li>
                            <a href="<?php echo site_url('admin/dashboard') ?>">
                                <i class="fa-home"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="<?php //echo site_url('admin/settings') ?>">
                                <i class="fa fa-cogs"></i>
                                <span class="title">Settings / SEO</span>
                            </a>
                        </li> -->

                        <li>
                            <a href="<?php echo site_url('admin/sliders') ?>">
                                <i class="fa fa-picture-o"></i>
                                <span class="title"> Sliders</span>
                            </a>	
                        </li>

                       <li>
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span class="title">Users</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url('admin/users/admins') ?>">
                                        <i class="fa fa-user-secret"></i>
                                        <span class="title">Admins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/users/mormal_users') ?>">
                                        <i class="fa fa-users"></i>
                                        <span class="title">Normal Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/categories') ?>">
                                <i class="fa fa-sitemap"></i>
                                <span class="title">Categories </span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/recipes') ?>">
                                <i class="fa fa-cutlery"></i>
                                <span class="title">Recipes </span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/tricks') ?>">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">Tips & Tricks </span>
                            </a>	
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/newsletters') ?>">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Newsletters </span>
                            </a>	
                        </li>
                        <!-- <li>
                            <a href="<?php //echo site_url('admin/ads') ?>">
                                <i class="fa fa-bullhorn"></i>
                                <span class="title">ADS </span>
                            </a>	
                        </li> -->

                    </ul>

                </div>

            </div>

            <div class="main-content">

                {layout}
                <footer class="main-footer sticky footer-type-1">

                    <div class="footer-inner">

                        <!-- Add your copyright text here -->
                        <div class="footer-text">

                            <strong><a href="http://elmanawy.info/"><?php echo config('copyright') ?></a></strong>.
                        </div>


                        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                        <div class="go-up">

                            <a href="#" rel="go-top">
                                <i class="fa-angle-up"></i>
                            </a>

                        </div>

                    </div>

                </footer>
            </div>
        </div>

        <link rel="stylesheet" href="<?php echo STYLE_JS ?>/select2/select2.css">
        <link rel="stylesheet" href="<?php echo STYLE_JS ?>/select2/select2-bootstrap.css">
        <!--<link rel="stylesheet" href="<?php echo STYLE_JS ?>/multiselect/css/multi-select.css">-->
        <script src="<?php echo STYLE_JS ?>/select2/select2.min.js"></script>
        <!--<script src="<?php echo STYLE_JS ?>/jquery.multi-select.js"></script>-->
        <script type = "text/javascript" >
            jQuery(document).ready(function ($)
            {
                $(".s2example-1").select2({
                    placeholder: 'Select your category...',
                    allowClear: true
                }).on('select2-open', function ()
                {
                    // Adding Custom Scrollbar
                    $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                });

            });


        </script>
    </body>
</html>































