
<!-- Titlebar
================================================== -->
<section id="titlebar">
    <div class="container">
        <div class="eight columns">
            <h2>Contact</h2>
        </div>
        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li>Contact</li>
                </ul>
            </nav>
        </div>
    </div>
</section>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
    <div class="sixteen columns">
        <div class="image-with-caption contact">
            <img class="rsImg" src="<?php echo STYLE_IMAGES ?>/contact.jpg" alt="" />
            <span>Get in touch with any questions</span>
        </div>
    </div>
</div>
<!-- Container / End -->


<div class="margin-top-10"></div>


<!-- Container -->
<div class="container">

    <!-- Contact Form -->
    <div class="twelve columns">
        <h3 class="headline">Contact Form</h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

        <!-- Contact Form -->
        <section id="contact" class="contact">


            <div class="contact-info">
                <div class="item">
                    <i class="fa fa-mobile"></i>
                    <h5>Phone</h5>
                    <p><?php echo config('phone') ?> </p>
                </div>
                <div class="item">
                    <i class="fa fa-envelope-o"></i>
                    <h5>Mail</h5>
                    <p><?php echo config('webmaster_email') ?></p>
                </div>
                <div class="item">
                    <i class="fa fa-headphones"></i>
                    <h5>Support</h5>
                    <p><?php echo config('support') ?></p>
                </div>
            </div>

            <!-- Success Message -->
            <div class="row">
                <?php if ($success) : ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <i class="fa fa-check-circle" style="margin-left: 7px;"></i>  
                            Your Message Sent Successfully.
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (validation_errors()) : ?>
                    <div class="col-md-12">
                        <div class="notification error closeable">
                            <i class="fa fa-times-circle" style="margin-left: 7px;"></i> 
                            <?php echo validation_errors() ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- Form -->
            <form method="post">
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name: <span>*</span></label>
                            <input name="name" type="text" required/>
                        </div>

                        <div class="col-md-6">
                            <label >Email: <span>*</span></label>
                            <input name="email" type="email" required/>
                        </div>

                        <div class="col-md-12">
                            <label>Message: <span>*</span></label>
                            <textarea name="message" cols="40" rows="3" spellcheck="true" ></textarea>
                        </div>
                    </div>

                </fieldset>
                <input type="submit" class="submit" value="Send Message" />
                <div class="clearfix"></div>
            </form>

        </section>
        <!-- Contact Form / End -->
        <div class="margin-bottom-50"></div>
    </div>
    <!-- Contact Form -->


    <div class="four columns">

        <!-- Share -->
        <div class="widget">
            <h4 class="headline">Stay With US</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>

            <div id="social_counts" class="square">
                <?php if (config('facebook')): ?><a href="#" class="item facebook" ><i class="fa fa-facebook"></i></a> <?php endif?>
                <?php if (config('twitter')): ?><a href="#" class="item twitter"><i class="fa fa-twitter"></i></a> <?php endif?>
                <?php if (config('instagram')): ?><a href="#" class="item instagram"><i class="fa fa-instagram"></i></a> <?php endif?>
                <?php if (config('google_plus')): ?><a href="#" class="item google"><i class="fa fa-google-plus"></i></a> <?php endif?>
                <?php if (config('youtube')): ?><a href="#" class="item youtube"><i class="fa fa-youtube"></i></a> <?php endif?>
                <?php if (config('pinterest')): ?><a href="#" class="item pinterest"><i class="fa fa-pinterest"></i></a> <?php endif?>
            </div>
            <div class="clearfix"></div>
        </div> 

    </div>
</div>
<!-- Container / End -->
