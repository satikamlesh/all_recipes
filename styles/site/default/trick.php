<!-- Titlebar
================================================== -->
<section id="titlebar">
    <div class="container">
        <div class="eight columns">
            <h2><?php echo $item->title ?></h2>
        </div>
        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li><a href="<?php echo site_url('tricks') ?>">Tips & Tricks</a></li>
                    <li><?php echo $item->title ?></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Content
================================================== -->
<div class="container">

    <!-- Slider
    ================================================== -->
    <div class="eight columns" >
        <!-- Slider -->
        <div class="productSlider rsDefault">
            <img class="rsImg" src="<?php echo base_url() ?>/cdn/tricks/<?php echo $item->image ?>" alt="<?php echo $item->image ?>" />
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Content
    ================================================== -->
    <div class="eight columns">
        <div class="product-page">

            <!-- Headline -->
            <section class="title trick-title">
                <h2><?php echo $item->title ?></h2>
                <span class=""><i class="fa fa-clock-o"></i> <?php echo date('M d, Y ', strtotime($item->created)) ?></span>
                <span class=""><i class="fa fa-eye"></i> <?php echo $item->visits ?></span>
            </section>

            <!-- Text Parapgraph -->
            <section>
                <?php foreach (explode("\n", $item->description) as $i): ?>
                    <p class="margin-reset"> <?php echo $i ?></p>
                <?php endforeach; ?>

            </section>

            <section class="linking">
                <p class="share-links">Share it with: </p>
                <ul class="share-post">
                    <li><a href="#"  class="facebook-share">Facebook</a></li>
                    <li><a href="#"  class="twitter-share">Twitter</a></li>
                    <li><a href="#"  class="google-plus-share">Google Plus</a></li>
                    <li><a href="#"  class="pinterest-share">Pinterest</a></li>
                </ul>
                <div class="clearfix"></div>	

            </section>
        </div>
    </div>

</div>
<div class="clearfix"></div>
<div class="margin-top-50"></div>

