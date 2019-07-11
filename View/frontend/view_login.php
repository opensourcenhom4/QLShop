<div class="row">
	<div class="col-md-6 login_left">
		<h3>Đăng Ký</h3>
		<div class="btn">
			<form>
				<a href="index.php?controller=register&act=register" class="btn btn-primary">Đăng ký(Tạo một tài khoản mới)</a>
			</form>
		</div>
	</div>
	<div class="col-md-6 login_left">
		<h3>Đăng nhập</h3>
	<!-- start registration -->
		<script>
			(function() {
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
		})();
		</script>
		<div class="registration_left">
				 <!-- form -->
			<form method="post" action="<?php echo $form_action; ?>">
				<!-- form group -->
				<div class="form-group">
					<div >Email</div>
					<div><input placeholder="email:" type="email" name="email" required class="form-control"></div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div >Password</div>
					<div ><input placeholder="password" type="password" name="password" required class="form-control"></div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div ></div>
					<div>
						<input type="submit" value="Login" class="btn btn-primary"> 
						<input type="Reset" value="Reset" class="btn btn-danger">
					</div>
				</div>
				<!-- end form group -->
			</form>
		<!-- end form -->
	</div>
</div>
<!-- end registration -->
</div>