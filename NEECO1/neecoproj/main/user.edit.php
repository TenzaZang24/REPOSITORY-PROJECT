<?php
include "../login.connect.php";
session_start();


if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }

$userid =$_SESSION['userid'];
$password  = $_SESSION['password'];

$id = $_GET['id'];

$select = mysqli_query($conn, 
"SELECT * FROM users  WHERE userid = '$id'");
while ($row = mysqli_fetch_array($select))
{
    $userid            =$row['userid'];
    $fullname         = $row['fullname'];
    $username          = $row['username'];
    $email             =$row['email'];
    $password          = $row['password'];
    $position         = $row['position'];
   
}
?>
<head>
    <title>User Edit Status</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>Edit User Information</h3>
            <div class="form-group">
            <form action="user.update.php" method="POST">
                <table>
                <div class="row">

                <tr>
                    <td><input type="hidden" name="userid" value="<?php echo $id?>"></td>
                </tr>


                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" class="mb-2 form-control" required name="fullname" value="<?php echo $fullname?>"></td>
                </tr>

                <tr>
                <td>User Name: </td>
                    <td><input type="text" class="mb-2 form-control" required name="username" value="<?php echo $username?>"></td>
                </tr>

                <tr>
                <td>Email: </td>
                    <td><input type="text" class="mb-2 form-control" required name="email" value="<?php echo $email?>"></td>
                </tr>


               
                
                <tr>
                    <td>Password: </td>
                    <td><input type="text" class="mb-2 form-control" required name="password" value="<?php echo $password?>"></td>
                </tr>
                <tr>
                    <td>Position: </td>
                   
                 <td><select name="position" id="position" required class="mb-2 form-control"   value="<?php echo $position?>">
    
                  <option value="">Position</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                  </select></td>


                </tr>
                
                </div>
                </table>
                <br>
                <input class="butt" type="submit" value="Update User">
            </form>
            <form action="admin.view.php" method="POST">
	            <input type="submit" class="butt2" value="Back to Admin">
            </form>
            </div>
        </div>
    </div>
</body>