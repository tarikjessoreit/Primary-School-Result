<?php include 'header.php' ?>
<?php 
if (isset($_POST['login_btn'])) {
    $uname = $_POST['uname'];
    $pass = md5($_POST['password']);
    $user_rulse = $_POST['user_rulse'];
    
    $sql = "INSERT INTO users(username, user_password, user_rulses, user_status) VALUES ('$uname','$pass','$user_rulse','active')";

    if ($conn->query($sql)===true) {
        $msg = "New user added!";
    }else{
        $err = "Error: ".$conn->error;
    }
}
    

 ?>


<div class="container mt-3 main">
    <div class="row">
        <div class="col-md-12">
            <h1 class=" border-bottom mb-3 pb-3">Settings</h1>
        </div>
        <div class="col-md-12">

            <?php if(isset($err)){ ?>
            <div class="alert alert-danger">
                <?php echo $err; ?>
            </div>
            <?php } ?>

            <?php if(isset($msg)){ ?>
            <div class="alert alert-success">
                <?php echo $msg; ?>
            </div>
            <?php } ?>

            <form action="" class="was-validated" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="uname" placeholder="Enter Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                </div>

                    <div class="mb-3 col-md-6">
                            <select class="form-select" name="user_rulse" required>
                              <option selected value="">Select Rulse</option>
                              <option value="admin">Admin</option>
                              <option value="user">User</option>
                            </select>
                        </div>
                <input class="btn btn-outline-primary px-5" name="login_btn" type="submit" id="login" value="Add User">
            </form>
        </div>
    </div>
</div>
<?php include "footer.php" ?>