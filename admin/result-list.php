<?php include 'header.php' ?>
<div class="container mt-3 main">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Result List</h1>
        </div>
        <div class="col-md-12">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Year</th>
                        <th>Roll</th>
                        <th>Class</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>2022</td>
                        <td>1</td>
                        <td>5</td>
                        <td>65</td>
                        <td>78</td>
                        <td>64</td>
                        <td>644</td>
                        <td><a class="btn btn-sm me-2 btn-danger" href="#">Del</a><a class="btn btn-sm btn-info" href="result-edit.php">Edit</a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Year</th>
                        <th>Roll</th>
                        <th>Class</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php include "footer.php" ?>