<?php include 'header.php' ?>
<div class="container mt-3 main">
  <div class="row">
    <div class="col-md-12">
      <h1 class="border-bottom pb-2">Add New Student</h1>
    </div>
  </div>
  <form action="">
    <div class="row">
      <div class="col-md-6">
        <label for="addstudent" class="form-label">Select Year</label>
        <select class="form-select mb-3">
          <option selected>Select Year</option>
          <option value="2020" <?= date('Y') == 2020 ? 'selected' : ''; ?>>2020</option>
          <option value="2021" <?= date('Y') == 2021 ? 'selected' : ''; ?>>2021</option>
          <option value="2022" <?= date('Y') == 2022 ? 'selected' : ''; ?>>2022</option>
          <option value="2023" <?= date('Y') == 2023 ? 'selected' : ''; ?>>2023</option>
          <option value="2024" <?= date('Y') == 2024 ? 'selected' : ''; ?>>2024</option>
          <option value="2025" <?= date('Y') == 2025 ? 'selected' : ''; ?>>2025</option>
          <option value="2026" <?= date('Y') == 2026 ? 'selected' : ''; ?>>2026</option>
          <option value="2027" <?= date('Y') == 2027 ? 'selected' : ''; ?>>2027</option>
          <option value="2028" <?= date('Y') == 2028 ? 'selected' : ''; ?>>2028</option>
          <option value="2029" <?= date('Y') == 2029 ? 'selected' : ''; ?>>2029</option>
          <option value="2030" <?= date('Y') == 2030 ? 'selected' : ''; ?>>2030</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="class" class="form-label">Select Class</label>
        <select class="form-select mb-3" name="std_class">
          <option selected>Select Classs</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
    </div>
    <div class="mb-3">
      <label for="studentroll" class="form-label">Student Roll</label>
      <input type="number" class="form-control" id="studentroll" name="std_roll" placeholder="Enter Roll No">
    </div>
    <div class="mb-3">
      <label for="studentname" class="form-label">Student Name</label>
      <input type="text" class="form-control" id="studentname" name="std_name" placeholder="Enter Name">
    </div>
    <div class="mb-3">
      <label for="studentphone" class="form-label">Student Phone No</label>
      <input type="text" class="form-control" id="studentphone" name="std_phone" placeholder="Enter Phone No">
    </div>
    <div class="mb-3">
      <label for="studentemail" class="form-label">Student Email</label>
      <input type="email" class="form-control" id="studentemail" name="std_email" placeholder="example@mail.com">
    </div>
    <div class="mb-3">
      <label for="studentnote" class="form-label">Student Note Here</label>
      <textarea class="form-control" id="studentnote" name="std_note" rows="2"></textarea>
      <input class="btn btn-success btn-md px-3 mt-3" name="reg_student" type="submit" id="stdregbtn" value="Registration">
    </div>
  </form>
</div>
<?php include "footer.php" ?>