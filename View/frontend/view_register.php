<div class="row">
	<div class="col-md-12 login_left">
		<h3>Đăng ký</h3>
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
					<div class="col-md-3">Họ tên</div>
					<div class="col-md-9"><input placeholder="Họ và tên:" type="text" name="hovaten" required class="form-control"></div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div class="col-md-3">Email</div>
					<div class="col-md-9"><input placeholder="email:" type="email" name="email" required class="form-control"></div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div class="col-md-3">Số điện thoại</div>
					<div class="col-md-9"><input placeholder="email:" type="tel" name="dienthoai" required class="form-control"></div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div class="col-md-3">Địa chỉ</div>
					<div class="col-md-9"><input placeholder="Địa chỉ:" type="text" name="diachi" required class="form-control"></div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div class="col-md-3" >Password</div>
					<div class="col-md-9" ><input placeholder="password" type="password" name="password" required class="form-control"></div>
				</div>
				<!-- end form group -->
				<!-- form group -->
				<div class="form-group">
					<div ></div>
					<div>
						<input type="submit" value="Đăng ký" class="btn btn-primary"> 
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