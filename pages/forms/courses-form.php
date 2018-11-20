<?php 
require("../../includes/authenticate.php");   
?>
<?php         
if(isset($_SESSION["sessionPass"]))         
{             
    if(($_SESSION["sessionPass"]) == ($_SESSION["sessionUsPas"]))  
    {                 
        //sessionExpire();
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../../favicon.png">
  <title>Add Courses to Programme</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="">
      <img src="../../media/cslogo.svg" width="30" height="30" class="d-inline-block align-top" alt="Department of Computer Science Logo">
      Department of Computer Science
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../../index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../pages/programmes">Programmes Offered</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../pages/staff">Staff</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clubs
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../pages/clubs/cyber-security">Cyber Security</a>
            <a class="dropdown-item" href="../pages/clubs/foss">Free and Open Source Software</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../pages/alumni">Alumni</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin Forms
          </a>
          <div class="dropdown-menu" aria-labelledby="adminForms">
            <a class="dropdown-item" href="alumni-form">Add Alumni</a>
            <a class="dropdown-item" href="club-form">Add Club</a>
            <a class="dropdown-item" href="courses-form">Add Courses</a>
            <a class="dropdown-item" href="activity-form">Add Department Activity</a>
            <a class="dropdown-item" href="programme-form">Add Programme</a>
            <a class="dropdown-item" href="staff-form">Add Staff &amp; Staff Research</a>
            <a class="dropdown-item" href="undergraduate-form">Add Undergraduate Research</a>
          </div>
        </li>
      </ul>
               
        <form method="post" class="form-inline my-2 my-lg-0">           
            <button class="btn btn-outline-danger my-2 my-sm-0" name="logout" type="submit">Logout</button>         
        </form>         
        
        
    </div>
  </nav>
  
  <br>

  <div class="container h-100">
    
    <div class="row h-100 justify-content-center">
      <form action="#" method="post" class="col-5">
        <img class="logo-sm mx-auto" src="../../media/cslogo.svg" alt="Department of Computer Science Logo">
        <br>
        <h3 class="text-center">Add Courses to Programme</h3>
        <br>
        <div class="form-group">
          <label for="name">Course Name</label>
          <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter course name">
        </div>
        <div class="form-group">
          <label for="course-code">Course Code</label>
          <input type="text" class="form-control form-control-sm" name="course-code" placeholder="CSE.... MTH....">
        </div>
        <div class="form-group">
          <label for="course-description">Description</label>
          <textarea class="form-control form-control-sm" name="course-description" placeholder="Enter short course description"></textarea>
        </div>
        <div class="form-group">
          <label for="course-year">Select Course Year</label>
          <select class="form-control" name="course-year">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <div class="form-group">
          <label for="programme">Select Programme</label> <!-- POPULATE USING PHP -->
          <select class="form-control" name="programme">
            <option>Associates Degree in Computer Science</option>
            <option>Bachelors Degree in Computer Science</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" name="courses-form" class="btn btn-block btn-success">Add Course</button>
          <a class="btn btn-block btn-danger" href="../../index" role="button">Cancel</a>
        </div>
      </form>
    </div>

  </div>

    <?php     
    }         
}          
else         
{         
    ?>         
    <form action="../../index.php" method="post" class="form-inline my-2 my-lg-0">             <button class="btn btn-outline-success my-2 my-sm-0" name="nav-login"    type="submit">Login</button>         
    </form>    
    <?php } ?>
    
  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
