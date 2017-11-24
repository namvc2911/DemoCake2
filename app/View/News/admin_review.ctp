 <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

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
                
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $detail['News']['create_at'] ?></p>
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
            

        </div>
        <!-- /.row -->
    </div>