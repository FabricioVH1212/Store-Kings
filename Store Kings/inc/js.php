	<?php mysqli_close($_SESSION["MYSQL"]);?>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="js/script.js"></script>	
	<script src="<?= ROOT?>assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= ROOT?>assets/js/theme/default.min.js"></script>
	<script src="<?= ROOT?>assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= ROOT?>assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="<?= ROOT?>assets/js/demo/form-wizards.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= ROOT?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	<script src="<?= ROOT?>assets/js/demo/form-plugins.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->	

	<!-- ================== BEGIN PAGE LEVEL JS DATATABLES ================== -->
	<script src="<?= ROOT?>assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?= ROOT?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/DataTables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js"></script>
	<script src="<?= ROOT?>assets/js/demo/table-manage-fixed-columns.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS DATATABLES ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= ROOT?>assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="<?= ROOT?>assets/js/demo/email-compose.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= ROOT?>assets/plugins/hoverIntent/hoverIntent.js"></script>
	<script src="<?= ROOT?>assets/plugins/php-email-form/validate.js"></script>
	
	<script>
		$(document).ready(function() {
			App.init();
			FormPlugins.init();
			TableManageFixedColumns.init();
			EmailCompose.init();
		});
	</script>
</body>
</html>