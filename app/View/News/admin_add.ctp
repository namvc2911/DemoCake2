<div id="wrapper">
        <!-- Navigation -->
        <?php echo $this->element('admin/navigate');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bài Viết
                    <button onclick="window.location.href='#'" style="float: right;" type="button" class="btn btn-primary">List</button>
                    </h1>
                    <?php echo $this->Session->flash();?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Thêm bài viết
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-6">
                                    <?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
                                        <div class="form-group">
                                            <label>Tiêu Đề</label>
                                            <?php echo $this->Form->input('title', array('class'=>'form-control')); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Content</label>
                                            <?php echo $this->Form->input('content', array('class'=>'form-control')); ?>
                                        </div>

                                        
                                        <button type="submit" class="btn btn-default">Save</button> 
                                    <?php echo $this->Form->end();?>
                                </div>
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