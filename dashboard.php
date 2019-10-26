<!DOCTYPE html>
<head>
  <title>recruiting companies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h2{
    
    font-family:"Times New Roman", Times, serif;
    color: #000066;
  }
  
</style>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="waste.php" style="margin-left: 920px" >Edit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php" style="margin-left: 50px">Logout</a>
    </li>
  </ul>
</nav>
  <h2>     </h2>
  <div class="row">
  <div class="column"><a href="amazon.php"> <img src="amazon_logo.png"> </a> </div>
  <div class="column"><a href="google.php"> <img src="google_logo.png" width="300" height="300"> </a> </div>
  <div class="column"><a href="microsoft.php"> <img src="microsoft_logo.jpg" width="350" height="300"> </a> </div>
  </div>
</body>
</html>