<div class="content-wrapper">
	    <section class="content">

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Upload GIS Data</h3>
            </div>
            <div class="box-body">
				<h3>Your file was successfully uploaded!</h3>

				<ul>
				<?php foreach ($upload_data as $item => $value):?>
				<li><?php echo $item;?>: <?php echo $value;?></li>
				<?php endforeach; ?>
				</ul>

				<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
            </div>
        </div>
    </div>
</div>

    </section>
</div>
