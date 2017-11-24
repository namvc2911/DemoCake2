<!-- DataTables CSS -->
<?php
    echo $this->Html->css(array(
        '../template_admin/vendor/datatables-plugins/dataTables.bootstrap.css',
        '../template_admin/vendor/datatables-responsive/dataTables.responsive.css',
    ));
?>
<!-- DataTables JavaScript -->
<?php
    echo $this->Html->script(array(
        '../template_admin/vendor/datatables/js/jquery.dataTables.min.js',
        '../template_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js',
        '../template_admin/vendor/datatables-responsive/dataTables.responsive.js',
        'jquery.js'
    ));
?>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>
<div id="wrapper">
        <!-- Navigation -->
        <?php echo $this->element('admin/navigate');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News</h1>
                    <?php echo $this->Session->flash();?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <p class="pull-right">
                    <?php  echo $this->Form->input('link', array('label' => false, "class" => "form-control input-medium", "placeholder" => __('Tìm tên bài viết')));?>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>