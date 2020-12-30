<!-- Titlebar
================================================== -->
<section id="titlebar">
    <div class="container">
        <div class="eight columns">
            <h2>Profile - <?php echo $user->firstname ?> <?php echo $user->lastname ?></h2>
        </div>
        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li><a href="#">Profile - <?php echo $user->firstname ?> <?php echo $user->lastname ?>  </a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- Content
================================================== -->
<div class="container">
    <!-- Sidebar
   ================================================== -->
    <div class="four columns">
        <div class="widget">
            <div class="sidebar-box">
                <div class="user">
                    <figure>
                        <?php if ($user->image): ?>
                            <img src="<?php echo base_url() ?>/cdn/users/<?php echo $user->image ?>" alt="<?php echo $user->username ?>">
                        <?php else: ?>
                            <img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo $user->username ?>">
                        <?php endif ?>
                    </figure>
                    <div class="usercontent">
                        <h3><?php echo $user->username ?></h3>
                        <h4><?php echo $user->usergroup ?></h4>
                    </div>
                </div>
                <nav class="navdashboard">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span> <?php echo $user->firstname ?> <?php echo $user->lastname ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-transgender"></i>
                                <span> <?php echo $user->gender ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <?php if ($user->email_appear == '1'): ?>
                                    <span> <?php echo $user->email ?></span>
                                <?php else: ?>
                                    <span>Hidden</span>
                                <?php endif ?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-flag"></i> From
                                <span> <?php echo $user->country ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon icon-themeenergy_soup2"></i>
                                <span> <?php echo $count ?> Recipes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar-check-o"></i> Member Since
                                <span> <?php echo date('M d, Y', strtotime($user->created)) ?></span>

                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-eye"></i> 
                                <span> <?php echo $user->visited ?> Profile Views</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="twelve columns ">
        <?php if ($user->description): ?>
            <div class="post-quote">
                <span class="icon"></span>
                <blockquote>
                    <?php echo $user->description ?>
                </blockquote>
            </div>
        <?php endif ?>
        <div class="inner-box">
            <div class="isotope">
                <?php foreach ($recipes as $recipe): ?>
                    <div class="four recipe-box columns">

                        <!-- Thumbnail -->
                        <div class="thumbnail-holder">
                            <a href="<?php echo site_url('recipe/' . urlencode($recipe->permalink)) ?>">
                                <img src="<?php echo base_url() ?>/cdn/recipes/<?php echo $recipe->featured_image ?>" alt="<?php echo $recipe->title ?>"/>
                                <div class="hover-cover"></div>
                                <div class="hover-icon"><i class="icon icon-themeenergy_eye2"></i> View Recipe</div>
                            </a>
                        </div>

                        <!-- Content -->
                        <div class="recipe-box-content">
                            <h3><a href="<?php echo site_url('recipe/' . urlencode($recipe->permalink)) ?>"><?php echo $recipe->title ?></a></h3>
                            <div class="rating five-stars">
                                <a href="<?php echo site_url('category/' . urlencode($recipe->category_permalink)) ?>"> <i class="fa fa-filter"></i> <?php echo $recipe->category_title ?></a>
                            </div>
                            <div class="recipe-meta">
                                <?php if (($recipe->difficulty) == 'easy'): ?><i class="ico i-easy"></i> <?php echo $recipe->difficulty ?><?php endif; ?>
                                <?php if (($recipe->difficulty) == 'medium'): ?><i class="ico i-medium"></i> <?php echo $recipe->difficulty ?><?php endif; ?>
                                <?php if (($recipe->difficulty) == 'hard'): ?><i class="ico i-hard"></i> <?php echo $recipe->difficulty ?><?php endif; ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endforeach; ?>  
            </div>
        </div>

    </div>

</div>
