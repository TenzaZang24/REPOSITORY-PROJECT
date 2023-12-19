<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }
$userid    = $_SESSION['userid'];
$password  = $_SESSION['password'];

$id = $_GET['id'];

$select = mysqli_query($conn, 
"SELECT *
FROM candidate 
LEFT OUTER JOIN users ON candidate.userid = users.userid 
LEFT OUTER JOIN position ON candidate.positionid = position.positionid 
LEFT OUTER JOIN partylist ON candidate.partylistid = partylist.partylistid 
WHERE candidateid = '$id'");
while ($row = mysqli_fetch_array($select))
{
    $candidateid        = $row['candidateid'];
    $firstname          = $row['firstname'];
    $lastname           = $row['lastname'];
    $middlename         = $row['middlename'];
    $partylistid        = $row['partylistid'];
    $positionid         = $row['positionid'];
}
?>
<head>
    <title>Candidate Edit Status</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>Edit Candidate Information</h3>
            <div class="form-group">
            <form action="candidate.update.php" method="POST">
                <table>
                <div class="row">
                <tr>
                    <td><input type="hidden" name="candidateid" value="<?php echo $candidateid?>"></td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td><input type="text" class="mb-2 form-control" required name="firstname" value="<?php echo $firstname?>"></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" class="mb-2 form-control" required name="lastname" value="<?php echo $lastname?>"></td>
                </tr>
                <tr>
                    <td>Middle Name: </td>
                    <td><input type="text" class="mb-2 form-control" required name="middlename" value="<?php echo $middlename?>"></td>
                </tr>
                <!-- <tr>
                    <td>Partylist ID: </td>
                    <td><input type="text" class="mb-2 form-control" required name="partylistid" value="<?php //echo $partylistid?>"></td>
                </tr>
                <tr>
                    <td>Position ID: </td>
                    <td><input type="text" class="mb-2 form-control" required name="positionid" value="<?php //echo $positionid?>"></td>
                </tr> -->
                </div>
                </table>
                <br>
                <input class="butt" type="submit" value="Edit Student">
            </form>
            <form action="admin.view.php" method="POST">
	            <input type="submit" class="butt2" value="Back to Admin">
            </form>
            </div>
        </div>
    </div>
</body>