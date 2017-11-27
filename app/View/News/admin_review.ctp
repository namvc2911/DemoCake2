 <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">
                <?php
                echo $this->Html->link('English', array('language'=>'eng')); 
                echo "&nbsp;";
                echo $this->Html->link('VietNam', array('language'=>'vi')); 
                ?>
                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $detail['News']['title'] ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $detail['User']['username'] ?></a>
                    
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Số lần xem: <?php echo $detail['News']['view'] ?></p>
                
                <p><span class="glyphicon glyphicon-time"></span> Thời gian cập nhật <?php echo $detail['News']['create_at'] ?></p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $detail['News']['content'] ?></p>
                
              
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Danh sách Bài viết + Username</b></div>
                     <div class="panel-body">
                        <?php foreach($data2 as $item) {?>
                         <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b><?php echo $item['User']['username'] ;?></b></a>
                            </div>
                            <p><?php  echo $item['News']['title'];?></p>
                            <!-- <p><?php  echo $item['News']['create_at'];?></p> -->
                            <div class="break"></div>
                        </div>
                        <?php } ?>

                     </div>





                </div>

            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Danh sách Bài viết + Username truy cập cuối cùng</b></div>
                     <div class="panel-body">
                        <?php foreach($data3 as $item) {?>
                         <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <p><b><?php echo $item['User']['username'] ;?></b></p>
                            </div>
                            <p><?php  echo $item['News']['title'];?></p>
                            <div class="break"></div>
                        </div>
                        <?php } ?>

                     </div>





                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>