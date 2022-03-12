<?php include 'header.php' ?>
<div class="container user-main main">
    <div class="row">
        <div class="col card mb-3">
            <div class="card-header text-center bg-white">
                <h1>Result Here</h1>
            </div>
            <div class="card-body text-left">
                <h4 class="border-bottom pb-3">Full Name : <?= 'Md Riad Hasan' ?></h4>
                <h4 class="border-bottom pb-3">Roll No : <?= 1 ?></h4>
                <h4 class="border-bottom pb-3">Year : <?= 2022 ?></h4>
                <h4 class="border-bottom pb-3">Class : <?= 5 ?></h4>
                <h4 class="border-bottom pb-3">Number Of Subjects : <?= '3' ?></h4>
                <h4 class="border-bottom pb-3">Bangla : <?= 60 ?></h4>
                <h4 class="border-bottom pb-3">English : <?= 70 ?></h4>
                <h4 class="border-bottom pb-3">Math : <?= 80 ?></h4>
                <h4>Total Mark : <?= 210 ?></h4>
            </div>
            <div class="card-footer">
                <form action="index.php">
                    <input type="submit" class="btn btn-success btn-md px-3" value="Search Result Again" id="searchresultagain" name="search_result_again">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>