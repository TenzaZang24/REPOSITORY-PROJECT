<?php
include "../login.connect.php";
session_start();


if($_SESSION['userid'] == null){
    header("Location:../login.view.php");
  }

$userid =$_SESSION['userid'];


$id = $_GET['id'];

$select = mysqli_query($conn, 
"SELECT * FROM sijadata  WHERE poleNum = '$id'");
while ($row = mysqli_fetch_array($select))
{
    $userid=$row['userid'];
    $poleNum= $row['poleNum'];
    $fromBus	         = $row['fromBus'];
    $toBus          = $row['toBus'];
    $poleClass          = $row['poleClass'];
    $poleType         = $row['lineType'];


    $consTypePri            =$row['consTypePri'];
    $consTypeSec         = $row['consTypeSec'];
    $phasing          = $row['phasing'];
    $config          = $row['config'];
    $ground         = $row['ground'];



    $condType            =$row['condType'];
    $neuType         = $row['neuType'];
    $DTrate          = $row['DTrate'];
    $DTphase          = $row['DTphase'];
    $DTbrand         = $row['DTbrand'];


    $DTname            =$row['DTname'];
    $EquipInst         = $row['EquipInst'];
    $distFrom          = $row['distFrom'];
    $kwhMeter          = $row['kwhMeter'];
    $guy                = $row['guy'];


    $date            =$row['date'];
    $coorLat         = $row['coorLat'];
    $coorLong          = $row['coorLong'];
    $remark          = $row['remark'];
    

   


   
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
            <form action="pole.update.php" method="POST">
                <table>
                <div class="row">

                <tr>
                    <td><input type="hidden" name="poleNum" value="<?php echo $id?>"></td>
                </tr>


                <tr>
                    <td>poleNum	 </td>
                    <td><input type="text" class="mb-2 form-control" required name="poleNum	" value="<?php echo $poleNum?>"></td>
                </tr>

                <tr>
                <td>fromBus: </td>
                    <td><input type="text" class="mb-2 form-control" required name="fromBus" value="<?php echo $fromBus?>"></td>
                </tr>
                <tr>
                
                <tr>
                    <td>toBus: </td>
                    <td><input type="text" class="mb-2 form-control" required name="toBus" value="<?php echo $toBus?>"></td>
                </tr>
                <tr>
                    <td>poleClass: </td>
                    <td><input type="text" class="mb-2 form-control" required name="toBus" value="<?php echo $toBus?>"></td>
                </tr>



                <tr>
                    <td>poleType</td>
                    <td><input type="text" class="mb-2 form-control" required name="poleTyp" value="<?php echo $poleType?>"></td>
                </tr>

                <tr>
                <td>lineType: </td>
                    <td><input type="text" class="mb-2 form-control" required name="lineType" value="<?php echo $lineType?>"></td>
                </tr>
                <tr>
                
                <tr>
                    <td>consTypePri: </td>
                    <td><input type="text" class="mb-2 form-control" required name="consTypePri" value="<?php echo $consTypePri?>"></td>
                </tr>
                <tr>
                    <td>consTypeSec: </td>
                    <td><input type="text" class="mb-2 form-control" required name="consTypeSec" value="<?php echo $consTypeSec?>"></td>
                </tr>



                <tr>
                    <td>phasing	 </td>
                    <td><input type="text" class="mb-2 form-control" required name="phasing	" value="<?php echo $phasing?>"></td>
                </tr>

                <tr>
                <td>config: </td>
                    <td><input type="text" class="mb-2 form-control" required name="config" value="<?php echo $config?>"></td>
                </tr>
                <tr>
                
                <tr>
                    <td>ground: </td>
                    <td><input type="text" class="mb-2 form-control" required name="ground" value="<?php echo $ground?>"></td>
                </tr>
                <tr>
                    <td>condType: </td>
                    <td><input type="text" class="mb-2 form-control" required name="condType" value="<?php echo $condType?>"></td>
                </tr>



                <tr>
                    <td>neuType	 </td>
                    <td><input type="text" class="mb-2 form-control" required name="neuType" value="<?php echo $neuType?>"></td>
                </tr>

                <tr>
                <td>DTrate: </td>
                    <td><input type="text" class="mb-2 form-control" required name="DTrate" value="<?php echo $DTrate?>"></td>
                </tr>
                <tr>
                
                <tr>
                    <td>DTphase: </td>
                    <td><input type="text" class="mb-2 form-control" required name="DTphase" value="<?php echo $DTphase?>"></td>
                </tr>
                <tr>
                    <td>DTbrand: </td>
                    <td><input type="text" class="mb-2 form-control" required name="DTbrand" value="<?php echo $DTbrand?>"></td>
                </tr>


                <tr>
                    <td>DTname:	 </td>
                    <td><input type="text" class="mb-2 form-control" required name="DTname" value="<?php echo $DTname?>"></td>
                </tr>

                <tr>
                <td>EquipInst: </td>
                    <td><input type="text" class="mb-2 form-control" required name="EquipInst" value="<?php echo $EquipInst?>"></td>
                </tr>
                <tr>
                
                <tr>
                    <td>distFrom: </td>
                    <td><input type="text" class="mb-2 form-control" required name="distFrom" value="<?php echo $distFrom?>"></td>
                </tr>
                <tr>
                    <td>kwhMeter: </td>
                    <td><input type="text" class="mb-2 form-control" required name="kwhMeter" value="<?php echo $kwhMeter?>"></td>
                </tr>


                <tr>
                    <td>guy:	 </td>
                    <td><input type="text" class="mb-2 form-control" required name="guy" value="<?php echo $guy?>"></td>
                </tr>

                <tr>
                <td>date: </td>
                    <td><input type="text" class="mb-2 form-control" required name="date" value="<?php echo $date?>"></td>
                </tr>
                <tr>
                
                <tr>
                    <td>coorLat: </td>
                    <td><input type="text" class="mb-2 form-control" required name="coorLat" value="<?php echo $coorLat?>"></td>
                </tr>
                <tr>
                    <td>coorLong: </td>
                    <td><input type="text" class="mb-2 form-control" required name="coorLong" value="<?php echo $coorLong?>"></td>
                </tr>
                <tr>
                    <td>remark: </td>
                    <td><input type="text" class="mb-2 form-control" required name="remark" value="<?php echo $remark?>"></td>
                </tr>



                
                </div>
                </table>
                <br>
                <input class="butt" type="submit" value="Edit User">
            </form>
            <form action="admin.view.php" method="POST">
	            <input type="submit" class="butt2" value="Back to Admin">
            </form>
            </div>
        </div>
    </div>
</body>