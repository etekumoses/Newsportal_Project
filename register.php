<?php
 include ('head.php');?>
<body style="background-image: url(images/backgrounds/es.jpg)">
    <div class="container">
        <div class="row">

		<center>
            <img src="images/backgrounds/logo.png">
            <h3 style="color: yellow;">SHAMOS-ONLINE VOTING SYSTEM</h3></center>
            <div class="col-md-4 col-md-offset-4" >
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h3 class="panel-title"> REGISTRATION FORM</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data" style="color:blue">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >FIRST NAME</label>
										<input class="form-control" placeholder="Please Enter firstname" name="firstname" type="text" required = "required" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for = "username" >LASTNAME</label>
                                        <input class="form-control" placeholder="Please Enter lastname" name="lastname" type="text" required = "required" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for = "username" >STUDENT NO.</label>
                                        <input class="form-control" placeholder="Please Enter lastname" name="idno" type="text" required = "required" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for = "username" >YEAR OF STUDY</label>
                                    <select class="form-control">
                                        <option>Year 1</option>
                                         <option>Year 2</option>
                                          <option>Year 3</option>
                                           <option>Year 4</option>
                                            <option>Year 5</option>
                                    </select>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >PASSWORD</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <button class="btn btn-success btn-block " name = "register">signup</button><br>

								<strong>Already have an account? <a href="index.php" style="color: red">login here</a></strong>
								
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
