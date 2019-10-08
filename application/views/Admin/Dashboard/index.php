<!-- Small boxes header (Stat box) -->
<!-- <iframe width="100%" height="800px" frameborder="no" scrolling="auto" src="https://docs.google.com/document/d/1CGlXnNLIbXx9EXPOi_I1KxfC9CyeyZ3kZPTFg4qSBE8"></iframe> -->
<!-- <iframe width="100%" height="100%" frameborder="no" scrolling="auto" src=""></iframe> -->
<?php $this->load->view('Admin/Dashboard/smallboxheader') ?>
<!-- /Small boxes header (Stat box) -->
<!-- Main row -->
<div class="row">
<?php $this->load->view('Admin/Dashboard/content_main') ?> 
<a onclick="printFile('1CGlXnNLIbXx9EXPOi_I1KxfC9CyeyZ3kZPTFg4qSBE8')">hihi</a>
</div>
<!-- /.row (main row) -->

<script type="text/javascript">
	function printFile(fileId) {
		gapi.client.load('drive', 'v2', null);
		  gapi.load('client', function () {
		    gapi.client.load('drive', 'v2', function () {
		        var file = gapi.client.drive.files.get({ 'fileId': fileId });
		        file.execute(function (resp) {
		            console.log(resp);
		        });

		    });
		});
	}

</script>