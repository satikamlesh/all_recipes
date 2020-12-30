<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
         <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
        <link rel="shortcut icon" href="<?php echo config('favicon') ?>" type="image/x-icon" />
        <title><?php echo config('title') ?> - Login</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/core.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/forms.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/components.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/skins.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/custom.css">
        <script src="<?php echo STYLE_JS ?>/jquery-1.11.1.min.js"></script>
        <style type="text/css">
            .loginDiv{width: 100%; float: left; text-align: center; max-width: 100%}
            .loginDiv .row{width: 100%; text-align: center;}
            .loginDiv .row .col-sm-4{float: none; display: inline-block;}
            .mainLoginDiv{background: #ffba00; border-radius: 6px; position: relative; overflow: hidden;}
            .mainLoginDiv:before{content: ''; width: 100%; height: 100%; position: absolute; top: 0; left: 0; background: url(http://localhost/food//cdn/recipes/marwaelmanawy-i-cheef-recipe-25.jpg) no-repeat center top; background-size: cover;}
            .mainLoginDivIn{background: rgba(255, 186, 0, 0.8); width: 100%; float: left; position: relative;}
           .login-page .login-form .form-group .form-control.input-dark{background: rgba(255,255,255,0.5)}
.loginDiv ::placeholder {
  color: #ccc;
  opacity: 1; /* Firefox */
}

.loginDiv :-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #ccc;opacity: 1;
}

.loginDiv ::-ms-input-placeholder { /* Microsoft Edge */
 color: #ccc;opacity: 1;
}
.login-page .login-form .form-group .form-control.input-dark{color: #000; border-radius: 4px}
.login-page .login-form .login-header p{color: #fff; font-size: 25px}
.login-page .login-form .form-group .btn.btn-dark{text-align: center; font-size: 18px; border-radius: 35px}
        </style>
    </head>
    <body class="page-body login-page">


        <div class="login-container center loginDiv">

            <div class="row">

                <div class="col-sm-4">
                    <div class="mainLoginDiv">
                        <div class="mainLoginDivIn">
                    <script type="text/javascript">
                        jQuery(document).ready(function ($)
                        {

                            setTimeout(function () {
                                $(".fade-in-effect").addClass('in');
                            }, 1);



                            $("form#login .form-group:has(.form-control):first .form-control").focus();
                        });
                    </script>

                    <!-- Errors container -->
                    <div class="errors-container">


                    </div>
                    <!-- Add class "fade-in-effect" for login form effect -->
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                    <?php endif ?>

                    <?php echo form_open(false, 'class="login-form fade-in-effect"') ?>
                    <div class="login-header" style="alli">
                        <a href="#" class="logo">
                            <img src="<?php echo base_url() ?>/cdn/about/logo-allrec.jpg" alt="Marwa El-Manawy" width="100" />

                        </a>
                        <p> Admin login</p>
                    </div>


                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email" value="<?php echo set_value('email') ?>" class="form-control input-dark" autocomplete="off" >
                    </div>

                    <div class="form-group">
                        <input type="password" id="inputPassword" name="password" placeholder="Password" class="form-control input-dark" autocomplete="off" >

                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-dark  btn-block text-right" value="<?php echo lang('users_login') ?>">
                            <i class="fa-lock"></i>
                             Login
                        </button>
                    </div>

                    <?php echo form_close() ?>                

                </div>
                </div>
                </div>
            </div>

        </div>



        <!-- Bottom Scripts -->
        <script src="<?php echo STYLE_JS ?>/bootstrap.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/TweenMax.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/resizeable.js"></script>
        <script src="<?php echo STYLE_JS ?>/joinable.js"></script>
        <script src="<?php echo STYLE_JS ?>/api.js"></script>
        <script src="<?php echo STYLE_JS ?>/toggles.js"></script>
        <!--<script src="<?php echo STYLE_JS ?>/jquery-validate/jquery.validate.min.js"></script>-->
        <script src="<?php echo STYLE_JS ?>/toastr/toastr.min.js"></script>

    </body>
</html>