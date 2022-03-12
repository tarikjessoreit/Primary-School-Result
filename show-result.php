<?php include 'header.php' ?>
<div class="container user-main main">
    <div class="row">
        <div class="card mb-3 col-md-12">
            <div class="card-header text-center bg-white">
                <b>Result Here</b>
            </div>
            <div class="card-body text-left row">
                <div class="col-md-12 row">
                    <div class=" pb-3 col-md-3 col-6">Year : <?= 2022 ?></div>
                    <div class=" pb-3 col-md-3 col-6">Class : <?= 5 ?></div>
                    <div class=" pb-3 col-md-3 col-6">Roll No : <?= 1 ?></div>
                    <div class=" pb-3 col-md-3 col-6">Full Name : <?= 'Md Riad Hasan' ?></div>
                </div>

                <table class="table table-responsive table-striped">
                    <tr>
                        <th>NO</th>
                        <th>Sub Name</th>
                        <th>Mark</th>
                        <th>GP</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Bangla</td>
                        <td>60</td>
                        <td>A-</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>English</td>
                        <td>60</td>
                        <td>A-</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Math</td>
                        <td>60</td>
                        <td>A-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align: right; font-weight: 700;">Total Mark</td>
                        <td>600</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align: right; font-weight: 700;">GPA</td>
                        <td>3.68</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-12 text-center mt-5">
            <button onclick="window.print()" class="btn btn-danger">Print Result</button>
        </div>
        <div class="col-md-12 text-center my-2">
            <a href="index.php" class="btn btn-link">Back to Search</a>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>