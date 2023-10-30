<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:./login.php");
}
$username = $_SESSION["username"];
$role = $_SESSION["role"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
          <li><a href="#"></a></li>
          <li class="active"><a href="#">
              <?php echo "Role: " . $_SESSION["role"] ?>
            </a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
      </div>
      <div class="col-sm-8 text-left">

        <h1 style="text-align: center; color:green;">Hi
          <?php echo $username; ?> ,Welcome to our website
        </h1>
        <h2>Username:
          <?php echo $username ?>
        </h2>
        <h2>Role:
          <?php echo $role ?>
        </h2>
        <h2>Email:
          <?php echo $_SESSION["email"] ?>
        </h2>
      </div>
      <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>