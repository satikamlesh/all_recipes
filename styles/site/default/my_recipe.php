<!-- Titlebar
================================================== -->
<section id="titlebar">
    <div class="container">
        <div class="eight columns">
            <h2>My Recipes</h2>
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
                <h2 class="dashbord-title">My Recipe</h2>
            </div>
            <div class="dashboard-wrapper">
                <div class="submit-recipe-form">
                    <?php if (validation_errors()) : ?>
                        <div class="col-md-12">
                            <div class="notification error closeable">
                                <?php echo validation_errors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($item->recipe_id) : ?>
                        <div class="form-group">
                            <label class="col-sm-2 ">Visits</label>
                            <div class="col-sm-2">
                                <p class="block-item"> <?php echo $item->visited ?></p>
                            </div>
                            <label class="col-sm-2 ">Created</label>
                            <div class="col-sm-2">
                                <p class="block-item"> <?php echo $item->created ?></p>
                            </div>
                            <label class="col-sm-2 ">Updated</label>
                            <div class="col-sm-2">
                                <p class="block-item">  <?php echo $item->updated ?></p>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                    <?php endif; ?>

                    <form method="post" enctype="multipart/form-data" class="recipe-form">
                        <div class="form-group">
                            <label class="col-sm-2">Category <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('category_id', dd2menu('categories', array('category_id' => 'title')), set_value('category_id', $item->category_id ? $item->category_id : '63'), 'class="chosen-select-no-single"') ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2" for="field-1"> Title <span class="required">*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="title" placeholder="Title" name="title"
                                       value="<?php echo set_value('title', $item->title) ?>">
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 " for="field-1"> Permalink <span class="required">*</span></label>

                            <div class="col-sm-10">
                                <input type="text" class="permalink" placeholder="Permalink" name="permalink"
                                       value="<?php echo set_value('permalink', $item->permalink) ?>">
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 " for="field-1"> Difficulty </label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="compose-message-editor col-sm-4">
                                        <input type="radio" value="easy" name="difficulty"
                                               <?php if (set_value('difficulty', $item->difficulty) == 'easy'): ?>checked="checked"<?php endif; ?>>
                                        <i class="ico i-easy"></i> Easy
                                    </div>
                                    <div class="compose-message-editor col-sm-4">
                                        <input type="radio" value="medium" name="difficulty"
                                               <?php if (set_value('difficulty', $item->difficulty) == 'medium'): ?>checked="checked"<?php endif; ?>>
                                        <i class="ico i-medium"></i>   Medium
                                    </div>
                                    <div class="compose-message-editor col-sm-4">
                                        <input type="radio" value="hard" name="difficulty"
                                               <?php if (set_value('difficulty', $item->difficulty) == 'hard'): ?>checked="checked"<?php endif; ?>>
                                        <i class="ico i-hard"></i> Hard
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 ">Prepare Time </label>
                            <div class="col-sm-4">
                                <input type="text" name="prepare_time"  placeholder="Prepare Time" value="<?php echo set_value('prepare_time', $item->prepare_time) ?>">
                                <br>
                            </div>

                            <label class="col-sm-2 ">Cooking Time </label>
                            <div class="col-sm-4">
                                <input type="text" name="cooking_time"  placeholder="Cooking Time" value="<?php echo set_value('cooking_time', $item->cooking_time) ?>">
                                <br>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 " for="field-1"> Serves</label>
                            <div class="col-sm-4">
                                <input type="number" placeholder="Serves" name="serves"
                                       value="<?php echo set_value('serves', $item->serves) ?>">
                            </div>
                            <label class="col-sm-2 " for="field-1"> Calories</label>
                            <div class="col-sm-4">
                                <input type="number" placeholder="Calories" name="calories"
                                       value="<?php echo set_value('calories', $item->calories) ?>">
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 ">Description <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-description" placeholder="Description" name="description"
                                          ><?php echo set_value('description', $item->description) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2" for="field-1"> Video link</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Video Link" name="video"
                                       value="<?php echo set_value('video', $item->video) ?>">
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 ">Directions <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-description" placeholder="Directions" name="directions"
                                          ><?php echo set_value('directions', $item->directions) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 ">Ingredients <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-description" placeholder="Ingredients" name="ingredients"
                                          ><?php echo set_value('ingredients', $item->ingredients) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 ">Meta Keywords</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-description" placeholder="Meta Keywords" name="meta_keywords"
                                          ><?php echo set_value('meta_keywords', $item->meta_keywords) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 ">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-description" placeholder="Meta Description" name="meta_description"
                                          ><?php echo set_value('meta_description', $item->meta_description) ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 " for="field-1"> Featured Image <span class="required">*</span></label>

                            <div class="col-sm-8">
                                <input type="file" name="featured_image" >
                            </div>
                            <div class="col-sm-2 text-right">
                                <?php if ($item->featured_image): ?>
                                    <img src="<?php echo base_url() ?>/cdn/recipes/<?php echo $item->featured_image ?>" class="img-inline recipe-fet-img"/>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="portlet light bordered form-group">
                            <div class="portlet-title col-sm-2 ">
                                <div id="advancedDropzone" class="droppable-area">
                                    <label class="upload-btn">
                                        <input type="file" name="gallery[]" multiple id="gallery" onchange="imagesUpdate(this)"  />
                                        <i class="fa fa-upload"></i> Upload
                                    </label>
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                </div>
                            </div>

                            <div class="col-sm-10">
                                <table class="table table-bordered table-striped" id="example-dropzone-filetable">
                                    <thead>
                                        <tr>
                                            <th>Uploaded Recipe Images</th>
                                        </tr>
                                    </thead>
                                    <tbody class="gallery gallery_sortable" >
                                        <?php if ($images = $this->input->post("gallery") or $images = json_decode($item->gallery)): ?>
                                            <?php foreach ($images as $img): ?>
                                                <tr id="<?php echo $img ?>">
                                                    <td>
                                                        <img src="<?php echo site_url() ?>cdn/recipes/<?php echo $img ?>" />
                                                        <input type="hidden" name="gallery[]" value="<?php echo $img ?>" />
                                                        <button type="button" onclick="imagesRemoveItem(this)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr class="no-images"><td>No photos uploaded yet!</td></tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 "></label>

                            <div class="col-sm-10">
                                <input type="submit" class="button color big" name="submit" value="Submit">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

