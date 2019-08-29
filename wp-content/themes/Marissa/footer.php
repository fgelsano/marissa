	<section class="contact">
		<!-- The Modal -->
		<div class="modal fade" id="contact">
		  <div class="modal-dialog" >
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Need our service? Contact us now</h4>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		        <form id = "main-contact" action = "wp-admin/admin-ajax.php" method = "POST">
		        	<div class="form-group">
		        		<input type="" name="name" class="form-control" placeholder="NAME" required>
		        	</div>
		        	<div class="contact-form-flex">
		        		<div class="form-flex-1">
		        			<div class="form-group">
				        		<input type="text" name="contact" class="form-control" placeholder="CONTACT NUMBER (09XX-XXX-XXXX)" required maxlength="11">
				        	</div>
		        		</div>
		        		<div class="form-flex-1">
		        			<div class="form-group">
				        		<input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS" required>
				        	</div>
		        		</div>
		        	</div>
		        	<div class="form-group">
		        		<input type="" name="address" class="form-control" placeholder="ADDRESS" required>
		        	</div>
		        	<div class="form-group">
		        		<select class="form-control" name = "services" required>
		        			<option>Product/Service Needed</option>
							<option>Salon</option>
							<option>Boutique</option>
							<option>Catering</option>
		        		</select>
		        	</div>
		        	<div class="form-group">
		        		<textarea name = "message" class="form-control" placeholder="MESSAGE/INQUIRY" required></textarea>
		        	</div>
		        	<div class="contact-submit">
		        		<input  type="submit" value="SUBMIT" class="btn btn-info">
		        	</div>
					<br>
					<p id = "mainmessage" class = "alert alert-success" style = "display:none;">
						
					</p>
		        </form>
		      </div>

		      <!-- Modal footer -->

		    </div>
		  </div>
		</div>
	</section>
	<section class="footer">
		<p>Copyright 2017 - Marissa Beauty Shop - All rights reserved.</p>
	</section>
<script type="text/javascript" src ="<?php echo get_template_directory_uri() ?>/assets/plugin/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src ="<?php echo get_template_directory_uri() ?>/assets/plugin/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src ="<?php echo get_template_directory_uri() ?>/assets/plugin/slick/slick.min.js"></script>
<script>
	var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ) ?>";
</script>
<script type="text/javascript" src ="<?php echo get_template_directory_uri() ?>/assets/plugin/jquery/dist/script.js"></script>
<?php wp_footer() ?>
</body>
</html>