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
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i>Home</a>
            </li>
            <li class="active">
                <strong>Category </strong>
            </li>
        </ol>

    </div>

</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Category</h3>
    </div>
    <div class="panel-body">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif ?>
        <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Category Icon <span class="required">*</span></label>
                <div class="col-sm-10">
                    <div class="col-sm-10">
                        <?php foreach (dd2menu('icons', array('icon_id' => 'icon'), FALSE, TRUE, array('icons.icon' => 'ASC')) as $key => $value): ?>
                            <label class="col-sm-2">
                                <?php echo form_radio("icon_id", $key, set_radio('icon_id', $key, $item->icon_id == $key ? TRUE : FALSE)) ?> <i class="be-icon <?php echo $value ?>"></i>
                            </label>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Category Name <span class="required">*</span></label>

                <div class="col-sm-10">
                    <input type="text" class="form-control title" placeholder="Category Name" name="title"
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
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Submit">
                    <a href="<?php echo site_url('admin/categories/index'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(".title").change(function () {
        $.post("<?php echo site_url("admin/categories/permalink") ?>", {permalink: $(this).val()}, function (res) {
            $(".permalink").val(res);
        });
    });
</script>
