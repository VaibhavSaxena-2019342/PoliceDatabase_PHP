<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITE_TITLE; ?></title>
	<link rel="stylesheet" href="css/cssheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.1/vapor/bootstrap.min.css">
</head>
<body>
	<div class="container">
      <div class="header clearfix">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">POLICE DATABASE</a>

    <div class="navside">
      <ul class="navbar-nav me-auto">
        <li>
          <a class="navlink" href="/policedb/index.php">Home</a>
        </li>
        <li>
          <a class="navlink" href="/policedb/create.php">New Record</a>
        </li>
        <li>
          <a class="navlink" href="/policedb/create2.php">Add Crime Type</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      </div>
      <?php //displayMessage(); ?>