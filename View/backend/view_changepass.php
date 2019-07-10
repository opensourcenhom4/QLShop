<div class="row justify-content-center">
	<div class="col-md-6">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Change Pass</div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3 text-right">Old password</div>
							<div class="col-md-9">
								<input type="text" name="c_pass" value="<?php echo isset($_SESSION["c_password"])?($_SESSION["c_password"]):"ko co"; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3 text-right">New Password</div>
							<div class="col-md-9">
								<input type="text" name="c_newpass"  required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-3 text-right">Confirm Password</div>
							<div class="col-md-9">
								<input type="text" name="c_cofpass" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<input type="submit" value="Process" class="btn btn-primary"> 
					<input type="reset" value="Reset" class="btn btn-danger">
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>