<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"> </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
       
        
    </div>
    <!-- /.navbar-header -->
   
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->
<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
       
          
        </li>
        
       <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Users<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php echo $this->Html->link('List',array('controller'=>'users','action'=>'list'),array('escape'=>false))?>
                           
                        </li>
                        <li>
                            <?php echo $this->Html->link('Add',array('controller'=>'users','action'=>'add'),array('escape'=>false))?>
                            <!--Or-->
                            <!--<a href="/admin/users/add">Add</a>-->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                  <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> News<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php echo $this->Html->link('List',array('controller'=>'news','action'=>'list'),array('escape'=>false))?>
                           
                        </li>
                        <li>
                            <?php echo $this->Html->link('Add',array('controller'=>'news','action'=>'add'),array('escape'=>false))?>

                               <?php echo $this->Html->link('Ajax',array('controller'=>'news','action'=>'ajax'),array('escape'=>false))?>
                            <!--Or-->
                            <!--<a href="/admin/users/add">Add</a>-->
                        </li>
                        
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
    </ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>