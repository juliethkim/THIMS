<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <i class="fa fa-users"></i> Hospital Management
        <small>Add / Edit Hospital</small>
      </h1>
    </section>

    <section class="content">

    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
  
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Hospital Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form"  action="<?php echo base_url() ?>hospital_info/add" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="user_image">Image</label>
                                    <div class="kv-avatar">
                                        <div class="file-loading">
                                            <input id="user_image" name="user_image" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="name">Hospital Name</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('name'); ?>" id="name" name="name" maxlength="128">
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label for="hospital_category">Category</label>
                                     <?php $attributes = 'class="form-control" id="hospital_category"';
                                     echo form_dropdown('hospital_category', $hospital_category, set_value('hospital_category'), $attributes); ?>
                                 <span class="text-danger"><?php echo form_error('hospital_category'); ?></span>
                                 </div>
                            </div>


                    <div class="row">
                        <div class="form-group">
                                    <label for="hospital_ownership">Ownership</label>
                                     <?php $attributes = 'class="form-control" id="hospital_ownership_id"';
                                     echo form_dropdown('hospital_ownership', $hospital_ownership, set_value('hospital_ownership'), $attributes); ?>
                                 <span class="text-danger"><?php echo form_error('hospital_ownership'); ?></span>
                                 </div>



                 

                     <div class="form-group">
                             <label for="regions">Region</label>
                                     <?php $attributes = 'class="form-control" id="regions"';
                                     echo form_dropdown('regions', $regions, set_value('regions'), $attributes); ?>
                                <span class="text-danger"><?php echo form_error('regions'); ?></span>
                    </div>
                       
                    </div>
                     
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
           <!--  </div> -->
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addHospital.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function() {
            $('.succWrap').slideUp("slow");
        }, 3000);
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".select_group").select2();
        $("#description").wysihtml5();

        $("#mainProductNav").addClass('active');
        $("#addProductNav").addClass('active');

        var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="glyphicon glyphicon-tag"></i>' +
            '</button>';

        $("#user_image").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
            layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });

    });
</script>


   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {

            $('#submit').click(function() {

                //get input data as a array
                var post_data = {
                    'message': $("#message").val(),
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>Hospital_info/insertByajax",
                    data: post_data,
                    success: function(message) {
                        // return success message to the id='result' position
                        $("#result").html(message);
                    }
                });

            });

        });
    </script>