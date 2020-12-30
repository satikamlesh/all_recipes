<!-- Titlebar
================================================== -->
<section id="titlebar">
    <div class="container">
        <div class="eight columns">
            <h2>My Recipe</h2>
        </div>
        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li><a href="#">My Recipes</a></li>
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
                            <a href="<?php echo site_url('dashboard') ?>">
                                <i class="fa fa-dashboard"></i>
                                <span> Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('profile/' . $user->user_id . '-' . permalink($user->username)) ?>">
                                <i class="fa fa-user"></i>
                                <span> My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('myrecipes') ?>">
                                <i class="icon icon-themeenergy_soup2"></i>
                                <span>My Recipes</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('myfavorites') ?>">
                                <i class="fa fa-heart"></i>
                                <span>My Favorites</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-power-off"></i>
                                <span> Delete My Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('account/logout') ?>">
                                <i class="fa fa-sign-out"></i>
                                <span> Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="twelve columns ">

        <div class="inner-box">
            <div class="dashboard-box">
                <h2 class="dashbord-title">My Recipes</h2>
                <a href="<?php echo site_url('myrecipe/manage') ?>" class="button color add_ingredient"><i class="fa fa-plus"></i> Add Recipe</a>
            </div>
            <div class="dashboard-wrapper">

                <table class="table table-responsive dashboardtable tablemyads">
                    <?php if ($recipes): ?>
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Ad Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($recipes as $recipe): ?> 
                                <tr data-category="active">

                                    <td class="photo"><img class="img-responsive" src="<?php echo base_url() ?>/cdn/recipes/<?php echo $recipe->featured_image ?>" alt=""></td>
                                    <td data-title="Title">
                                        <h3><?php echo $recipe->title ?></h3>
                                    </td>
                                    <td data-title="Category"><span class="adcategories"><?php echo $recipe->category_title ?></span></td>
                                    <td data-title="Ad Status">
                                        <?php if (($recipe->status) == 'active'): ?>
                                            <span class="adstatus adstatusactive"><?php echo $recipe->status ?></span>
                                        <?php elseif (($recipe->status) == 'inactive'): ?>
                                            <span class="adstatus adstatusexpired"><?php echo $recipe->status ?></span>

                                        <?php endif; ?>
                                    </td>
                                    <td data-title="Action">
                                        <div class="btns-actions">
                                            <a class="btn-action btn-view" href="<?php echo site_url('recipe/' . urlencode($recipe->permalink)) ?>"><i class="fa fa-eye"></i></a>
                                            <a class="btn-action btn-edit" href="<?php echo site_url('myrecipe/manage/' . $recipe->recipe_id) ?>"><i class="fa fa-pencil"></i></a>
                                            <a class="btn-action btn-delete" href="<?php echo site_url('myrecipe/delete/' . $recipe->recipe_id) ?>"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    <?php else: ?>
                        <div class="notification warning closeable">
                            <p>There is no recipes yet!!</p>
                        </div>
                    <?php endif ?>
                </table>
            </div>
        </div>

    </div>

</div>
