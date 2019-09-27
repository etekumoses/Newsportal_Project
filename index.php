<?php
 include ('head.php');?>
<body style="background-image: url(images/backgrounds/es.jpg)">
    <div class="container">
        <div class="row">
		<center>
            <img src="images/backgrounds/logo.png" style="height: 90px;">
            <h4 style="color: yellow;">ONLINE VOTING SYSTEM</h4></center>
            <div class="col-md-4 col-md-offset-2" >
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title"> VOTER LOGIN</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data" style="color:blue">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >Student No.</label>
										<input class="form-control" placeholder="Please Enter Voter's ID Number" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <div><button class="btn btn-success btn-block " name = "login">Login</button></div>


								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                        <h4><b>Note:</b> <i>One voter can only vote/login one time!!</i> </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2" >
                <div class="login-panel panel panel-default">
                
                    <div class="panel-heading">
                        <center><h3 class="panel-title"> VOTER REGISTRATION</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data" style="color:blue">
                            <fieldset>
                            <?php 
                                require 'dbcon.php';
                                
                                if (isset($_POST['register'])){
                                    $firstname=$_POST['firstname'];
                                    $lastname=$_POST['lastname'];
                                    $id_number=$_POST['id_number'];
                                    $year_level=$_POST['year_level'];
                                    $password = $_POST['password'];


                                    $query = $conn->query("SELECT * FROM voters WHERE id_number='$id_number'") or die (mysql_error());
                                    $count = $query->fetch_array();

                                    if ($count  > 0){ 
                                    ?>
                                        <script>
                                            alert("ID Number Already Exist");
                                        </script>
                                    <?php
                                        }
                                        else{
                                        $conn->query("insert into voters(id_number, password, firstname,lastname,year_level,status) VALUES('$id_number', '$password','$firstname','$lastname','$year_level','Unvoted')");
                                        echo " <br><center><font color= 'red' size='3'>You have successfully been registered please login to vote</center></font>";
                                    ?>
                            <?php
                                    }
                                } 
                            ?>
                          
                                <div class="form-group">
                                                <label>Student No.</label>
                                                <input class ="form-control" type = "text" name = "id_number" placeholder = "ID number" required="true">
                                                    
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Password</label>
                                                    <input class="form-control"  type = "password" name = "password" id = "pass" required="true" placeholder="Password" />
                                                                                               
                                            <div class="form-group">
                                                <label>Firstname</label>
                                                    <input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label>Lastname</label>
                                                    <input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Year_Level</label>
                                                    <select class = "form-control" name = "year_level">
                                                        <option></option>
                                                        <option>1st Year</option>
                                                        <option>2nd Year</option>
                                                        <option>3rd Year</option>
                                                        <option>4th Year</option>
                                                        
                                                    </select>
                                            </div>
                                                                    
                                                 
                                         </div>
                                         
                              
                                <div><button class="btn btn-success btn-block " name = "register">Register</button></div>                                
                                <h4><b>Note:</b> <i>After registering please ensure your password is kept as a secret</i> </h4>
                            </fieldset>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer font-small blue" style="background-color: green; height: 50px;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" align="center" style="color: yellow;">Developed by @etekumoses-shamoscoders
     <p><a href="mailto:etekemoses@gmail.com?Subject=" target="_top">etekemoses@gmail.com</a></p>
  </div>
  <!-- Copyright -->



</footer>

  <?php include ('script.php');?>

</body>

</html>
