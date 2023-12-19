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
    $partyname          = $row['partyname'];
    $positionname       = $row['positionname'];
}
?>
<head>
    <title>Candidate Delete Confirmation</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="../js/bootstrap.bundle.min.js"></script>
</head>
<body class="bgi">
    <div class="container text-center">
        <div class="position-absolute top-50 start-50 translate-middle bg-white border border-black p-4 rounded-4 bg-opacity-25 text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <h3>Are you sure you want to delete this candidate?</h3>
            <strong>Candidate ID: <?php echo $candidateid ?></strong><br>
            <strong>First Name: <?php echo $firstname ?></strong><br>
            <strong>Middle Name: <?php echo $middlename ?></strong><br>
            <strong>Last Name: <?php echo $lastname ?></strong><br>
            <strong>Partylist: <?php echo $partyname ?></strong><br>
            <strong>Position: <?php echo $positionname ?></strong><br>
            <br>
            <a href = "candidate.delete.php?id=<?php echo $id?>">
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