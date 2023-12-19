<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }
$userid = $_SESSION['userid'];
$password  = $_SESSION['password'];

$id = $_GET['id'];

$select = mysqli_query($conn, 
"SELECT * FROM users  WHERE userid = '$id'");
while ($row = mysqli_fetch_array($select))
{
    $userid             =$row['userid'];
    $fullname           = $row['fullname'];
    $username           = $row['username'];
    $email              =$row['email'];
    $password           = $row['password'];
    $position           = $row['position'];
   
}
?>
<head>
    <title>User Delete Confirmation</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>Are you sure you want to delete this user?</h3>
            <strong>Full Name: <?php echo $fullname ?></strong><br>
            <strong>User Name: <?php echo $username ?></strong><br>
            <strong>Email: <?php echo $email ?></strong><br>
            <strong>Password: <?php echo $password ?></strong><br>
            <strong>Position: <?php echo $position ?></strong><br>

            <br>
            <a href = "user.delete.php?id=<?php echo $id?>">
                <input type="submit" class="del" value="Delete Permanently">
            </a>
            <br>
            <br>
            <form action="admin.view.php" method="POST">
                <input type="submit" class="butt" value="Back to Admin">
            </form>
        </div>
    </div>
</body>