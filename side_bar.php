<nav class="navbar navbar-expand navbar-dark bg-dark static-top" role="navigation" style="margin-bottom:1px; background-color: purple;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand" href="" style = "color:yellow;"><img src="images/backgrounds/logo.png" style="width: 40px; height: 40px;">ONLINE VOTING SYSTEM</a>
                
                
        
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php 
                    require 'dbcon.php';
                    $query = $conn->query("SELECT * from voters where voters_id ='$session_id'")or die (mysqli_errno ());
                    $row = $query->fetch_array();
                ?>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: yellow">
                    <i class="fa fa-cog fa-spin fa-fw" align="center"></i>Welcome: <?php echo strtoupper($user_username = $user_row['firstname']." ".$user_row['lastname']);
                    ?>
                       <i class="fa fa-circle text-success"></i>(Online)   
                    </a>
                   <li>
                                    <a href="logout.php" style="color: yellow;"> <i class = "fa fa-sign-out" style="color: yellow;"></i>Logout</a>
                                </li>
                
                </li>
           
            </ul>
            <div class="navbar-default sidebar" role="navigation" style="background-color: #dee2e6;" >
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        
                        <li>
                            <a href="vote.php"><i class="glyphicon glyphicon-ok"></i> Vote</a>
                        </li>
                        <li>
                            <a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a>
                        </li>
                        </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            
                        
            <!-- /.navbar-static-side -->
</nav>