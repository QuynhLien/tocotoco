<!-- Add Menu -->
<?php $this->load->view('Admin/Menu/add') ?>

<!-- Edit Menu -->
<?php $this->load->view('Admin/Menu/edit') ?>

<!-- view-table-menu -->
<div class="card card-view">
	<div class="card-header">
		<div class="row">
			<div class="col-md-10"><h3 class="card-title">Danh sách Menu</h3></div>
			<div class="col-md-2" style="text-align: right;">
				<button type="button" class="btn btn-block btn-success" id="btn-add-menu"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm
					Menu
				</button>
			</div>
		</div>
	</div>
	<!-- /.card-header -->

	<div class="card-body">
		<table id="example1" class="table table-bordered table-hover">
			<thead>
			<tr>
				<th>STT</th>
				<th>Tên menu</th>
				<th>Slug</th>
				<th>Hình ảnh</th>
				<th>Thao tác</th>
			</tr>
			</thead>
			<tbody>
			<?php $i = 1;
			foreach ($data as $value) { ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $value->name_type ?></td>
					<td><?= $value->slug ?></td>
					<td><img src="<?= site_url($value->image) ?>" style="height: 80px"></td>
					<td>
						<button type="button" class="btn btn-block btn-outline-success btn-sm" onclick="btn_edit_menu(<?=$value->id?>,'<?=$value->name_type?>','<?=$value->slug?>','<?=$value->image?>')">Sửa</button>
						<button type="button" class="btn btn-block btn-outline-warning btn-sm" id="btn-del-menu">Xoá</button>
					</td>
				</tr>
			<?php } ?>
			</tbody>
			<tfoot>
			<tr>
				<th>STT</th>
				<th>Tên menu</th>
				<th>Slug</th>
				<th>Hình ảnh</th>
				<th>Thao tác</th>
			</tr>
			</tfoot>
		</table>
	</div>
	<!-- /.card-body -->
</div>
<!-- //view-table-menu -->

<script type="text/javascript">
    $("#example1").DataTable();
    $("#btn-add-menu").click(function () {
        $(".card-view").toggle(function () {
            $(".card-add").show();
        });
    });
    $("#btn-add-view-menu").click(function () {
        $(".card-add").toggle(function () {
            $(".card-view").show();
        });
    });
    $("#btn-edit-view-menu").click(function () {
        $(".card-edit").toggle(function () {
            $(".card-view").show();
        });
    });
    var image_view;
    function btn_edit_menu(id,name_type,slug,image) {
      $(".card-view").toggle(function () {
          $(".card-edit").show();
      });
      document.getElementById("name_menu").value = name_type;
      document.getElementById("slug_menu").value = slug;
      document.getElementById("img_menu").innerHTML = image;
      document.getElementById("id_menu").value = id;
      image_view = image;
    }

    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    $("#form-menu").submit(function (log) {
      var formdata = new FormData(this);
      log.preventDefault();
      $.ajax({
          url: "<?php echo site_url('admin/menu/addMenu'); ?>",
          type: "POST",
          data: formdata,
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
            obj = JSON.parse(data);
            if(obj.type == "message"){
              message = obj.message;
              if(message['class'] == "success"){
                Toast.fire({
                  type: 'success',
                  title: message['message']
                })
              }else{
                Toast.fire({
                  type: 'error',
                  title: message['message']
                })
              }
            }else if(obj.type == "message_img"){
              message = obj.message;
              for (i in message) {
                $("#message-img").append('<div class="alert alert-'+message[i]['class']+'"><button class="close" data-dismiss="alert" type="button">×</button>'+message[i]['message']+'</div>');
              }

            }
          },
          error: function () {
          }
      });
    });
    $("#form-menu-edit").submit(function (log) {
      img_menu = document.getElementById("img_menu").innerHTML;
      if(img_menu == image_view) edit_img = "false"; else edit_img = "true";
      var formdata = new FormData(this);
      formdata.append('edit_img', edit_img);
      log.preventDefault();
      $.ajax({
          url: "<?php echo site_url('admin/menu/editMenu'); ?>",
          type: "POST",
          data: formdata,
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
            if (data != "success") {
              obj = JSON.parse(data);
              if(obj.type == "message"){
                message = obj.message;
                if(message['class'] == "success"){
                  Toast.fire({
                    type: 'success',
                    title: message['message']
                  })
                }else{
                  Toast.fire({
                    type: 'error',
                    title: message['message']
                  })
                }
              }else if(obj.type == "message_img"){
                message = obj.message;
                for (i in message) {
                  $("#message-img-edit").append('<div class="alert alert-'+message[i]['class']+'"><button class="close" data-dismiss="alert" type="button">×</button>'+message[i]['message']+'</div>');
                }
              }
            }else{
              Toast.fire({
                type: 'success',
                title: 'Chỉnh sửa menu thành công!'
              })
            }
          },
          error: function () {
          }
      });
    });
</script>