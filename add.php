<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:./login.php");
}
$username = $_SESSION["username"];
$role = $_SESSION["role"];
?>
<?php
$role = $_POST["role"] ?? "";
$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$password = md5($password) ?? "";
if ($username != "" && $email != "" && $password != "") {
  $fp = fopen("data/userData.txt", "a");
  fwrite($fp, "\n {$role},{$username},{$email},{$password}");
  fclose($fp);
  header("location: admin.php");
} else {
  $errorMessage = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 600px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }

      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">crud</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="admin.php">Home</a></li>
          <li class="active"><a href="aboutAdmin.php">About Me</a></li>
          <li class="active"><a href="add.php">Add new</a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li class="active"><a href="#">
              <?php echo "Name: " . $_SESSION["username"] ?>
            </a></li>
          <li class="active"><a href="#">
              <?php echo "Role: " . $_SESSION["role"] ?>
            </a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href=".logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
      </div>
      <div class="col-sm-8 text-left">

        <form method="POST" action="add.php">
          <div class="middle" style="width: 40%; margin:auto; margin-top: 100px; ">
            <div style="text-align:center;">
              <h3>Add new member</h3>
            </div>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="form3Example1c">Role</label>
              <input type="text" name="role" id="form3Example1c" class="form-control" />
            </div>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="form3Example1c">username</label>
              <input type="text" name="username" id="form3Example1c" class="form-control" />
            </div>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="form3Example1c">Email</label>
              <input type="text" name="email" id="form3Example1c" class="form-control" />
            </div>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="form3Example1c">Password</label>
              <input type="text" name="password" id="form3Example1c" class="form-control" />
            </div>
            <div style="margin-top: 10px;">
              <button class="btn btn-success col-md-6" type="submit">Add</button>
              <a href="admin.php" class="btn btn-danger col-md-6">Cancel</a>
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>
</body>

</html>