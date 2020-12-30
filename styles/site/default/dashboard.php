<!-- Titlebar
================================================== -->
<section id="titlebar">
    <div class="container">
        <div class="eight columns">
            <h2>Dashboard - <?php echo $item->firstname ?> <?php echo $item->lastname ?></h2>
        </div>
        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>You are here:</li>
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li><a href="#">Dashboard - <?php echo $item->firstname ?> <?php echo $item->lastname ?> </a></li>
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
                        <?php if ($item->image): ?>
                            <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" alt="<?php echo $item->username ?>">
                        <?php else: ?>
                            <img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo $item->username ?>">
                        <?php endif ?>
                    </figure>
                    <div class="usercontent">
                        <h3><?php echo $item->username ?></h3>
                        <h4><?php echo $item->usergroup ?></h4>
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
                            <a href="<?php echo site_url('profile/' . $item->user_id . '-' . permalink($item->username)) ?>">
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
        <?php if ($success) : ?>
            <div class="col-md-12">
                <div class="alert alert-success">
                    Your profile Updated Successfully
                    <i class="close-msg fa fa-times"></i>
                </div>
            </div>
        <?php endif ?>
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="notification error closeable">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif ?>
        <form method="post" class="edit-profile" enctype="multipart/form-data">
            <div class="col-md-12">
                <h3>  Public Profile</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" value="<?php echo set_value('firstname', $item->firstname) ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" value="<?php echo set_value('lastname', $item->lastname) ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Username </label>
                        <input type="text" name="username" value="<?php echo set_value('username', $item->username) ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email"> Email</label>  <?= form_checkbox('email_appear', 1, set_value('email_appear', $item->email_appear)) ?> Appear on my profile
                        <input type="email" name="email" value="<?php echo set_value('email', $item->email) ?>" disabled="">
                    </div>
                    <div class="selectform-group col-md-6">
                        <label for="country">Select Country</label>
                        <?php echo form_dropdown('country_id', $countries, set_value('country_id', $item->country_id), 'data-placeholder="Choose Country" class="chosen-select-no-single"') ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password"> Password</label>
                        <input type="password" name="password" >
                    </div> 
                    <div class="form-group col-sm-12">
                        <label>Description</label>
                            <textarea type="text" class="form-description" placeholder="Description" name="description"
                                      ><?php echo set_value('description', $item->description) ?></textarea>
                    </div>
                    <div class="form-group-separator"></div>
                    <div class="form-group col-md-12">
                        <label for="gender"> Gender</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="radio" value="male" name="gender"
                                       <?php if (set_value('gender', $item->gender) == 'male'): ?>checked="checked"<?php endif; ?>>male
                            </div>
                            <div class="col-sm-3">
                                <input type="radio" value="female" name="gender"
                                       <?php if (set_value('female', $item->gender) == 'female'): ?>checked="checked"<?php endif; ?>>female
                            </div>
                            <div class="col-md-6">
                                <label class="upload-btn">
                                    <input type="file" name="image">
                                    <i class="fa fa-upload"></i> Upload Profile Image
                                </label>
                                <?php if ($item->image): ?>
                                    <img src="<?php echo site_url() ?>/cdn/users/<?php echo $item->image ?>" class="img-upload"/>
                                <?php endif ?>
                            </div> 
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="submit" class="button color add_ingredient" value="Save">
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>
