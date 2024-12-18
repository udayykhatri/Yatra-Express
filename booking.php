<?php
$con=mysqli_connect('localhost:3306','root','','travel');

$firstname=$_POST['ffirst'];
$email=$_POST['femail'];
$destination=$_POST['fdesti'];

$sql="INSERT INTO `booking`(`id`,`ffirst`,`femail`,`fdesti`) VALUES (0,'$firstname','$email','$destination')";
$result = mysqli_query($con,$sql);


if($result){
    ?>
    <script type="text/javascript">
      alert("Booking Successful")
    </script>
    <?php
  }


?>
