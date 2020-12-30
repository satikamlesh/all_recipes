
<!-- Recipe Background -->
<div class="recipeBackground">
    <img src="<?php echo STYLE_IMAGES ?>/recipeBackground.jpg" alt="" />
</div>

<!-- Content
================================================== -->
<div class="container" itemscope itemtype="http://schema.org/Recipe">

    <!-- Recipe -->
    <div class="twelve columns">
        <div class="alignment">

            <!-- Header -->
            <section class="recipe-header">
                <div class="title-alignment">
                    <h2><?php echo $item->title ?></h2>
                    <div class="recipe-cat">
                        <a href="<?php echo site_url('category/' . urlencode($item->category_permalink)) ?>"> <i class="fa fa-filter"></i> <?php echo $item->category_title ?></a>
                        <span> <i class="fa fa-eye"></i> <?php echo $item->visited ?></span>
                    </div>
                </div>
            </section>

            <!-- Slider -->
            <div class="recipeSlider rsDefault">
                <?php if (json_decode($item->gallery)): ?>
                    <?php foreach (json_decode($item->gallery) as $img): ?>
                        <img itemprop="image" class="rsImg" src="<?php echo base_url() ?>/cdn/recipes/<?php echo $img ?>" alt="<?php echo $item->title ?>" />
                    <?php endforeach; ?>
                <?php else: ?>
                    <img itemprop="image" class="rsImg" src="<?php echo base_url() ?>/cdn/recipes/<?php echo $item->featured_image ?>" alt="<?php echo $item->title ?>" />
                <?php endif; ?>
            </div>
            <!-- Details -->
            <section class="recipe-details" itemprop="nutrition">
                <ul>
                    <li>Serves: <strong itemprop="recipeYield"><?php echo $item->serves ?> People</strong></li>
                    <li>Prep Time: <strong itemprop="prepTime"><?php echo $item->prepare_time ?></strong></li>
                    <li>Cooking: <strong itemprop="cookTime"><?php echo $item->cooking_time ?></strong></li>
                    <li>Calories: <strong itemprop="calories"><?php echo $item->calories ?></strong></li>
                    <li>Difficulty: <strong itemprop="calories"><?php echo $item->difficulty ?></strong></li>
                </ul>
                <a href="#" class="print" onclick="window.print();"><i class="fa fa-print"></i> Print</a>
                <div class="clearfix"></div>
            </section>
            <!-- Text -->
            <p itemprop="description"><?php echo nl2br($item->description) ?></p>
            <?php if ($item->video): ?>
                <div class="recipe-video">
                    <iframe width="100%" height="100%" src="<?php echo str_replace('watch?v=', 'embed/', $item->video); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endif ?>
            <!-- Ingredients -->
            <h3>Ingredients</h3>
            <ul class="ingredients" id="ingredients-list">
                <?php foreach (explode("\n", $item->ingredients) as $i): ?>
                    <li>
                        <input type="checkbox" name="check">
                        <label itemprop="ingredients"><?php echo $i ?></label>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- Directions -->
            <h3>Directions</h3>
            <ol class="directions" itemprop="recipeInstructions">
                <?php foreach (explode("\n", $item->directions) as $i): ?>
                    <li ><?php echo $i ?></li>
                <?php endforeach; ?>
            </ol>
            <!-- Share Post -->
            <ul class="share-post">
                <li><a href="#" class="facebook-share">Facebook</a></li>
                <li><a href="#" class="twitter-share">Twitter</a></li>
                <li><a href="#" class="google-plus-share">Google Plus</a></li>
                <li><a href="#" class="pinterest-share">Pinterest</a></li>
            </ul>
            <div class="clearfix"></div>

            <div class="margin-bottom-40"></div>

            <!-- Headline -->
            <h3 class="headline">You may also like</h3>
            <span class="line margin-bottom-35"></span>
            <div class="clearfix"></div>

            <div class="related-posts">
                <?php foreach ($related_items as $item): ?>

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
                            <h3><a href="<?php echo site_url('recipe/' . urlencode($item->permalink)) ?>">
                                    <?php $this->load->helper('text') ?>
                                    <?php echo character_limiter($item->title, 40) ?>
                                </a></h3>
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

            <div class="margin-top-15"></div>

            <!-- Add Comment
            ================================================== -->
            <!-- <h3 class="headline">Add Your Comment</h3><span class="line margin-bottom-35"></span><div class="clearfix"></div>
            Add Comment Form
            <div class="fb-comments" data-href="<?php //echo current_url() ?>" data-numposts="5" width="100%"></div> -->
        </div>
    </div>

    <!-- Sidebar
    ================================================== -->
    <div class="four columns">

        <!-- Search Form -->
        <div class="widget search-form">
            <nav class="search">
                <form action="<?php echo site_url('recipes/search') ?>" method="get">
                    <button><i class="fa fa-search"></i></button>
                    <input class="search-field" type="text" placeholder="Search for recipes" name="title" value="<?php echo set_value('title') ?>"/>
                </form>
            </nav>
            <div class="clearfix"></div>
        </div>
        <div class="widget">
            <div class="author-box">
                <a href="<?php echo site_url('profile/' . $user->user_id . '-' . permalink($user->username)) ?>">
                    <span class="title">Author</span>
                    <span class="name"><?php echo $user->username ?></span>
                     <?php if ($user->email_appear == '1'): ?>
                    <span class="contact"><?php echo $user->email ?></span>
                    <?php endif ?>
                    <img src="<?php echo base_url() ?>/cdn/users/<?php echo $user->image ?>" alt="<?php echo $user->username ?>">
                </a>
                <p><?php echo $user->description ?></p>
            </div>
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
                            <span><i class="fa fa-clock-o"></i> <?php echo $item->cooking_time ?></span>                      
                        </div>
                    </div>
                    <div class="post-icon"></div>
                </a>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        </div>

        <!-- Popular Recipes -->
        <div class="widget">
            <h4 class="headline">Stay With US</h4>
            <span class="line margin-bottom-30"></span>
            <div class="clearfix"></div>

             <div id="social_counts" class="square">
                 <?php if (config('facebook')): ?><a href="#" class="item facebook" ><i class="fa fa-facebook"></i></a> <?php endif?>
                 <?php if (config('twitter')): ?><a href="#" class="item twitter"><i class="fa fa-twitter"></i></a> <?php endif?>
                 <?php if (config('instagram')): ?><a href="#" class="item instagram"><i class="fa fa-instagram"></i></a> <?php endif?>
                 <?php if (config('google_plus')): ?><a href="#" class="item google"><i class="fa fa-google-plus"></i></a> <?php endif?>
                 <!-- <?php //if (config('dribbble')): ?><a href="<?php //echo config('dribbble') ?>" class="item dribbble" target="_blank"><i class="fa fa-dribbble"></i></a> <?php //endif?> -->
                 <?php if (config('youtube')): ?><a href="#" class="item youtube" ><i class="fa fa-youtube"></i></a> <?php endif?>
                 <!-- <?php //if (config('tumblr')): ?><a href="<?php //echo config('tumblr') ?>" class="item tumblr" target="_blank"><i class="fa fa-tumblr"></i></a> <?php //endif?>
                 <?php //if (config('vine')): ?><a href="<?php //echo config('vine') ?>" class="item vine" target="_blank"><i class="fa fa-vine"></i></a> <?php //endif?> -->
                 <?php if (config('pinterest')): ?><a href="#" class="item pinterest"><i class="fa fa-pinterest"></i></a> <?php endif?>
                 <!-- <?php //if (config('soundcloud')): ?><a href="<?php //echo config('soundcloud') ?>" class="item soundcloud" target="_blank"><i class="fa fa-soundcloud"></i></a> <?php //endif?>
                 <?php //if (config('vimeo')): ?><a href="<?php //echo config('vimeo') ?>" class="item vimeo" target="_blank"><i class="fa fa-vimeo"></i></a> <?php //endif?>
                 <?php //if (config('behance')): ?><a href="<?php //echo config('behance') ?>" class="item behance" target="_blank"><i class="fa fa-behance"></i></a> <?php //endif?> -->
            </div>

            <div class="clearfix"></div>
        </div>

        <!-- <div class="widget">
            <div class="side-ads">
                <?php //echo ads(6) ?>
            </div>
        </div> -->
    </div>
</div>
