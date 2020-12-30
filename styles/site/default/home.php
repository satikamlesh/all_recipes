<style type="text/css">
    .recipe-box a img {
    display: block;
    position: relative;
    width: 100%;
    height: 271px;
}
</style>

<div class="sixteen columns">
    <div id="homeSliderAlt" class="royalSlider homeSliderAlt rsDefault">
        <?php foreach ($sliders as $item): ?> 
            <div class="rsContent">
                <a class="rsImg" href="<?php echo base_url() ?>/cdn/sliders/<?php echo $item->image ?>">
                    <div class="rsTmb">
                        <h5><?php echo $item->recipe_title ?></h5>
                    </div>
                </a>
                <div class="SlideTitleContainer rsABlock">
                    <div class="CaptionAlignment">
                        <h2 class="rsSlideTitle title"><a href="<?php echo site_url('recipe/' . urlencode($item->recipe_permalink)) ?>"><?php echo $item->recipe_title ?></a></h2>
                        <div class="rsSlideTitle details">
                            <ul>
                                <li><i class="fa fa-cutlery"></i> <?php echo $item->recipe_serves ?> Servings</li>
                                <li><i class="fa fa-clock-o"></i> <?php echo $item->recipe_cooking_time ?></li>
                                <li><i class="fa fa-user"></i> by <a href="<?php echo site_url('profile/' . $item->user_id . '-' . permalink($item->username)) ?>"><?php echo $item->username ?></a></li>
                            </ul>
                        </div>
                        <a href="<?php echo site_url('recipe/' . urlencode($item->recipe_permalink)) ?>" class="rsSlideTitle button">View Recipe</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>
<div class="advanced-search-container search-home">
    <div class="container">
        <div id="advanced-search row">
            <form action="<?php echo site_url('recipes/search') ?>" method="get">
                <!-- Choose Category -->
                <div class="col-md-4">
                    <div class="select">
                        <?php echo form_dropdown('category_id', $cats, set_value('category_id'), ' class="chosen-select-no-single"') ?>
                        <!-- Search Input -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="select included-ingredients">
                        <div class="search-by-keyword">
                            <button type="submit"><span>Search for Recipes</span><i class="fa fa-search"></i></button>
                            <input class="search-field" type="text" name="title" value="<?php echo set_value('title') ?>" placeholder="Search by keyword"/>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- Page Content
     ================================================== -->
