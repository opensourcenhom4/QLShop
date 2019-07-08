<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit Product Type</div>
			<div class="card-body">
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên loại sản phẩm</div>
							<div class="col-md-10">
								<input type="text" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>" required class="form-control">
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