<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_product_type&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Loại sản phẩm</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Tên loại sản phẩm</th>
						
						<th style="width: 150px;"></th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td><?php echo $rows->c_name; ?></td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_product_type&act=edit&id=<?php echo $rows->pk_product_type_id; ?>">Edit</a>&nbsp;&nbsp;
							<a href="admin.php?controller=product_type&act=delete&id=<?php echo $rows->pk_product_type_id; ?>" onclick="window.confirm('Are you sure?');">delete</a>
						</td>
					</tr>
				<?php } ?>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
					<?php 
						for($i = 1; $i <= $num_page; $i++)
						{
					 ?>	
						<li class="page-item"><a class="page-link" href="admin.php?controller=product_type&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>