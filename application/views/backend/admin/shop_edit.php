<ol class="breadcrumb">
    <li>
        <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
            <i class="entypo-folder"></i>
            Dashboard
        </a>
    </li>
    <li>
        <a href="<?php echo base_url(); ?>index.php?admin/shop">Shops</a>
    </li>
    <li>Edit Shop</li>
</ol>

<?php
$edit_data = $this->db->get_where('shop', array('shop_id' => $shop_id))->result_array();
foreach($edit_data as $row) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title" >
                        <i class="entypo-plus-circled"></i>
                        Edit Shop
                    </div>
                </div>
                <div class="panel-body">

                    <?php echo form_open(base_url() . 'index.php?admin/shop/update/' . $shop_id, array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data')); ?>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Shop Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="shop_name" value="<?php echo $row['shop_name']; ?>" autofocus required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Shop Domain</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="domain" value="<?php echo $row['domain']; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Master Username</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="master_username" value="<?php echo $row['master_username']; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Master Password</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="master_password" value="<?php echo $row['master_password']; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Database Hostname</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="db_hostname" value="<?php echo $row['db_hostname']; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Database Username</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="db_username" value="<?php echo $row['db_username']; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Database Password</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="db_password" value="<?php echo $row['db_password']; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Database Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="db_name" value="<?php echo $row['db_name']; ?>" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Subscription Start Date</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control datepicker" name="subscription_start_date" data-format="D, dd MM yyyy"
                                    value="<?php echo date('D, d F Y', $row['subscription_start_date']); ?>" autocomplete="off" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Subscription End Date</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control datepicker" name="subscription_end_date" data-format="D, dd MM yyyy"
                                    value="<?php echo date('D, d F Y', $row['subscription_end_date']); ?>" autocomplete="off" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-info" id="submit-button">Update</button>
                                <span id="preloader-form"></span>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>