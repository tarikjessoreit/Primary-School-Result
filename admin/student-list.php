<?php include 'header.php' ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h1 class="border-bottom pb-2">Student List</h1>
        </div>
    </div>
</div>
<div class="container mt-3 main">
    <div class="row card m-0">
        <div class="col-md-12 p-0">
            <div class="card-header">
                Student List
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped" style="width:100%">
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
                            <td>01</td>
                            <td>2022</td>
                            <td>1</td>
                            <td>5</td>
                            <td>Dr Jhotka</td>
                            <td>01701076134</td>
                            <td>Rhmitulbd3@gmail.com</td>
                            <td>Shahebpur,Meherpur</td>
                            <td><a class="btn btn-sm me-2 btn-danger" href="#">Del</a><a class="btn btn-sm btn-info" href="#">Edit</a></td>
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
<?php include "footer.php" ?>