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
    color: #EB5406;
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
    background-color: #D3D3D3;
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
    cursor:pointer;
    
}
.greenbtn:hover{
    color:red;
    background-color:white;
    transform:scale(1.1);
}

th{
    background-color: #2AB67B;
    color: black;
}
td{
    background-color: #b1fec7;
    color: black;
    
}
td, a{
    color:black;
    background-color:light green;
}
td,a:hover{
    color:red;
    
   
}


        /* * {
            box-sizing: border-box;
            font-family: 'Roboto';
        } */
        
        label {
            margin-left:50px;
            padding-Top:10px;
            /* display: block;
            text-align: left; */
            font-size: 18px;
            /* font-style:bold;
            padding-bottom: 0px; */
            color: rgb(51, 51, 51);
            /* font-weight: 300;
            margin-bottom: 0rem; */
        }
        
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        input[type=text]:focus,
        input[type=email]:focus,
        input[type=number]:focus,
        input[type=pasword]:focus,

        select:focus,
        textarea:focus {
            outline: none;
        }
        
        input[type=text],
        input[type=email],
        input[type=number],
        input[type=pasword],
        select,
        textarea {
            
            width: 40%;
            padding: 2px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 2px;
            margin-bottom: 2px;
            resize: vertical;
        }
        


        
        body {
            font-family: 'Roboto';
            /* background-image: url('images/library.jpg'); */
         
        }
        


        
         ::placeholder {
            color: rgb(189, 184, 184);
            font-style: italic;
            font-size: 14px;
        }



        

 
    </style>
    <body >

    <?php
   include("data_class.php");

$msg="";

   if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

if($msg=="done"){
    echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
}
elseif($msg=="fail"){
    echo "<div class='alert alert-danger' role='alert'>Fail</div>";
}

    ?>



        <div class="container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="data:image/png;base64,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"/></div>
            <div class="leftinnerdiv">
                <!-- <Button class="greenbtn"> ADMIN</Button> -->
                <br>
                <Button class="greenbtn" onclick="openpart('addbook')" ><img class="icons" src="images/icon/book.png" width="30px" height="30px" >  ADD BOOK</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')" > <img class="icons" src="images/icon/open-book.png" width="30px" height="30px"/> BOOK RECORD</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"><img class="icons" src="images/icon/interview.png" width="30px" height="30px"/> BOOK REQUESTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')"> <img class="icons" src="images/icon/add-user.png" width="30px" height="30px"/> ADD STUDENT</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px"/> STUDENT REPORT</Button>
                <Button class="greenbtn"  onclick="openpart('issuebook')"> <img class="icons" src="images/icon/test.png" width="30px" height="30px"/> ISSUE BOOK</Button>
                <Button class="greenbtn" onclick="openpart('issuebookreport')"> <img class="icons" src="images/icon/checklist.png" width="30px" height="30px"/> ISSUE REPORT</Button>
                <a href="index.php"><Button class="greenbtn" ><img class="icons" src="images/icon/book.png" width="30px" height="30px"/> LOGOUT</Button></a>
            </div>

            <div class="rightinnerdiv">   
            <div id="bookrequestapprove" class="innerright portion" style="display:none">
            <Button class="greenbtn" >BOOK REQUEST APPROVE</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->requestbookdata();
            $recordset=$u->requestbookdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='
            padding: 8px;'>Person Name</th><th>person type</th><th>Book name</th><th>Days </th><th>Approve</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
              "<td>$row[1]</td>";
              "<td>$row[2]</td>";

                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[6]</td>";
              $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approve BOOK</button></a></td>";
              //   $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approved</button></a></td>";
                 $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                 $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="addbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="greenbtn" >ADD NEW BOOK</Button>
            <br>
            <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
            <label>Book Name:</label><input type="text" name="bookname"/>
            </br>
            <label>Detail:</label><input  type="text" name="bookdetail"/></br>
            <label>Autor:</label><input type="text" name="bookaudor"/></br>
            <label>Publication</label><input type="text" name="bookpub"/></br>
            <div><label>Branch:</label><input type="radio" name="branch" value="other"/>Other<input type="radio" name="branch" value="BSIT"/>CSE<div style="margin-left:80px"><input type="radio" name="branch" value="BSCS"/>MECH<input type="radio" name="branch" value="BSSE"/>CIVIL</div>
            </div>   
            <label>Price:</label><input  type="number" name="bookprice"/></br>
            <label>Quantity:</label><input type="number" name="bookquantity"/></br>
            <label>Book Photo</label><input  type="file" name="bookphoto"/></br>
            </br>
   
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>

            </form>
            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="addperson" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ADD Person</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label><input type="text" name="addname"/>
            </br>
            <label>Pasword:</label><input type="pasword" name="addpass"/>
            </br>
            <label>Email:</label><input  type="email" name="addemail"/></br>
            <label for="typw">Choose type:</label>
            <select name="type" >
                <option value="student">student</option>
                <option value="teacher">teacher</option>
            </select>

            <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="studentrecord" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Student RECORD</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'> Name</th><th>Email</th><th>Type</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="issuebookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Issue Book Record</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->issuereport();
            $recordset=$u->issuereport();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>Issue Name</th><th>Book Name</th><th>Issue Date</th><th>Return Date</th><th>Fine</th></th><th>Issue Type</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[4]</td>";
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

