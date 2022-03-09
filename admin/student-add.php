<?php include "header.php"; ?>
	<!-- main section -->
	<div class="container main">
		<div class="row my-3 border-bottom">
			<div class="col-md-12">
				<h1>Register New Student</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<form method="" action="">
					<div class="row">
						<div class="mb-3 col-md-6">
						  <label for="year" class="form-label">Year</label>
							<select class="form-select" name="std_year">
							  <option selected>Select Year</option>
							  <option value="2020" <?php echo date("Y")==2020?'selected':'';?>>2020</option>
							  <option value="2021" <?php echo date("Y")==2021?'selected':'';?>>2021</option>
							  <option value="2022" <?php echo date("Y")==2022?'selected':'';?>>2022</option>
							  <option value="2023" <?php echo date("Y")==2023?'selected':'';?>>2023</option>
							  <option value="2024" <?php echo date("Y")==2024?'selected':'';?>>2024</option>
							  <option value="2025" <?php echo date("Y")==2025?'selected':'';?>>2025</option>
							  <option value="2026" <?php echo date("Y")==2026?'selected':'';?>>2026</option>
							</select>
						</div>

						<div class="mb-3 col-md-6">
							<label for="class" class="form-label">Class</label>
							<select class="form-select" name="std_class">
							  <option selected>Select Class</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							</select>
						</div>
					</div>

					<div class="mb-3 col-md-12">
						<label for="studendroll" class="form-label">Student Roll</label>
					 <input type="number" class="form-control" name="std_roll" id="studendroll" placeholder="Enter Roll">
					</div>

					<div class="mb-3 col-md-12">
						<label for="studentname" class="form-label">Student Name</label>
					 <input type="text" class="form-control" name="std_name" id="studentname" placeholder="Enter Name">
					</div>


					<div class="mb-3 col-md-12">
						<label for="studentphone" class="form-label">Phone Number</label>
					 <input type="text" class="form-control" name="std_phone_no" id="studentphone" placeholder="Enter Contact Number">
					</div>

					<div class="mb-3 col-md-12">
						<label for="studentemail" class="form-label">Email address</label>
					 <input type="email" class="form-control" name="std_email" id="studentemail" placeholder="name@example.com">
					</div>

					<div class="mb-3">
					  <label for="stduentnote" class="form-label">Student Note</label>
					  <textarea class="form-control" name="std_note" id="example" rows="3"></textarea>
					</div>

					<div class="mb-3 col-md-12">
					 <input type="submit" class="btn btn-success btn-md px-3" name="reg_student" id="stdregbtn" value="Registration">
					</div>
				</form>
			</div>
		</div>
	</div><!-- /main section -->


<?php include "footer.php"; ?>