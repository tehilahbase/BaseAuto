	<div class="pulldown push-10-t text-center animated fadeInUp"> 
		<small class="text-muted"><?php echo date('Y'); ?> &copy; <?php echo app_name; ?></small>
	</div>
</div>

<script src="<?php echo base_url('backend/'); ?>js/main.min-2.2.js"></script>
<script src="<?php echo base_url('backend/'); ?>js/plugins/jquery-validation/jquery.validate.min.js"></script> 

<?php if($page_active == 'login'){ ?>
<script src="<?php echo base_url('backend/'); ?>js/pages/base_pages_login.js"></script>
<?php } ?>

<?php if($page_active == 'forgot'){ ?>
<script src="<?php echo base_url('backend/'); ?>js/pages/base_pages_reminder.js"></script>
<?php } ?>

<script src="<?php echo base_url('backend/'); ?>js/jsform.js"></script>
</body>
</html>