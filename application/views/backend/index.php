<?php
$system_name = 'Jinan Pos Admin';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Jinan POS Admin Panel - JinanIT" />
		<meta name="author" content="JinanIT" />

		<link rel="icon" href="assets/images/favicon.ico">

		<title><?php echo $page_title; ?> | <?php echo $system_name; ?></title>

		<?php include 'includes_top.php'; ?>
	</head>
	<body class="page-body" data-url="#">

		<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
			<?php include $this->session->userdata('login_type') . '/navigation.php'; ?>

			<div class="main-content">

				<?php include 'header.php'; ?>
						
				<!-- PAGE TITLE -->
				<h3 style="margin:20px 0px; color:#818da1; font-weight:200;">
                    <i class="entypo-right-circled"></i>
                    <?php echo $page_title; ?>
                </h3>

                <?php include $this->session->userdata('login_type') . '/' . $page_name . '.php'; ?>

                <?php include 'footer.php'; ?>
			</div>
			
		</div>

		<?php include 'modal.php'; ?>
		<?php include 'includes_bottom.php'; ?>

	</body>
</html>