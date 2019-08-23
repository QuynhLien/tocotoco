<!-- remove this if you use Modernizr -->
<script>(function (e, t, n) {
        var r = e.querySelectorAll("html")[0];
        r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
    })(document, window, 0);</script>
<div id="message"></div>
<div class="card card-info card-add" style="display: none">
	<div class="card-header">
		<div class="row">
			<div class="col-md-10"><h3 class="card-title">Thêm Menu</h3></div>
			<div class="col-md-2" style="text-align: right;">
				<button type="button" class="btn btn-block btn-default btn-sm" id="btn-view-menu">Quay lại&nbsp;&nbsp;<i
						class="fas fa-arrow-right"></i></button>
			</div>
		</div>
	</div>
	<!-- /.card-header -->
	<!-- form start -->
	<form role="form" id="form-menu" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Tên menu</label>
				<input type="text" class="form-control" name="name" placeholder="Enter menu">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Slug</label>
				<input type="text" class="form-control" name="slug" placeholder="Enter slug">
			</div>
			<div class="form-group">
				<label for="exampleInputFile">File image</label>
				<div class="input-group">
					<div class="custom-file">
						<div class="box">
							<input type="file" name="file" id="file-7" class="inputfile inputfile-6"
								   data-multiple-caption="{count} files selected" multiple/>
							<label for="file-7"><span></span> <strong>
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
										<path
											d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
									</svg>
									Choose a file&hellip;</strong></label>
						</div>
						<!-- <?php
						if ($this->session->flashdata('message_img')) {
							$message = $this->session->flashdata('message_img');
              foreach ($message['class'] as $value) {
                ?>
  							<div class="alert alert-<?php echo $value; ?>">
  								<button class="close" data-dismiss="alert" type="button">×</button>
  								<?php echo $value; ?>
  							</div>
                <?php
              }
						}
						?> -->
					</div>
				</div>
        <br>
        <div id="message-img"></div>
			</div>
		</div>
		<!-- /.card-body -->

		<div class="card-footer">
			<button type="submit" class="btn btn-info" name="submit">Submit</button>
		</div>
	</form>
</div>

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
						<button type="button" class="btn btn-block btn-outline-success btn-sm">Sửa</button>
						<button type="button" class="btn btn-block btn-outline-warning btn-sm">Xoá</button>
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
    $("#btn-view-menu").click(function () {
        $(".card-add").toggle(function () {
            $(".card-view").show();
        });
    });
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
</script>