<ol class="breadcrumb">
    <li>
        <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
            <i class="entypo-folder"></i>
            Dashboard
        </a>
    </li>
    <li>Shops</li>
</ol>

<a href="<?php echo base_url(); ?>index.php?admin/shop_add" class="btn btn-primary pull-right">
    <i class="entypo-plus-circled"></i>
    Add New Shop
</a> 
<br><br>

<?php
$this->db->order_by('shop_id', 'desc');
$shops = $this->db->get('shop')->result_array(); ?>

<table class="table table-bordered datatable" id="table_export">

    <thead>
        <tr>
            <th style="width: 25px;">#</th>
            <th>Shop</th>
            <th>Domain</th>
            <th>Master User Info</th>
            <th>Database Info</th>
            <th>Subscription Info</th>
            <th>Shop Status</th>
            <th>Subscription Status</th>
            <th>Options</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $count = 1;
        foreach($shops as $row): ?>
            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['shop_name']; ?></td>
                <td><?php echo $row['domain']; ?></td>
                <td>
                    <?php
                    echo 'Master Username : ' . $row['master_username'] . '<br>'
                    . 'Master Password : ' . $row['master_password']; ?>
                </td>
                <td>
                    <?php
                    echo 'Database Hostname : ' . $row['db_hostname'] . '<br>'
                    . 'Database Username : ' . $row['db_username'] . '<br>'
                    . 'Database Password : ' . $row['db_password'] . '<br>'
                    . 'Database Name : ' . $row['db_name']; ?>
                </td>
                <td>
                    <?php
                    echo 'Subscription Start Date : ' . date('d F Y', $row['subscription_start_date']) . '<br>'
                    . 'Subscription End date : ' . date('d F Y', $row['subscription_end_date']);
                    ?>
                </td>
                <td>
                    <?php
                    if ($row['shop_status'] == 1) {
                        $label          = 'success';
                        $shop_status    = 'active';
                    }
                    else {
                        $label          = 'danger';
                        $shop_status    = 'inactive';
                    }
                    ?>
                    <div class="label label-<?php echo $label; ?>" style="font-size: 11px;"><?php echo ucfirst($shop_status); ?></div>
                </td>
                <td>
                    <?php
                    $current_date = strtotime(date('m/d/Y'));
                    if($current_date > $row['subscription_end_date']) {
                        $label                  = 'danger';
                        $subscription_status    = 'expired';
                    }
                    else {
                        $label                  = 'success';
                        $subscription_status    = 'active';
                    }
                    ?>
                    <div class="label label-<?php echo $label; ?>" style="font-size: 11px;"><?php echo ucfirst($subscription_status); ?></div></br>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php?admin/shop_edit/<?php echo $row['shop_id']; ?>">
                                    <i class="entypo-pencil"></i>
                                    Edit
                                </a>
                            </li>
                            <?php
                            if($shop_status == 'active' && $subscription_status == 'expired') { ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php?admin/shop/deactivate/<?php echo $row['shop_id']; ?>">
                                        <i class="entypo-pencil"></i>
                                        Deactivate Shop
                                    </a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php?admin/shop_renew/<?php echo $row['shop_id']; ?>">
                                    <i class="entypo-pencil"></i>
                                    Renew Subscription
                                </a>
                            </li>
                            <li class="divider"></li>
                            
                            <li>
                                <a href="javascript:;" onclick="confirm_modal_hard_reload('<?php echo base_url(); ?>index.php?admin/shop/delete/<?php echo $row['shop_id']; ?>');">
                                    <i class="entypo-trash"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>

</table>

<!-- DATA TABLE EXPORT CONFIGURATIONS -->                      
<script type="text/javascript">
	jQuery( document ).ready( function( $ ) {
		var $table1 = jQuery( '#table_export' );
		
		// Initialize DataTable
		$table1.DataTable({
			"pageLength": 25
		});
		
		// Initalize Select Dropdown after DataTables is created
		$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
			minimumResultsForSearch: -1
		});
	} );
</script>