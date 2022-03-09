<?php include "header.php"; ?>
	<!-- main section -->
	<div class="container main">
		<div class="row my-3 border-bottom">
			<div class="col-md-12">
				<h1>Student List</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="card studentlist">
					<div class="card-header">Student List</div>
					<div class="card-body">
							<table id="studentList-table" class="table table-striped table-bordered" style="width:100%">
						        <thead>
						            <tr>
							            <th>ID</th>
						                <th>Year</th>
						                <th>Roll</th>
						                <th>Class</th>
						                <th>Name</th>
						                <th>Phone No</th>
						                <th>Email</th>
						                <th>Address</th>
						                <th>Action</th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr>
						                <td>1</td>
						                <td>2022</td>
						                <td>05</td>
						                <td>1</td>
						                <td>Mr. Korim</td>
						                <td>0177777777</td>
						                <td>korim@xyz.com</td>
						                <td>Jessore, khulna</td>
						                <td>
						                	<a class="btn btn-sm btn-info" href="student-edit.php">Edit</a>
						                	<a class="btn btn-sm btn-danger" href="#">Del</a>
						                </td>
						            </tr>
						        </tbody>
						        <tfoot>
						            <tr>
						                <th>ID</th>
						                <th>Year</th>
						                <th>Roll</th>
						                <th>Class</th>
						                <th>Name</th>
						                <th>Phone No</th>
						                <th>Email</th>
						                <th>Address</th>
						                <th>Action</th>
						            </tr>
						        </tfoot>
						    </table>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /main section -->


<?php include "footer.php"; ?>