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
    <li>Add Shop</li>
</ol>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    Add Shop
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open(base_url() . 'index.php?admin/shop/create', array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data')); ?>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Shop Name</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="shop_name" value="" autofocus required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Shop Domain</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="domain" value="" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Master Username</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="master_username" value="" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Master Password</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="master_password" value="" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Database Hostname</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="db_hostname" value="" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Database Username</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="db_username" value="" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Database Password</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="db_password" value="" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Database Name</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="db_name" value="" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Subscription Start Date</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control datepicker" name="subscription_start_date" data-format="D, dd MM yyyy"
                            value="" autocomplete="off" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Subscription End Date</label>

                        <div class="col-sm-6">
                            <input type="text" class="form-control datepicker" name="subscription_end_date" data-format="D, dd MM yyyy"
                            value="" autocomplete="off" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-info" id="submit-button">Submit</button>
                            <span id="preloader-form"></span>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>