<div class="sidebar-menu">

	<div class="sidebar-menu-inner">
		
		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo base_url(); ?>">
					<img src="assets/images/logo_jit.png" width="150" alt="" />
				</a>
			</div>

			<!-- logo collapse icon -->
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>

							
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>

		</header>
		<div class="sidebar-user-info">

	        <div class="sui-normal">
	            <a href="#" class="user-link">
	                <span>Welcome,</span>
	                <strong>
	                    <?php echo $this->db->get_where('admin', array('admin_id' => $this->session->userdata('login_user_id')))->row()->name; ?>
	                </strong>
	            </a>
	        </div>
	    </div>
								
		<ul id="main-menu" class="main-menu">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<li class="<?php if($page_name == 'dashboard') echo 'active'; ?>" style="border-top: 1px solid rgba(69, 74, 84, 0.7);">
				<a href="<?php echo base_url(); ?>index.php?admin/dashboard">
					<i class="entypo-gauge"></i>
					<span class="title">Dashboard</span>
				</a>
			</li>
			<li class="<?php if($page_name == 'shop' || $page_name == 'shop_add' || $page_name == 'shop_edit' || $page_name == 'shop_renew') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>index.php?admin/shop">
					<i class="entypo-gauge"></i>
					<span class="title">Shops</span>
				</a>
			</li>
		</ul>
		
	</div>

</div>