<!--             

issue book -->
            <div class="rightinnerdiv">   
            <div id="issuebook" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ISSUE BOOK</Button>
            <form action="issuebook_server.php" method="post" enctype="multipart/form-data">
            <label for="book">Choose Book:</label>
           
            <select name="book" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();
            foreach($recordset as $row){

                echo "<option value='". $row[2] ."'>" .$row[2] ."</option>";
        
            }            
            ?>
            </select>
<br>
            <label for="Select Student">Select Student:</label>
            <select name="userselect" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();
            foreach($recordset as $row){
               $id= $row[0];
                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
            }            
            ?>
            </select>
<br>
           <label>Days</label> <input type="number" name="days"/>

            <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="bookdetail" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ $viewid=$_REQUEST['viewid'];} else {echo "display:none"; }?>">
            
            <Button class="greenbtn" >BOOK DETAIL</Button>
</br>
<?php
            $u=new data;
            $u->setconnection();
            $u->getbookdetail($viewid);
            $recordset=$u->getbookdetail($viewid);
            foreach($recordset as $row){

                $bookid= $row[0];
               $bookimg= $row[1];
               $bookname= $row[2];
               $bookdetail= $row[3];
               $bookauthour= $row[4];
               $bookpub= $row[5];
               $branch= $row[6];
               $bookprice= $row[7];
               $bookquantity= $row[8];
               $bookava= $row[9];
               $bookrent= $row[10];

            }            
?>

            <img width='150px' height='150px' style='border:1px solid #333333; float:left;margin-left:20px' src="uploads/<?php echo $bookimg?> "/>
            </br>
            <p style="color:black"><u>Book Name:</u> hello world<?php echo $bookname ?></p>
            <p style="color:black"><u>Book Detail:</u> &nbsp&nbsp<?php echo $bookdetail ?></p>
            <p style="color:black"><u>Book Authour:</u> &nbsp&nbsp<?php echo $bookauthour ?></p>
            <p style="color:black"><u>Book Publisher:</u> &nbsp&nbsp<?php echo $bookpub ?></p>
            <p style="color:black"><u>Book Branch:</u> &nbsp&nbsp<?php echo $branch ?></p>
            <p style="color:black"><u>Book Price:</u> &nbsp&nbsp<?php echo $bookprice ?></p>
            <p style="color:black"><u>Book Available:</u> &nbsp&nbsp<?php echo $bookava ?></p>
            <p style="color:black"><u>Book Rent:</u> &nbsp&nbsp<?php echo $bookrent ?></p>


            </div>
            </div>



            <div class="rightinnerdiv">   
            <div id="bookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >BOOK RECORD</Button>
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbook();
            $recordset=$u->getbook();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'>Book Name</th><th>Price</th><th>Qnt</th><th>Available</th><th>Rent</th></th><th>View</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[9]</td>";
                $table.="<td>$row[10]</td>";
                $table.="<td><a href='admin_service_dashboard.php?viewid=$row[0]'><button type='button' class='btn btn-primary'>View BOOK</button></a></td>";
                $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                 $table.=$row[0];
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