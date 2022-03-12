<?php include "header.php"; ?>
	<!-- main section -->
	<div class="container main">
		<div class="row my-3 border-bottom">
			<div class="col-md-12">
				<h1>Edit Result</h1>
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

					<div class="row">
						<div class="col-md-4">
							<div class="mb-3 col-md-12">
								<label for="studentmark" class="form-label">Bangla</label>
							 <input type="number" class="form-control" name="std_sub_bangla" id="markbangla" placeholder="Bangla Mark">
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3 col-md-12">
								<label for="studentmark" class="form-label">English</label>
							 <input type="number" class="form-control" name="std_sub_english" id="markenglish" placeholder="English Mark">
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3 col-md-12">
								<label for="studentmark" class="form-label">Mathmatics</label>
							 <input type="number" class="form-control" name="std_sub_math" id="markmath" placeholder="Math Mark">
							</div>
						</div>
					</div>
					<div class="mb-3 col-md-12">
						<label for="studendroll" class="form-label">Total Mark</label>
					    <input type="number" class="form-control" name="std_total_mark" id="studendroll" placeholder="Enter Mark">
					</div>

					<div class="mb-3 col-md-12">
					 <input type="submit" class="btn btn-success btn-md px-3" name="add_mark" id="stdregbtn" value="Submit Mark">
					</div>

				</form>
			</div>
		</div>
	</div><!-- /main section -->


<?php include "footer.php"; ?>