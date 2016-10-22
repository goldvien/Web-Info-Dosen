<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	
	<script src="<?php echo base_url() ?>/assets/js/jquery-2.0.3.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/lumino.glyphs.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
	
</body>

</html>
