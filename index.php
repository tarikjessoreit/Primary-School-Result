<?php include 'header.php' ?>
<div class="container user-main main">
    <div class="row">
        <div class="col card mb-3">
            <div class="card-header text-center bg-white">
                <h1>Enter Your Information For Search Result</h1>
            </div>
            <div class="card-body col-md-12">
                <form action="show-result.php" method="" class="row">
                    <div class="form-group p-3 col-md-3">
                        <label for="selectyear" class="">Select Year</label>
                        <select class="form-control" id="selectyear">
                            <option>Select Year</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                            <option>2030</option>
                        </select>
                    </div>
                    <div class="form-group p-3 mt-0 col-md-3">
                        <label for="selectclass" class="">Select Class</label>
                        <select class="form-control" id="selectclass">
                            <option>Select Class</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group p-3 col-md-3">
                        <label for="inputroll">Enter Roll</label>
                        <input type="number" class="form-control " id="inputroll" placeholder="Enter Roll No">
                    </div>

                    <div class="form-group p-3 col-md-3 d-flex align-items-center">
                        <input type="submit" class="btn btn-success btn-md px-3 ms-3 mt-3" value="Search Result" id="searchresult" name="search_result">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>