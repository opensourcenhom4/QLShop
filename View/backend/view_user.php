<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh sách khách hàng</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Email</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td><?php echo $rows->hovaten; ?></td>
						<td><?php echo $rows->email; ?></td>
						<td><?php echo $rows->diachi; ?></td>
						<td><?php echo $rows->dienthoai; ?></td>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>