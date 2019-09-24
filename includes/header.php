<?php 
include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>अर्थ मन्त्रालय</title>
 <script src="admin/js/tinymce/tinymce.min.js"></script>
    <script src="admin/js/tinymce/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cms-home.css">
	<link rel="stylesheet" type="text/css" href="css/material-icons.css">
	<link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   
	
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./profile.php?section=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                    </ul>
                </li>
            </ul>
        </nav>
</head>
<body>
