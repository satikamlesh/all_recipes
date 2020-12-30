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
                <strong>Users</strong>
            </li>
        </ol>

    </div>

</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> Users</h3>
        <div class="panel-options">
            <a href="<?php echo site_url('admin/users/manage'); ?>" class="btn btn-secondary btn-sm" style="color:#fff"><i class="fa fa-user-plus" aria-hidden="true"></i>  Add</a>
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> Name</th>
                        <th> Usergroup</th>
                        <th> Status</th>
                        <th> Created</th>
                        <th> Views</th>
                        <th> Operation</th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td>
                                <?php if ($item->image): ?>
                                    <img src="<?php echo base_url() ?>/cdn/users/<?php echo $item->image ?>" class="img-circle img-inline userpic-32" width="28" /> 
                                <?php else: ?>
                                    <img src="<?php echo base_url() ?>/cdn/users/default.png" class="img-circle img-inline userpic-32" width="28" >
                                <?php endif ?>
                                <?php echo $item->username ?>
                            </td>
                            <td><?php echo $item->usergroup ?></td>                           

                            <?php if ($item->status == 'active'): ?>
                                <td><button class="btn btn-success btn-sm"><?php echo $item->status ?></button></td>
                            <?php else: ?>
                                <td><button class="btn btn-dart btn-sm"><?php echo $item->status ?></button></td>
                            <?php endif ?>
                           <td><?php echo $item->created ?></td>  
                           <td><?php echo $item->visited ?></td>  
                            <td>
                                <a href="<?php echo site_url('admin/users/manage/' . $item->user_id); ?>" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Edit
                                </a>

                                <a href="<?php echo site_url('admin/users/delete/' . $item->user_id); ?>" class="btn btn-danger btn-sm">
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