<div class="container">

    <!-- Latest Recipes -->
    <div class="twelve columns">

        <!-- Headline -->
        <h3 class="headline">Latest Recipes</h3>
        <span class="line rb margin-bottom-35"></span>
        <div class="clearfix"></div>

        <!-- Isotope -->
        <div class="isotope" id="results">
            <?php foreach ($latest_recipes as $item): ?>
                <!-- Recipe Block -->
                <div class="four recipe-box columns">

                    <!-- Thumbnail -->
                    <div class="thumbnail-holder">
                        <a href="<?php echo site_url('recipe/' . urlencode($item->permalink)) ?>">
                            <img src="<?php echo base_url() ?>/cdn/recipes/<?php echo $item->featured_image ?>" alt="<?php echo $item->title ?>"/>
                            <div class="hover-cover"></div>
                            <div class="hover-icon"><i class="icon icon-themeenergy_eye2"></i> View Recipe</div>
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="recipe-box-content">
                        <h3><a href="<?php echo site_url('recipe/' . urlencode($item->permalink)) ?>"><?php echo $item->title ?></a></h3>
                        <h5 class="author-recipe"> <a href="<?php echo site_url('profile/' . $item->user_id . '-' . permalink($item->username)) ?>"><span><img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>"></span><?php echo $item->username ?></a></h5>
                        <div class="rating five-stars">
                            <a href="<?php echo site_url('category/' . urlencode($item->category_permalink)) ?>"> <i class="fa fa-filter"></i> <?php echo $item->category_title ?></a>
                        </div>
                        <div class="recipe-meta">
                            <?php if (($item->difficulty) == 'easy'): ?><i class="ico i-easy"></i> <?php echo $item->difficulty ?><?php endif; ?>
                            <?php if (($item->difficulty) == 'medium'): ?><i class="ico i-medium"></i> <?php echo $item->difficulty ?><?php endif; ?>
                            <?php if (($item->difficulty) == 'hard'): ?><i class="ico i-hard"></i> <?php echo $item->difficulty ?><?php endif; ?>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            <?php endforeach; ?>    
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Sidebar
    ================================================== -->
    <div class="four columns">

        <!-- Tips and Tricks -->
        <div class="widget">
            <h4 class="headline">Tips and Tricks</h4>
            <span class="line margin-bottom-20"></span>
            <div class="clearfix"></div>

            <ul class="categories">
                <?php foreach ($tricks as $item): ?> 
                    <li><a href="<?php echo site_url('trick/' . urlencode($item->permalink)) ?>"><?php if (strlen($item->title) > 35): ?> <?php echo substr($item->title, 0, 35) . ".."; ?> <?php else: ?> <?php echo $item->title; ?> <?php endif ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Categories -->
        <div class="widget">
            <h4 class="headline">Categories</h4>
            <span class="line margin-bottom-20"></span>
            <div class="clearfix"></div>
            <div class="home-cats categories">
                <?php foreach ($categories as $item): ?> 
                    <a class="" href="<?php echo site_url('category/' . urlencode($item->permalink)) ?>">
                        <i class="<?php echo $item->icon ?>"></i>
                        <?php echo $item->title ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- <div class="widget">
            <h4 class="headline">Advertisement</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>
            <div class="side-ads">
                <?php //echo ads(5) ?>

            </div>
        </div> -->
        <!-- Popular Recipes -->
        <div class="widget">
            <h4 class="headline">Popular Recipes</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>
            <?php foreach ($popular_recipes as $item): ?>
                <a href="<?php echo site_url('recipe/' . urlencode($item->permalink)) ?>" class="featured-recipe">
                    <img src="<?php echo base_url() ?>/cdn/recipes/<?php echo $item->featured_image ?>" alt="<?php echo $item->title ?>"/>
                    <div class="featured-recipe-content">
                        <h4><?php echo $item->title ?></h4>

                        <div class="recipe-det">
                            <span><i class="fa fa-cutlery"></i> <?php echo $item->serves ?> Servings</span>
                            <!--<span><i class="fa fa-clock-o"></i> <?php echo $item->cooking_time ?></span>-->                      
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        </div>
        <div class="widget members">
            <h4 class="headline">Most Popular Authors</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>
            <ul class="boxed">
                <?php foreach ($popular_authors as $item): ?>
                    <li>
                        <a href="<?php echo site_url('profile/' . $item->user_id . '-' . permalink($item->username)) ?>" title="<?php echo $item->username ?>">
                            <?php if ($item->image): ?>
                                <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" alt="<?php echo $item->username ?>">
                            <?php else: ?>
                                <img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo $item->username ?>">
                            <?php endif ?>

                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="post-icon"></div>
        </div>
        <!-- Share -->
        <div class="widget">
            <h4 class="headline">Our Fans</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>
            <div id="social_counts" class="square">
                <?php if (config('facebook')): ?><a href="#" class="item facebook" ><i class="fa fa-facebook"></i></a> <?php endif ?>
                <?php if (config('twitter')): ?><a href="#" class="item twitter"><i class="fa fa-twitter"></i></a> <?php endif ?>
                <?php if (config('instagram')): ?><a href="#" class="item instagram"><i class="fa fa-instagram"></i></a> <?php endif ?>
                <?php if (config('google_plus')): ?><a href="#" class="item google"><i class="fa fa-google-plus"></i></a> <?php endif ?>
                <!-- <?php //if (config('dribbble')): ?><a href="#" class="item dribbble"><i class="fa fa-dribbble"></i></a> <?php //endif ?> -->
                <?php if (config('youtube')): ?><a href="#" class="item youtube" ><i class="fa fa-youtube"></i></a> <?php endif ?>
                <!-- <?php //if (config('tumblr')): ?><a href="<?php //echo config('tumblr') ?>" class="item tumblr" target="_blank"><i class="fa fa-tumblr"></i></a> <?php //endif ?> -->
                <!-- <?php //if (config('vine')): ?><a href="#" class="item vine" ><i class="fa fa-vine"></i></a> <?php //endif ?> -->
                <?php if (config('pinterest')): ?><a href="#" class="item pinterest" ><i class="fa fa-pinterest"></i></a> <?php endif ?>
               <!--  <?php //if (config('soundcloud')): ?><a href="#" class="item soundcloud"><i class="fa fa-soundcloud"></i></a> <?php //endif ?>
                <?php //if (config('vimeo')): ?><a href="#" class="item vimeo"><i class="fa fa-vimeo"></i></a> <?php //endif ?>
                <?php //if (config('behance')): ?><a href="#" class="item behance"><i class="fa fa-behance"></i></a> <?php //endif ?> -->
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- <div class="widget">
            <h4 class="headline">Advertisement</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>
            <div class="side-ads">
                <?php //echo ads(5) ?>

            </div>
        </div> -->
    </div>
</div>

<!-- <div class="container">
    <div class="footer-ads">
        <?php //echo ads(1) ?>

    </div>
</div> -->
