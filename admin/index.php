<?php include "../include/config.php"; ?>

<?php 
// check existing user
if (isset($_SESSION['log_status'])) {
    if ($_SESSION['log_status']===true) {
    header('location:dashboard.php');
    }
}

// login check
if (isset($_POST['login_btn'])) {
    $uname = $_POST['uname'];
    $pass = md5($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE username = '$uname' and user_password = '$pass' LIMIT 1";
    $r = $conn->query($sql);

    if ($r->num_rows > 0) {
        while($row = $r->fetch_assoc()){
            $_SESSION['log_status'] = true;
            $_SESSION['userID'] = $row['ID'];
            $_SESSION['username'] = $row['username'];

            header('location:dashboard.php');
        }
    }else{
        $err = "Wrong Username & Password";
    }

}
    

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body id="login">
    <div class="container-fluid p-0 mx-0 mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PSR</a>
            </div>
        </nav>
    </div>
    <div class="container mt-3 main">
        <div class="row login p-5">
        <h3 class="text-light text-center mb-3">Login Please</h3>
            <div class="col-md-12">

                <?php if(isset($err)){ ?>
                <div class="alert alert-danger">
                    <?php echo $err; ?>
                </div>
                <?php } ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" name="uname" placeholder="Enter Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                    </div>
                    <input class="btn btn-outline-light px-5" name="login_btn" type="submit" id="login" value="Login">
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>