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
        'find2.js'
        
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
                <?php echo "Danh sách người  dùng: "; 
                    foreach($users as $user){
                        echo "<br/>";
                        echo $user['User']['username'];
                    }

                    ?>
            </div>
            <!-- /.row -->
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh Sách Bài Viết
                        </div>
                        <!-- /.panel-heading -->
                        </p>
                     
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <!-- <th>Images</th> -->
                                        <th>Ngày tạo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <?php foreach($data as $key => $val){
                                        
                                    ?>
                                    <tr>
                                        <td ><?php echo $val['News']['id']?></td>

                                        <td ><?php echo $val['News']['title']?></td>
                                        <td ><?php echo $val['News']['content']?></td>
                                       
                                        <td><?php echo $val['News']['create_at']?></td>
                                        <td>
                                         <!--    <?php 
                                                echo $this->Html->link('Review', array(
                                                    'controller' => 'news',
                                                    'action' => 'review',
                                                   $val['News']['slug']
                                                    ,array('class'=>'btn btn-primary')
                                                ));
                                            ?> -->
                                            <?php echo $this->Html->link('Review',array('controller'=>'news','action'=>'review',$val['News']['slug']), array('class' => 'btn btn-primary'));


                                                echo $this->Html->link('Edit',array('controller'=>'news','action'=>'edit',$val['News']['id']), array('class' => 'btn btn-warning'));

                                                echo $this->Html->link('Del',array('controller'=>'news','action'=>'delete',$val['News']['id']), array('class' => 'btn btn-danger'));
                                               
                                            ?>

                                           
                                            
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
