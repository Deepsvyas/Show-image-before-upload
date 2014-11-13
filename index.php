<?php 
/*
Html code here
*/?>
<div class="form-group">
	<label class="col-sm-3 control-label">Product Image</label>
	 <div class="col-sm-6">
		<input type="file" multiple="multiple" name="file_upload" id="exampleInputFile1" class="btn btn-default" style="width:100%;" onchange="readURL(this);">
		<p class="help-block">
			Browse image here.
		</p>
		'<img id="blah" src="upload/defultproduct.jpg" width="200px" height="200px"/>
		
		 
	</div>
</div>
<?php 
/* 
javascript function code here
*/?>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
