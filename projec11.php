<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="project1.css" type="text/css" rel="stylesheet"/>
        <title> control Interface </title>
    </head>
    <body >
        <div class="main1">

        <?php 
            session_start();
            $con=mysqli_connect('127.0.0.1','root','','control_interface1');
            $check=mysqli_select_db($con,"control_interface1");
           // if($check){
             //   echo "conect";
            //}
            
        ?>

        <?php 
                             echo "   *   *   *   *   on   *   *   *   *   *   *   *   * <br> ";
            //$get_lasr_record ="SELECT * FROM `motors` ORDER BY id DESC LIMIT 1";
            $get_lasr_record=mysqli_query($con,"SELECT * FROM `motors` ORDER BY id DESC LIMIT 1");
            while ($row=mysqli_fetch_array($get_lasr_record)) {
               
                echo " the angle of motor 1 is: ".$row['motor1']."<br>";
                echo " the angle of motor 2 is: ".$row['motor2']."<br>";
                echo " the angle of motor 3 is: ".$row['motor3']."<br>";
                echo " the angle of motor 4 is: ".$row['motor4']."<br>";
                echo " the angle of motor 5 is: ".$row['motor5']."<br>";
                echo " the angle of motor 6 is: ".$row['motor6']."<br>";
                # code...
            }
        
            
        ?>
        </div>
    </body>
</html>  
        
           
        