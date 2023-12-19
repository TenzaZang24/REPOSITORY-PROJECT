<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }
$userid    = $_SESSION['userid'];
$password  = $_SESSION['password'];

$id	= $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM candidate WHERE candidateid = '$id'");

if($delete === true)
{
?>
<head>
    <title>Candidate Delete Status</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>Candidate Information Deleted!</h3>
            <form action='admin.view.php' method='POST'>
                <input type='submit' class='butt' value='Back to Admin'>
            </form>
        </div>
    </div>
<?php

}
else
{
	echo 'An error occured';
}

?> 
</body>