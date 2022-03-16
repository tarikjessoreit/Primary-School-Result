<?php include "header.php"; ?>
<?php 



	if (isset($_GET['rid'])) {
		$rid = $_GET['rid'];

		// update Data
		if (isset($_POST['edit_mark'])) {
			$std_year = $_POST['std_year'];
			$std_class = $_POST['std_class'];
			$std_roll = $_POST['std_roll'];
			$std_sub_bangla = $_POST['std_sub_bangla'];
			$std_sub_english = $_POST['std_sub_english'];
			$std_sub_math = $_POST['std_sub_math'];
			$std_year = $_POST['std_year'];
			$res_total_mark = $_POST['std_total_mark'];

			$sql = "UPDATE std_results SET res_year = $std_year, res_std_class = '$std_class', res_std_roll = $std_roll, res_sub_bangla = $std_sub_bangla, res_sub_english = $std_sub_english, res_sub_math = $std_sub_math, res_total_mark = $res_total_mark WHERE ID = $rid";
	 
		    if ($conn->query($sql)===true) {
		        $msg = "New Result Added Successful!";
		    }else{
		        $err = "Error: ".$conn->error;
		    }
		}


		// get data from

		$sql = "SELECT * FROM std_results WHERE ID=$rid";
        $res = $conn->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $res_year = $row['res_year'];
                $res_std_roll = $row['res_std_roll'];
                $res_std_class = $row['res_std_class'];
                $res_sub_bangla = $row['res_sub_bangla'];
                $res_sub_english = $row['res_sub_english'];
                $res_sub_math = $row['res_sub_math'];
                $res_total_mark = $row['res_total_mark'];
            }
        }else{
            echo '<h1 class="text-center">No Result Found. Please Try Again</h1>';
        }
	}else{
		header('location:result-list.php');
	}



 ?>

	<!-- main section -->
	<div class="container main">
		<div class="row my-3 border-bottom">
			<div class="col-md-12">
				<h1>Edit Result</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<form method="post" action="">
					<?php if(isset($err)){ ?>
		            <div class="alert alert-danger">
		                <?php echo $err; ?>
		            </div>
		            <?php } ?>

		            <?php if(isset($msg)){ ?>
		            <div class="alert alert-success">
		                <?php echo $msg; ?>
		            </div>
		            <?php } ?>
					<div class="row">
						<div class="mb-3 col-md-6">
						  <label for="year" class="form-label">Year</label>
							<select class="form-select" name="std_year">
							  <option selected>Select Year</option>
							  <option value="2020" <?php echo  $res_year==2020?'selected':'';?>>2020</option>
							  <option value="2021" <?php echo  $res_year==2021?'selected':'';?>>2021</option>
							  <option value="2022" <?php echo  $res_year==2022?'selected':'';?>>2022</option>
							  <option value="2023" <?php echo  $res_year==2023?'selected':'';?>>2023</option>
							  <option value="2024" <?php echo  $res_year==2024?'selected':'';?>>2024</option>
							  <option value="2025" <?php echo  $res_year==2025?'selected':'';?>>2025</option>
							  <option value="2026" <?php echo  $res_year==2026?'selected':'';?>>2026</option>
							</select>
						</div>

						<div class="mb-3 col-md-6">
							<label for="class" class="form-label">Class</label>
							<select class="form-select" name="std_class">
							  <option selected>Select Class</option>
							  <option value="1" <?php echo  $res_std_class==1?'selected':'';?>>1</option>
							  <option value="2" <?php echo  $res_std_class==2?'selected':'';?>>2</option>
							  <option value="3" <?php echo  $res_std_class==3?'selected':'';?>>3</option>
							  <option value="4" <?php echo  $res_std_class==4?'selected':'';?>>4</option>
							  <option value="5" <?php echo  $res_std_class==5?'selected':'';?>>5</option>
							</select>
						</div>
					</div>

					<div class="mb-3 col-md-12">
						<label for="studendroll" class="form-label">Student Roll</label>
					 <input type="number" class="form-control" name="std_roll" id="studendroll" placeholder="Enter Roll" value="<?php echo $res_std_roll;?>">
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="mb-3 col-md-12">
								<label for="studentmark" class="form-label">Bangla</label>
							 <input type="number" class="form-control" name="std_sub_bangla" id="markbangla" placeholder="Bangla Mark" value="<?php echo $res_sub_bangla;?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3 col-md-12">
								<label for="studentmark" class="form-label">English</label>
							 <input type="number" class="form-control" name="std_sub_english" id="markenglish" placeholder="English Mark" value="<?php echo $res_sub_english;?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3 col-md-12">
								<label for="studentmark" class="form-label">Mathmatics</label>
							 <input type="number" class="form-control" name="std_sub_math" id="markmath" placeholder="Math Mark" value="<?php echo $res_sub_math;?>">
							</div>
						</div>
					</div>
					<div class="mb-3 col-md-12">
						<label for="studendroll" class="form-label">Total Mark</label>
					    <input type="number" class="form-control" name="std_total_mark" id="studendroll" placeholder="Enter Mark" value="<?php echo $res_total_mark;?>">
					</div>

					<div class="mb-3 col-md-12">
					 <input type="submit" class="btn btn-success btn-md px-3" name="edit_mark" id="stdregbtn" value="Submit Mark">
					</div>

				</form>
			</div>
		</div>
	</div><!-- /main section -->


<?php include "footer.php"; ?>