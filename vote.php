<?php include ('head.php');?>
<?php include("sess.php")?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
					
                </div>
				
				
				
				
				<hr/>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary" >
                        <div class="panel-heading" ><center>
                            PRESIDENT</center>
                        </div>
                        <div class="panel-body">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
							VICE PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
			<img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px">
		<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vp_id" class = "vp"></center>
		</div>
						<?php
							}
						?>

						</div>
                       
                    </div>
                </div>
	
	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SPEAKER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'speaker'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "speaker_id" class = "speaker"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});
			
			$(".vp").on("change", function(){
				if($(".vp:checked").length == 1)
					{
						$(".vp").attr("disabled", "disabled");
						$(".vp:checked").removeAttr("disabled");
					}
				else
					{
						$(".vp").removeAttr("disabled");
					}
			});
			
			$(".speaker").on("change", function(){
				if($(".speaker:checked").length == 1)
					{
						$(".speaker").attr("disabled", "disabled");
						$(".speaker:checked").removeAttr("disabled");
					}
				else
					{
						$(".speaker").removeAttr("disabled");
					}
			});
			
		});	
	</script>
</html>

