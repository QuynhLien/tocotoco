<style type="text/css">
	.table.table-bordered.dataTable tbody td {
	    vertical-align: middle;
	}
</style>
<div class="card">
	<!-- <div class="card-header">
	  <h3 class="card-title">DataTable with default features</h3>
	</div> -->
	<!-- /.card-header -->

	<div class="card-body">
	  <table id="example1" class="table table-bordered table-hover">
	    <thead>
	    <tr>
	      <th>Mã hóa đơn</th>
	      <th>Họ tên</th>
	      <th>Số điện thoại</th>
	      <th>Phương thức thanh toán</th>
	      <th>Trạng thái thanh toán</th>
	      <th>Ngày tạo</th>
	      <th>Thao tác</th>
	    </tr>
	    </thead>
	    <tbody>
	    	<?php foreach ($data as $value) { ?>
	    		<tr>
					<td><?= $value->id ?></td>
					<td><?= $value->cus_name ?></td>
					<td><?= $value->cus_phone ?></td>
					<td><?= $value->method ?></td>
					<td style="text-align: center;"><?php if($value->status == "paid"){ ?><i style="color: green" class="fas fa-check"></i><?php } else { ?><i class="fas fa-times" style="color: red"></i><?php } ?></td>
					<td><?= $value->created_date ?></td>
			      	<td>
                        <button type="button" class="btn btn-block btn-outline-info btn-sm">Xem</button>
                        <button type="button" class="btn btn-block btn-outline-warning btn-sm">Xoá</button>
                    </td>
			    </tr>
	    	<?php } ?>		    
	    </tbody>
	    <tfoot>
	    <tr>
	      <th>Mã hóa đơn</th>
	      <th>Họ tên</th>
	      <th>Số điện thoại</th>
	      <th>Phương thức thanh toán</th>
	      <th>Trạng thái thanh toán</th>
	      <th>Thao tác</th>
	    </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- /.card-body -->
</div>


<!-- DataTables -->
<script src="<?= site_url('adTpl') ?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= site_url('adTpl') ?>/plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
    $("#example1").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
</script>