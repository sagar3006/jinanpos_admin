<?php
$system_name = 'Jinan Pos Admin';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Neon Admin Panel" />
        <meta name="author" content="" />

        <title>Login | <?php echo $system_name; ?></title>


        <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/neon-core.css">
        <link rel="stylesheet" href="assets/css/neon-theme.css">
        <link rel="stylesheet" href="assets/css/neon-forms.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <script src="assets/js/jquery-1.11.3.min.js"></script>

        <link rel="icon" href="assets/images/favicon.ico">

    </head>
    <body class="page-body login-page login-form-fall" data-url="http://neon.dev">


        <!-- This is needed when you send requests via Ajax -->
        <script type="text/javascript">
            var baseurl = '<?php echo base_url(); ?>';
        </script>

        <div class="login-container">

            <div class="login-header login-caret">

                <div class="login-content" style="width:100%;">

                    <a href="<?php echo base_url(); ?>" class="logo">
                        <img src="assets/images/logo_jit.png" width="150" alt="" />
                    </a>

                    <p class="description">
                    <h2 style="color:#cacaca; font-weight:100;">
                        <?php echo $system_name; ?>
                    </h2>
                    </p>

                    <!-- progress bar indicator -->
                    <div class="login-progressbar-indicator">
                        <h3>43%</h3>
                        <span>logging in...</span>
                    </div>
                </div>

            </div>

            <div class="login-progressbar">
                <div></div>
            </div>

            <div class="login-form">

                <div class="login-content">

                    <div class="form-login-error">
                        <h3>Invalid login</h3>
                        <p>
                            Please enter correct email and password!<br><br>
                            (If your login credentials are correct but still failing to log in, then your associated institute is currently deactivated)
                        </p>
                    </div>

                    <form action="<?php echo base_url(); ?>index.php?login/do_login" method="post" role="form">

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>

                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" data-mask="email" required />
                            </div>

                        </div>

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-key"></i>
                                </div>

                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required />
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                Login
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>


        <!-- Bottom Scripts -->
        <script src="assets/js/gsap/TweenMax.min.js"></script>
        <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/joinable.js"></script>
        <script src="assets/js/resizeable.js"></script>
        <script src="assets/js/neon-api.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/neon-login.js"></script>
        <script src="assets/js/neon-custom.js"></script>
        <script src="assets/js/neon-demo.js"></script>
        <script src="assets/js/toastr.js"></script>

        <!-- SHOW TOASTR NOTIFIVATION -->
        <?php if ($this->session->flashdata('flash_message') != ""):?>
            
            <script type="text/javascript">
                toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
            </script>

        <?php endif;?>

        <?php if ($this->session->flashdata('error_message') != ""):?>

            <script type="text/javascript">
                toastr.error('<?php echo $this->session->flashdata("error_message");?>');
            </script>

        <?php endif;?>

    </body>
</html>