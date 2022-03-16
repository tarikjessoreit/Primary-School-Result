<?php include 'header.php' ?>
<?php 
    if(isset($_POST['search_result'])){
        $sy = $_POST['year'];
        $sc = $_POST['class'];
        $sr = $_POST['roll'];

        $sql = "SELECT * FROM std_results WHERE res_year = $sy and  res_std_class = '$sc' and res_std_roll = $sr";
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
        header('location:index.php');
    }
 ?>
<div class="container user-main main">
    <div class="row">
        <?php if(isset($res_year)){ ?>
        <div class="card mb-3 col-md-12">
            <div class="card-header text-center bg-white">
                <b>Result Here</b>
            </div>
            <div class="card-body text-left row">
                <div class="col-md-12 row">
                    <div class=" pb-3 col-md-3 col-6">Year : <?php echo isset($res_year)?$res_year:""?></div>
                    <div class=" pb-3 col-md-3 col-6">Class : <?php echo isset($res_std_class)?$res_std_class:""?></div>
                    <div class=" pb-3 col-md-3 col-6">Roll No : <?php echo isset($res_std_roll)?$res_std_roll:""?></div>
                    <div class=" pb-3 col-md-3 col-6">Full Name : <?= '' ?></div>
                </div>

                <table class="table table-responsive table-striped">
                    <tr>
                        <th>NO</th>
                        <th>Sub Name</th>
                        <th>Mark</th>
                        <th>Grade</th>
                        <th>GP</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Bangla</td>
                        <td><?php echo isset($res_sub_bangla)?$res_sub_bangla:""?></td>
                        <td><?php echo get_g($res_sub_bangla) ?></td>
                        <td><?php echo get_gp($res_sub_bangla) ?></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>English</td>
                        <td><?php echo isset($res_sub_english)?$res_sub_english:""?></td>
                        <td><?php echo get_g($res_sub_english) ?></td>
                        <td><?php echo get_gp($res_sub_english) ?></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Math</td>
                        <td><?php echo isset($res_sub_math)?$res_sub_math:""?></td>
                        <td><?php echo get_g($res_sub_math) ?></td>
                        <td><?php echo get_gp($res_sub_math) ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: right; font-weight: 700;">Total Mark</td>
                        <td>
                            <?php echo  ($res_sub_bangla+$res_sub_english+$res_sub_math); ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: right; font-weight: 700;">GPA</td>
                        <td>
                            <?php echo 
                            (get_gp($res_sub_bangla)+
                            get_gp($res_sub_english)+
                            get_gp($res_sub_math))/3;
                            ?>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php } ?>
        <div class="col-md-12 text-center mt-5">
            <button onclick="window.print()" class="btn btn-danger">Print Result</button>
        </div>
        <div class="col-md-12 text-center my-2">
            <a href="index.php" class="btn btn-link">Back to Search</a>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>