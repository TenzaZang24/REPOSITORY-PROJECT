<?php
include "../login.connect.php";
session_start();

if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }
$userid    = $_SESSION['userid'];
$password  = $_SESSION['password'];

$candidateid        = $_POST['candidateid'];
$firstname          = $_POST['firstname'];
$lastname           = $_POST['lastname'];
$middlename         = $_POST['middlename'];
//$partylistid        = $_POST['partylistid'];
//$positionid         = $_POST['positionid'];

$update = mysqli_query($conn, "UPDATE candidate
LEFT OUTER JOIN users ON candidate.userid = users.userid 
LEFT OUTER JOIN position ON candidate.positionid = position.positionid 
LEFT OUTER JOIN partylist ON candidate.partylistid = partylist.partylistid
SET lastname = '$lastname'," . "firstname = '$firstname', middlename = '$middlename'" . "WHERE candidateid = '$candidateid'");
// , partylistid = '$partylistid', positionid = '$positionid' 

if($update === true)
{
?>
<head>
    <title>Candidate Update Status</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>Candidate Information Updated!</h3>
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