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
				<button type="button" class="btn btn-block btn-default btn-sm" id="btn-add-view-menu">Quay lại&nbsp;&nbsp;<i
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
							<input type="file" name="file" id="file-7" class="inputfile inputfile-6 addfile"
								   data-multiple-caption="{count} files selected" multiple/>
							<label for="file-7"><span></span> <strong>
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
										<path
											d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
									</svg>
									Choose a file&hellip;</strong></label>
						</div>
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