<script>
    $(".title").change(function () {
        $.post("<?php echo site_url("myrecipe/permalink") ?>", {permalink: $(this).val()}, function (res) {
            $(".permalink").val(res);
        });
    });

    var featuredImageUpdate = function (input) {
        if (!$(".gallery img").length) {
            $(".gallery").html("<img src='' style='width: 100%' />");
        }
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(".gallery img").attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    };

    $(function () {
        $(".gallery_sortable").sortable();
        $(".gallery_sortable").disableSelection();
    });


    var imagesUpdate = function (that) {
        if (!$(".gallery_sortable tr td").length) {
            $(".gallery_sortable").html("");
        }

        data = new FormData();
        $(that.files).each(function (i, x) {
            data.append('file[]', x);
        });


        $.ajax({
            url: "<?php echo site_url() ?>myrecipe/image_upload",
            type: "POST",
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data'
        }).done(function (res) {
            res = JSON.parse(res);
            if (res.error == true)
                console.log(res.message);
            else {
                $(res.files).each(function (i, x) {
                    console.log(x);
                    $(".gallery_sortable").append('<tr id="' + x + '">'
                            + '<td>'
                            + '    <img src="<?php echo site_url() ?>cdn/recipes/' + x + '" />'
                            + '    <input type="hidden" name="gallery[]" value="' + x + '" />'
                            + '    <button type="button" onclick="imagesRemoveItem(this)" class="btn btn-danger"><i class="fa fa-trash"></i></button>'
                            + '</td>'
                            + '</tr>'
                            );
                });
            }
        });
    };

    var imagesRemoveItem = function (item) {
        $(item).parent().parent().remove();
    };
</script>


<style>

    .gallery{
        cursor: pointer;
    }
    .gallery_sortable tr{
        height: 100px;
        width: 100%;
        text-align: left;
        position: relative;
        display: block;
    }
    .gallery_sortable .no-images{
        height: 50px;
    }
    .gallery_sortable tr img{
        height: 60px;
        line-height: 80px;
        float: left;
        margin-top: 10px;
        margin-left: 10px;

    }
    .gallery_sortable tr button,
    .gallery_sortable tr button:focus:active, 
    .gallery_sortable tr button:hover:active,
    .gallery_sortable tr button:active{
        position: absolute;
        line-height: 1.44;
        right: 10px;
        top: 20px;
        z-index: 99;
    }
    .droppable-area{
        position: relative;
    }

    .gallery_sortable tr button {
        height: 30px;
        width: 30px;
        line-height: 19px !important;
        text-align: center;
        padding: 0;
        border-radius: 3px;
        margin-top: 15px;
        margin-right: 15px;
    }
    .gallery_sortable tr td {
        width: 100%;
        display: block;
        border: 0 !important;
        float: left;
    }
</style>