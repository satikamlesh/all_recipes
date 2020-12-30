<!-- Titlebar
================================================== -->
<section id="titlebar">
    <div class="container">
        <div class="eight columns">
            <h2>Tips and Tricks</h2>
        </div>
        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li><a href="#">Tips & Tricks</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- Content
================================================== -->
<div class="container">
    <div class="twelve columns ">
        <div class="list-style">
            <?php foreach ($items as $item): ?> 
                <div class="four recipe-box columns">
                    <!-- Thumbnail -->
                    <div class="thumbnail-holder">
                        <a href="<?php echo site_url('tricks/trick/' . urlencode($item->permalink)) ?>">
                            <img src="<?php echo base_url() ?>/cdn/tricks/<?php echo $item->image ?>" alt="<?php echo $item->title ?>"/>
                      <div class="hover-cover"></div>
						<div class="hover-icon">Read more</div>
                        </a>
                    </div>
                    <!-- Content -->
                    <div class="recipe-box-content">
                        <h3><a href="<?php echo site_url('tricks/trick/' . urlencode($item->permalink)) ?>"><?php echo $item->title ?></a></h3>

                        <p><?php echo $item->short_description ?></p>

                        <div class="meta-alignment">
                            <div class="recipe-meta"><i class="fa fa-clock-o"></i> <?php echo date('M d, Y ', strtotime($item->created)) ?></div>
                            <div class="recipe-meta"><i class="fa fa-eye"></i> <?php echo $item->visits ?></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <?php endforeach; ?> 
        </div>
        <div class="clearfix"></div>
        <!-- Pagination -->
        <div class="pagination-container">
            <ul class="pagination">
                <?php echo $pagination ?>
            </ul>

        </div>
    </div>
    <!-- Sidebar
    ================================================== -->
    <div class="four columns">
        <!-- Share -->
        <div class="widget">
            <h4 class="headline">Our Fans</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>
             <div id="social_counts" class="square">
                 <?php if (config('facebook')): ?><a href="#" class="item facebook"><i class="fa fa-facebook"></i></a> <?php endif?>
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
<div class="margin-top-5"></div>

