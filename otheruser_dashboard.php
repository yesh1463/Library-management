<?php

session_start();

$userloginid=$_SESSION["userid"] = $_GET['userlogid'];
// echo $_SESSION["userid"];


?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <style>
            .innerright,label {
    color: rgb(16, 170, 16);
    font-weight:bold;
}
.container,
.row,
.imglogo {
    margin:auto;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 100px;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
    background-color: #ADD8E6;
}

.greenbtn {
    background-color: lightgray;
    color: black;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.greenbtn,
a {
    text-decoration: none;
    color: black;
    font-size: large;
    cursor: pointer;
}
.greenbtn:hover{
    color:red;
    background-color:white;
    transform:scale(1.1);
}

th{
    background-color: #16DE52;
    color: black;
}
td{
    background-color:#b1fec7;
    color: black;
}
td, a{
    color:black;
}
    </style>
    <body>

    <?php
   include("data_class.php");
    ?>
           <div class="container">
            <div class="innerdiv">
            <div class="row"><img class="imglogo" src="data:image/png;base64,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"/></div>
            <div class="leftinnerdiv">
                <br>
                <Button class="greenbtn" onclick="openpart('myaccount')"> <img class="icons" src="images/icon/profile.png" width="30px" height="30px"/>  My Account</Button>
                <Button class="greenbtn" onclick="openpart('requestbook')"><img class="icons" src="images/icon/book.png" width="30px" height="30px"/> Request Book</Button>
                <Button class="greenbtn" onclick="openpart('issuereport')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px"/>  Book Report</Button>
                <a href="index.php"><Button class="greenbtn" ><img class="icons" src="images/icon/logout.png" width="30px" height="30px"/> LOGOUT</Button></a>
            </div>


            <div class="rightinnerdiv">   
            <div id="myaccount" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="greenbtn" >My Account</Button>

            <?php

            $u=new data;
            $u->setconnection();
            $u->userdetail($userloginid);
            $recordset=$u->userdetail($userloginid);
            foreach($recordset as $row){

            $id= $row[0];
            $name= $row[1];
            $email= $row[2];
            $pass= $row[3];
            $type= $row[4];
            }               
                ?>

            <p style="color:black">Student or teacher Name : &nbsp&nbsp<?php echo $name ?></p>
            <p style="color:black">Student or teacher Email: &nbsp&nbsp<?php echo $email ?></p>
            <p style="color:black">Role                    :</u> &nbsp&nbsp<?php echo $type ?></p>
        
            </div>
            </div>


            



            <div class="rightinnerdiv">   
            <div id="issuereport" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo "display:none"; }?>">
            <Button class="greenbtn" >BOOK RECORD</Button>

            <?php

            $userloginid=$_SESSION["userid"] = $_GET['userlogid'];
            $u=new data;
            $u->setconnection();
            $u->getissuebook($userloginid);
            $recordset=$u->getissuebook($userloginid);

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>Name</th><th>Book Name</th><th>Issue Date</th><th>Return Date</th><th>Fine</th></th><th>Return</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'><button type='button' class='btn btn-primary'>Return</button></a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="return" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ $returnid=$_REQUEST['returnid'];} else {echo "display:none"; }?>">
            <Button class="greenbtn" >Return Book</Button>

            <?php

            $u=new data;
            $u->setconnection();
            $u->returnbook($returnid);
            $recordset=$u->returnbook($returnid);
                ?>

            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="requestbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ $returnid=$_REQUEST['returnid'];echo "display:none";} else {echo "display:none"; }?>">
            <Button class="greenbtn" >Request Book</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr>
            <th>Image</th><th>Book Name</th><th>Book Authour</th><th>branch</th><th>price</th></th><th>Request Book</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
               $table.="<td><img src='uploads/$row[1]' width='100px' height='100px' style='border:1px solid #333333;'></td>";
               $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td><a href='requestbook.php?bookid=$row[0]&userid=$userloginid'><button type='button' class='btn btn-primary'>Request Book</button></a></td>";
           
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;


                ?>

            </div>
            </div>

        </div>
        </div>


        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }

   
 
        
        </script>
    </body>
</html>