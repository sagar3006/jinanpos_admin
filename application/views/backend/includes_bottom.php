<link rel="stylesheet" href="assets/js/daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet" href="assets/js/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/js/datatables/datatables.css">
<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="assets/js/select2/select2.css">

<!-- Bottom scripts (common) -->
<script src="assets/js/gsap/TweenMax.min.js"></script>
<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/joinable.js"></script>
<script src="assets/js/resizeable.js"></script>
<script src="assets/js/neon-api.js"></script>

<script src="assets/js/daterangepicker/daterangepicker.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/bootstrap-timepicker.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker/daterangepicker.js"></script>
<script src="assets/js/toastr.js"></script>
<script src="assets/js/datatables/DataTables-1.10.9/js/jquery.dataTables.js"></script>
<!-- <script src="assets/js/datatables/datatables.js"></script> -->
<script src="assets/js/select2/select2.min.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="assets/js/neon-custom.js"></script>

<!-- Demo Settings -->
<script src="assets/js/neon-demo.js"></script>

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