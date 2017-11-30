 <div class="container">
        <div class="row">
            <p><span class="glyphicon glyphicon-time"></span> <?php 
            echo __('views:');
            echo $detail['News']['view']; ?></p>
          
            
            <!-- Blog Post Content Column -->
            <div class="col-lg-9">
                <button onclick="location.href='<?php echo Router::url(array('controller' => 'languages', 'action' => 'admin_eng')); ?>';">VietNamese</button> 
                <button onclick="location.href='<?php echo Router::url(array('controller' => 'languages', 'action' => 'admin_vn')); ?>';">English</button>
                <!-- Blog Post -->

                <!-- Title -->
                <h2><?php echo __('Title'); ?></h2>

                <h1><?php echo $detail['News']['title'] ?></h1>

                <!-- Author -->
                <p class="lead">
                 
                    
                </p>

                <!-- Preview Image -->
               

                <!-- Date/Time -->
                
                
                <p><span class="glyphicon glyphicon-time"></span> Update<?php echo $detail['News']['create_at'] ?></p>
                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $detail['News']['content'] ?></p>
                
              
                <hr>
                <?php echo __('List Post'); ?>
                <?php  foreach($data2 as $item){
                    echo "<br/>";
                    
                    echo $item['News']['title'];
                    echo "<br/>";

                }?>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><b><?php echo __('List User'); ?></b></div>
                     <div class="panel-body">
                        <?php foreach($users as $item) {?>
                         <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b><?php echo $item['User']['username'] ;?></b></a>
                            </div>
                            
                            <!-- <p><?php  echo $item['News']['create_at'];?></p> -->
                            <div class="break"></div>
                        </div>
                        <?php } ?>

                     </div>





                </div>

            </div>
          

        </div>
        <!-- /.row -->
    </div>