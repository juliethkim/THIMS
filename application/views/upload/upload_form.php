
<div class="content-wrapper">
	    <section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Upload Data</h3>
            </div>
            <div class="box-body">
			<?php echo $error;?>

			<?php echo form_open_multipart('upload/do_upload');?>

			<input type="file" name="userfile" size="20" />

			<br /><br />

			<input type="submit" value="upload" />

			</form>
            </div>
        </div>
    </div>
</div>

    </section>
</div>
