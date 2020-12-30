
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
                <strong>Recipes</strong>
            </li>
        </ol>

    </div>

</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> Recipes</h3>
        <div class="panel-options">
            <a href="<?php echo site_url('admin/recipes/manage'); ?>" class="btn btn-secondary btn-sm" style="color:#fff"><i class="fa fa-plus-square" aria-hidden="true"></i> Add</a>
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>

                        <th>Category </th>
                        <th>Title</th>
                        <th>Published By</th>
                        <th>Status</th>
                        <th>Operations</th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?php echo $item->category ?></td>
                            <td><?php echo $item->title ?></td>
                            <td><?php echo $item->username ?></td>
                             <?php if ($item->status == 'active'): ?>
                                <td><button class="btn btn-success btn-sm"><?php echo $item->status ?></button></td>
                            <?php else: ?>
                                <td><button class="btn btn-dart btn-sm"><?php echo $item->status ?></button></td>
                            <?php endif ?>
                            <td>
                                <a href="<?php echo site_url('admin/recipes/manage/' . $item->recipe_id); ?>" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Edit
                                </a>

                                <a href="<?php echo site_url('admin/recipes/delete/' . $item->recipe_id); ?>" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php echo $pagination ?>
    </div>
</div>
