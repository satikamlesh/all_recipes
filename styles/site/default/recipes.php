<!-- Titlebar
================================================== -->
<section id="titlebar" class="browse-all">
    <div class="container">
        <div class="eight columns">
            <h2>Browse Recipes</h2>
        </div>

    </div>
</section>
<div class="advanced-search-container">
    <div class="container">
        <div class="sixteen columns">
            <div id="advanced-search">
                <form action="<?php echo site_url('recipes/search') ?>" method="get">
                    <!-- Choose Category -->
                    <div class="select">
                        <label>Choose category</label>
                        <?php echo form_dropdown('category_id', $categories, set_value('category_id'), ' class="chosen-select-no-single"') ?>
                        <!-- Search Input -->
                    </div>
                    <div class="select included-ingredients">
                        <div class="search-by-keyword">
                            <button type="submit"><span>Search for Recipes</span><i class="fa fa-search"></i></button>
                            <input class="search-field" type="text" name="title" value="<?php echo set_value('title') ?>" placeholder="Search by keyword"/>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="margin-top-35"></div>

<!-- Container -->
<div class="container">
    <div class="home-cats recipes-categories">
        <?php foreach ($categories_side as $item): ?> 
            <a class="" href="<?php echo site_url('category/' . urlencode($item->permalink)) ?>">
                <i class="<?php echo $item->icon ?>"></i>
                <?php echo $item->title ?>
            </a>
        <?php endforeach; ?>
    </div>
    <!-- Headline -->
    <div class="sixteen columns">
        <h3 class="headline">All Recipes</h3>
        <span class="line margin-bottom-35"></span>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <!-- Isotope -->
    <div class="isotope">
        <?php foreach ($items as $item): ?>
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
                    <h5 class="author-recipe">
                        <a href="<?php echo site_url('profile/' . $item->user_id . '-' . permalink($item->username)) ?>" title="<?php echo $item->username ?>">
                            <span>
                                <?php if ($item->image): ?>
                                    <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" alt="<?php echo $item->username ?>">
                                <?php else: ?>
                                    <img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo $item->username ?>">
                                <?php endif ?>
                            </span>
                            <?php echo $item->username ?>
                        </a>
                    </h5>
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
    <!-- Pagination -->
    <div class="sixteen columns">
        <div class="pagination-container">
            <ul class="pagination">
                <?php echo $pagination ?>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="footer-ads">
        <?php echo ads(3) ?>
    </div>
</div>
