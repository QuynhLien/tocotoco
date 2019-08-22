<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-9"><h3 class="card-title">Danh sách đăng ký nhận tin</h3></div>
			<div class="col-md-3" style="text-align: right;">
				<div class="row">
				<div class="col-md-6"><button type="button" class="btn btn-block btn-info" onclick="export_excel()">Xuất danh sách</button></div>
				<div class="col-md-6"><a href="https://us3.admin.mailchimp.com/campaigns/#t:campaigns-list" target="_blank"><button type="button" class="btn btn-block btn-danger">Gửi mail</button></a></div>
				</div>
				
			</div>
		</div>	  
	</div>
	<!-- /.card-header -->

	<div class="card-body">
	  <table id="example1" class="table table-bordered table-hover">
	    <thead>
	    <tr>
	      <th>Stt</th>
	      <th>Email</th>
	      <th>Ngày tạo</th>
	    </tr>
	    </thead>
	    <tbody>
	    	<?php $i=1; foreach ($data as $value) { ?>
	    		<tr>
					<td><?= $i++ ?></td>
					<td><?= $value->email ?></td>
					<td><?= $value->created_date ?></td>
			    </tr>
	    	<?php } ?>		    
	    </tbody>
	    <tfoot>
	    <tr>
	      <th>Stt</th>
	      <th>Email</th>
	      <th>Ngày tạo</th>
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
    function export_excel(){
    	window.location.replace('<?= site_url('admin/khuyen-mai/createXLS') ?>')
    }

    function send_mail(){
    	window.location.replace('https://us3.admin.mailchimp.com/campaigns/#t:campaigns-list')
    }
</script>