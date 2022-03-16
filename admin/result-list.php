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
                <?php 
                    $sql = "SELECT * FROM std_results";
                    $res = $conn->query($sql);
                    if($res->num_rows > 0){
                        while($row = $res->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $row['ID'] ?></td>
                        <td><?php echo $row['res_year'] ?></td>
                        <td><?php echo $row['res_std_roll'] ?></td>
                        <td><?php echo $row['res_std_class'] ?></td>
                        <td><?php echo $row['res_sub_bangla'] ?></td>
                        <td><?php echo $row['res_sub_english'] ?></td>
                        <td><?php echo $row['res_sub_math'] ?></td>
                        <td><?php echo $row['res_total_mark'] ?></td>
                        <td>
                            <a class="btn btn-sm me-2 btn-danger" href="delete.php?rid=<?php echo $row['ID'] ?>">Del</a>
                            <a class="btn btn-sm btn-info" href="result-edit.php?rid=<?php echo $row['ID'] ?>">Edit</a>
                        </td>
                    </tr>
                    <?php 

                        }
                    }

                     ?>
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