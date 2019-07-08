<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_news&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Tin tức</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Tiêu đề</th>
						<th>Chi tiết</th>
						<th style="width: 150px;"></th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td><?php echo $rows->c_name; ?></td>
						<td style="text-align: center;">
							<?php echo $rows->c_description; ?>
						</td>
						<td style="text-align: center;">
							<a href="admin.php?controller=add_edit_news&act=edit&id=<?php echo $rows->pk_news_id; ?>">Edit</a>&nbsp;&nbsp;
							<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=news&act=delete&id=<?php echo $rows->pk_news_id; ?>">Delete</a>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>