<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSR - Primary School Result</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
	<div class="container-fluid m-0 p-0" id="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">PSR</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="student-add.php">Add Student</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="student-list.php">Student List</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="result-add.php">Add Result</a>
		        </li>

		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="result-list.php">Result List</a>
		        </li>

		      </ul>
		      <form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-danger" type="submit">Search</button>
		      </form>
		      <a class="btn btn-outline-light ms-2" href="logout.php">Logout</a>
		    </div>
		  </div>
		</nav>
	</div>
