<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo config('title'); ?></title>
        <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
        <meta name="description" content="<?php echo config('meta_description') ?>">
        <meta name="Keywords" content="<?php echo config('meta_keywords') ?>">
       	<link rel="shortcut icon" href="<?php echo base_url() ?>/cdn/about/favicon-new.png" type="image/x-icon">
        <!-- CSS
       ================================================== -->
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/style.css">
        <!-- Java Script
       ================================================== -->

        <script src="<?php echo STYLE_JS ?>/jquery.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/bootstrap.js"></script>
        <script> var site_url = '<?php echo site_url() ?>';</script>
        <script src="<?php echo STYLE_JS ?>/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.superfish.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.royalslider.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/responsive-nav.js"></script>
        <script src="<?php echo STYLE_JS ?>/hoverIntent.js"></script>
        <script src="<?php echo STYLE_JS ?>/isotope.pkgd.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/chosen.jquery.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.tooltips.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery.pricefilter.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery-ui.js"></script>
          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-8812341586812989",
                enable_page_level_ads: true
            });
        </script>
    </head>

    <body>
        <div class="preloade">
            <img src="<?php echo STYLE_IMAGES ?>/reload.gif">
        </div>
        <div id="wrapper">
            <!-- Header
            ================================================== -->
            <header id="header">
                <!-- Container -->
                <div class="container">
                    <!-- Logo / Mobile Menu -->
                    <div class="three columns">
                        <div id="logo">
                            <h1><a href="<?php echo site_url() ?>"><img src="<?php echo base_url() ?>/cdn/about/logo-allrec.png" alt="<?php echo config('title') ?> - LOGO" title="<?php echo config('title') ?> - LOGO"></a></h1>
                        </div>
                    </div>
                    <!-- Navigation
                    ================================================== -->
                    <div class="thirteen columns navigation">
                        <nav id="navigation" class="menu nav-collapse">
                            <ul>
                                <li><a href="<?php echo site_url() ?>">Home</a></li>
                                <li><a href="#">Categories</a>
                                    <ul class="menu-categories">
                                        <?php $cats = $this->db->join('icons', 'icons.icon_id = categories.icon_id', 'inner')->select('categories.*,icons.icon')->where('status',1)->order_by('title')->get('categories')->result(); ?>
                                        <?php if ($cats): ?>
                                            <?php foreach ($cats as $cat): ?> 
                                                <li>
                                                    <a href="<?php echo site_url('category/' . urlencode($cat->permalink)) ?>">
                                                        <i class="<?php echo $cat->icon ?>"></i>
                                                        <?php if (strlen($cat->title) > 10): ?> <?php echo substr($cat->title, 0, 10) . ".."; ?> <?php else: ?> <?php echo $cat->title; ?> <?php endif ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('recipes') ?>">Recipes</a></li>
                                <li><a href="<?php echo site_url('tricks') ?>">Tips & Tricks </a></li>
                                <!-- <li><a href="<?php //echo site_url('contact') ?>">Contact US</a></li> -->

                                <?php if (!(user())): ?>
                                    <li>
                                        <a href="javascript:popup_switch('login')" class="login">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            Login / Register
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <a href="#" class="dropdown-toggle user-toggle" data-toggle="dropdown" role="button">
                                            <span>
                                                <?php if (user()->image): ?><img src="<?php echo base_url() ?>/cdn/users/<?php echo user()->image ?>" alt="<?php echo user()->username ?>"> <?php endif ?>
                                                <?php if (!(user()->image)): ?><img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo user()->username ?>"> <?php endif ?>  
                                            </span>
                                        </a>
                                        <ul class="user-menu">
                                            <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                            <li><a href="<?php echo site_url('account/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                        </ul>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Container / End -->
            </header>
            {layout}
        </div>
        <!-- Wrapper / End -->
        <!-- Footer
        ================================================== -->
        <div id="footer">
            <!-- Container -->
            <div class="container">
                <div class="five columns">
                    <!-- Headline -->
                    <h3 class="headline footer">About</h3>
                    <span class="line"></span>
                    <div class="clearfix"></div>
                    <p><?php echo config('description') ?></p>
                </div>
                <div class="six columns">
                    <!-- Headline -->
                    <h3 class="headline footer">Recent Categories</h3>
                    <span class="line"></span>
                    <div class="clearfix"></div>

                    <ul class="footer-links">
                        <?php $catss = $this->db->join('icons', 'icons.icon_id = categories.icon_id', 'inner')->select('categories.*,icons.icon')->order_by('category_id')->limit('18')->get('categories')->result(); ?>
                        <?php if ($catss): ?>
                            <?php foreach ($catss as $cat): ?> 
                                <li>
                                    <a href="<?php echo site_url('category/' . urlencode($cat->permalink)) ?>">
                                        <i class="<?php echo $cat->icon ?>"></i>
                                        <?php if (strlen($cat->title) > 10): ?> <?php echo substr($cat->title, 0, 10) . ".."; ?> <?php else: ?> <?php echo $cat->title; ?> <?php endif ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="five columns">
                    <!-- Headline -->
                    <h3 class="headline footer">Newsletter</h3>
                    <span class="line"></span>
                    <div class="clearfix"></div>
                    <p>Sign up to receive email updates on new recipes announcements.</p>
                    <form class="subscrie-form" id="newsletter" action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="newsletter-sucess"></div>
                            </div>
                            <div class="col-md-12">
                                <div id="newsletter-fail"> </div>
                            </div>
                        </div>
                        <input class="newsletter" type="email" name="email" required="required"  id="email" placeholder="Your email address here..."/>
                        <button class="newsletter-btn" type="submit"><img class="loading-news" src="<?php echo STYLE_IMAGES ?>/load.gif" /> Subscribe </button>

                    </form>
                </div>
            </div>
            <!-- Container / End -->
        </div>
        <!-- Footer / End -->
        <!-- Footer Bottom / Start -->
        <div id="footer-bottom">
            <div class="container">
                <div class="eight columns"><?php echo config('copyright') ?>. Powered By <i style="color: #ff00763d;" class="fa fa-heart"></i> <a href="#">Kamlesh Kumar</a>.</div>
            </div>
        </div>
        <!-- Footer Bottom / End -->


        <?php if (!user()): ?>
            <div class="modal fade" id="loginModel" role="dialog">
                <div class="modal-dialog login-model">
                    <div class="modal-content">

                        <div class="modal-body">
                            <i class="fa fa-times-circle close" aria-hidden="true" data-dismiss="modal"></i>
                            <div class="clearfix"></div><br />
                            <div class="notification error closeable login_errors" style="display: none;"></div>
                            <form class="popup_login" method="post">
                                <p class="login-icon">
                                    <i class="fa fa-user-circle"></i>
                                    <b>Welcome,</b> Login to your account.
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="password" name="password" placeholder="Your Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <label class="check-text" for="user-session-remember-me">
                                            <input name="remember" type="checkbox" tabindex="4" value="1" checked="checked"/>
                                            <span class="chk-img"></span>
                                            <a id="remember-button">Remember me</a>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="javascript:popup_switch('forgot')" class="forget-pass">Forget Password?</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="button color big">Login
                                            <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <form class="popup_register" method="post">
                                <p class="login-icon">
                                    <i class="fa fa-user-plus"></i>
                                    <b>Welcome,</b> New Here!!
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="password" name="password_2" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="button color big">Register Now
                                            <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <form class="popup_forgot" method="post">
                                <p class="login-icon">
                                    <i class="fa fa-lock"></i>
                                    To recover your password, please write your email address below.
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="button color big">Reset Password
                                            <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p class="popup_login">Don't you have an account? <a href="javascript:popup_switch('register')">Register
                                    now</a>
                                — it's easy!</p>
                            <p class="popup_forgot">Don't you have an account? <a href="javascript:popup_switch('register')">Register
                                    now</a>
                                — it's easy!</p>
                            <p class="popup_register">Already Member? <a href="javascript:popup_switch('login')">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif ?>
        <script src="<?php echo STYLE_JS ?>/custom.js"></script> 
        <script>

            //NEWSLETTER FUNCTION
            $('#newsletter').submit(function (e) {
                var form = $(this);
                e.preventDefault();
                $(".loading-news").show();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/newsletters'); ?>",
                    data: form.serialize(),
                    dataType: "html",
                    success: function (res) {
                        $('#newsletter-sucess').html(res);
                        $(".loading-news").hide();
                    }
                });
            });
        </script>
      
    </body>
</html>