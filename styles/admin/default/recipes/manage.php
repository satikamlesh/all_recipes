
<div class="page-title">

    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i> Home</a>
            </li>
            <li class="active">
                <strong>Recipe</strong>
            </li>
        </ol>

    </div>

</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Recipe</h3>
    </div>
    <div class="panel-body">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif; ?>
        <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
          
            <div class="form-group">
                <label class="col-sm-2 control-label">Category <span class="required">*</span></label>
                <div class="col-sm-10">
                    <?php echo form_dropdown('category_id', dd2menu('categories', array('category_id' => 'title')), set_value('category_id', $item->category_id ? $item->category_id : '63'), 'class="form-control s2example-1"') ?>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Title <span class="required">*</span></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control title" placeholder="Title" name="title"
                           value="<?php echo set_value('title', $item->title) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Permalink <span class="required">*</span></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control permalink" placeholder="Permalink" name="permalink"
                           value="<?php echo set_value('permalink', $item->permalink) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Difficulty </label>
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
                <label class="col-sm-2 control-label">Prepare Time </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="prepare_time"  placeholder="Prepare Time" value="<?php echo set_value('prepare_time', $item->prepare_time) ?>">
                    <br>
                </div>

                <label class="col-sm-2 control-label">Cooking Time </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="cooking_time"  placeholder="Cooking Time" value="<?php echo set_value('cooking_time', $item->cooking_time) ?>">
                    <br>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Serves</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="Serves" name="serves"
                           value="<?php echo set_value('serves', $item->serves) ?>">
                </div>
                <div class="col-sm-1">
                    <p>People</p>
                    <br>
                </div>
                <label class="col-sm-2 control-label" for="field-1"> Calories</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" placeholder="Calories" name="calories"
                           value="<?php echo set_value('calories', $item->calories) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Description <span class="required">*</span></label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control form-description" placeholder="Description" name="description"
                              ><?php echo set_value('description', $item->description) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Directions <span class="required">*</span></label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control form-description" placeholder="Directions" name="directions"
                              ><?php echo set_value('directions', $item->directions) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ingredients <span class="required">*</span></label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control form-description" placeholder="Ingredients" name="ingredients"
                              ><?php echo set_value('ingredients', $item->ingredients) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Meta Keywords</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control form-description" placeholder="Meta Keywords" name="meta_keywords"
                              ><?php echo set_value('meta_keywords', $item->meta_keywords) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Meta Description</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control form-description" placeholder="Meta Description" name="meta_description"
                              ><?php echo set_value('meta_description', $item->meta_description) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Visits</label>
                <div class="col-sm-2">
                    <p class="form-control"> <?php echo $item->visited ?></p>
                </div>
                <label class="col-sm-2 control-label">Created</label>
                <div class="col-sm-2">
                    <p class="form-control"> <?php echo $item->created ?></p>
                </div>
                <label class="col-sm-2 control-label">Updated</label>
                <div class="col-sm-2">
                    <p class="form-control">  <?php echo $item->updated ?></p>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Recipe Status</label>

                <div class="compose-message-editor col-sm-10">
                    <input type="radio" value="active" name="status"
                           <?php if (set_value('status', $item->status) == 'active'): ?>checked="checked"<?php endif; ?>>
                    Active <br/>
                    <input type="radio" value="inactive" name="status"
                           <?php if (set_value('status', $item->status) == 'inactive'): ?>checked="checked"<?php endif; ?>> in-active 
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Video Link <span class="required">*</span></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Video Link" name="video"
                           value="<?php echo set_value('video', $item->video) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Featured Image <span class="required">*</span></label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="featured_image" >
                </div>
                <div class="col-sm-2 text-right">
                    <?php if ($item->featured_image): ?>
                        <img src="<?php echo base_url() ?>/cdn/recipes/<?php echo $item->featured_image ?>" class="img-inline userpic-32" height="32"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="portlet light bordered form-group">
                <div class="portlet-title col-sm-2 control-label">
                    <label class=""> Recipe Images </label>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div id="advancedDropzone" class="droppable-area">
                        Drop Image Here
                        <input type="file" name="gallery[]" multiple id="gallery" onchange="imagesUpdate(this)"  />
                    </div>
                </div>
                <div class="col-sm-7">
                    <table class="table table-bordered table-striped" id="example-dropzone-filetable">
                        <thead>
                            <tr>
                                <th>Uploaded Images</th>
                            </tr>
                        </thead>
                        <tbody class="gallery gallery_sortable" >
                            <?php if ($images = $this->input->post("gallery") or $images = json_decode($item->gallery)): ?>
                                <?php foreach ($images as $img): ?>
                                    <tr id="<?php echo $img ?>">
                                        <td>
                                            <img src="<?php echo site_url() ?>/cdn/recipes/<?php echo $img ?>" />
                                            <input type="hidden" name="gallery[]" value="<?php echo $img ?>" />
                                            <button type="button" onclick="imagesRemoveItem(this)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr class="no-images"><td>No Images Here !</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>

            </div>

            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Submit">
                    <a href="<?php echo site_url('admin/recipes/index'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(".title").change(function () {
        $.post("<?php echo site_url("admin/recipes/permalink") ?>", {permalink: $(this).val()}, function (res) {
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
            url: "<?php echo site_url() ?>admin/recipes/image_upload",
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
                            + '    <img src="<?php echo site_url() ?>/cdn/recipes/' + x + '" />'
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
    .droppable-area input {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        width: 100%;
        cursor: pointer;
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