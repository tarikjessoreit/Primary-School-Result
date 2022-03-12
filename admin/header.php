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

<body>
    <div class="container-fluid p-0 mx-0 mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php">PSR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="student-add.php">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="student-list.php">Student List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="add-result.php">Add Result</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="result-list.php">Result List</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </form>
                    <a class="btn btn-outline-light mx-2" href="index.php">Logout</a>
                </div>
            </div>
        </nav>
    </div>