<div class="headerbar">
    <h1><?php echo lang('invoice_groups'); ?></h1>

    <div class="pull-right">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('invoice_groups/form'); ?>"><i
                class="fa fa-plus"></i> <?php echo lang('new'); ?></a>
    </div>

    <div class="pull-right">
        <?php echo pager(site_url('invoice_groups/index'), 'mdl_invoice_groups'); ?>
    </div>

</div>

<div class="table-content">

    <?php $this->layout->load_view('layout/alerts'); ?>

    <div class="table-responsive">
        <table class="table table-striped">

            <thead>
            <tr>
                <th><?php echo lang('name'); ?></th>
                <th><?php echo lang('next_id'); ?></th>
                <th><?php echo lang('left_pad'); ?></th>
                <th><?php echo lang('options'); ?></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($invoice_groups as $invoice_group) { ?>
                <tr>
                    <td><?php echo $invoice_group->invoice_group_name; ?></td>
                    <td><?php echo $invoice_group->invoice_group_next_id; ?></td>
                    <td><?php echo $invoice_group->invoice_group_left_pad; ?></td>
                    <td>
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle"
                               data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php echo lang('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('invoice_groups/form/' . $invoice_group->invoice_group_id); ?>">
                                        <i class="fa fa-edit fa-margin"></i> <?php echo lang('edit'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('invoice_groups/delete/' . $invoice_group->invoice_group_id); ?>"
                                       onclick="return confirm('<?php echo lang('delete_record_warning'); ?>');">
                                        <i class="fa fa-trash-o fa-margin"></i> <?php echo lang('delete'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

        </table>
    </div>
</div>