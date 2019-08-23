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
                        <button type="button" class="btn btn-block btn-outline-info btn-sm" onclick="view_hoadon('<?=$value->id?>')" data-toggle="modal" data-target="#viewModal">Xem</button>
                        <button type="button" class="btn btn-block btn-outline-warning btn-sm" onclick="del_hoadon('<?=$value->id?>')" data-toggle="modal" data-target="#delModal">Xoá</button>
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

<!-- Modal -->
<div class="modal fade" id="viewModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content bg-info">
	    <div class="modal-header">
	      <h4 class="modal-title">Thông tin hóa đơn</h4>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">×</span></button>
	    </div>
	    <div class="modal-body">
	    	<p>Ngày tạo: <span id="date-view"></span></p>
			<p>Tên khách hàng: <span id="name-view"></span></p>
			<p>Địa chỉ: <span id="address-view"></span></p>
			<p>Số điện thoại: <span id="phone-view"></span></p>
			<p>Ghi chú: <span id="note-view"></span></p>
			<p>Phương thức thanh toán: <span id="method-view"></span></p>
			<p>Chi tiết đơn hàng: </p>
			<div class="card" style="color: black">
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Sản phẩm</th>
                      <th>Hình ảnh</th>
                      <th>Giá</th>
                      <th>Số lượng</th>
                      <th>Tổng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#</td>
                      <td>Sản phẩm</td>
                      <td>Hình ảnh</td>
                      <td>Giá</td>
                      <td>Số lượng</td>
                      <td>Tổng</td>
                    </tr>                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
			<p>Tổng tiền: <span id="total-view"></span></p>
			<p>Tình trạng: <span id="status-view" style="color: black"></span></p>

	    </div>
	    <div class="modal-footer justify-content-between" style="position: relative; height: 70px;">
	      <button type="button" class="btn btn-outline-light" data-dismiss="modal" style="position: absolute; right: 15px;">Close</button>
	      <!-- <button type="button" class="btn btn-outline-light">Save changes</button> -->
	    </div>
	  </div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="delModal" style="display: none; padding-right: 17px;" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content bg-warning">
	    <div class="modal-header">
	      <h4 class="modal-title">Confirm</h4>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">×</span></button>
	    </div>
	    <div class="modal-body">
	      <p>Do you want to delete?</p>
	    </div>
	    <div class="modal-footer justify-content-between">
	      <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
	      <button type="button" class="btn btn-outline-dark" onclick="btn_yes()">Yes</button>
	      <input type="hidden" id="id_del" value=""/>
	    </div>
	  </div>
	</div>
</div>

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

    function view_hoadon(id) {
    	$.ajax({
    		url: "<?php echo site_url('admin/hoa-don/view'); ?>",
			type: "POST",
			data: {id:id},
			success: function (data) {
				obj = JSON.parse(data);
				document.getElementById("date-view").innerHTML = obj.created_date;
				document.getElementById("name-view").innerHTML = obj.cus_name;
				document.getElementById("address-view").innerHTML = obj.cus_address;
				document.getElementById("phone-view").innerHTML = obj.cus_phone;
				document.getElementById("note-view").innerHTML = obj.cus_note;
				document.getElementById("method-view").innerHTML = obj.method;
				document.getElementById("status-view").innerHTML = obj.status;
			}
    	});
    }
    function del_hoadon(id) {
    	document.getElementById("id_del").value = id;
    	// $("#delModal").show();
    }
    function btn_yes() {
    	$("#delModal").hide();
    	id = document.getElementById("id_del").value;    	
    	$.ajax({
    		url: "<?php echo site_url('admin/hoa-don/delete'); ?>",
			type: "POST",
			data: {id:id},
			success: function (data) {
				window.location.reload();
			}
    	});
    }
</script>