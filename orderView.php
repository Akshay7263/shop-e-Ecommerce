<?php
session_start();
require("connection.php");
$cid = $_SESSION['cid'];
$sql=mysqli_query($con,"SELECT oid,pname, amount,ostatus,pstatus,paymode,pimg,DIn from custorder,product where custorder.pid=product.pid and cid=$cid and OorC=1 ORDER BY oid DESC;");



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    
<style>

    .container-fluid {
        margin-top: 200px ;
    }

    p {
        font-size: 14px;
        margin-bottom: 7px;

    }

    .small {
        letter-spacing: 0.5px !important;
    }

    .card-1 {
        box-shadow: 2px 2px 10px 0px rgb(190, 108, 170);
    }

    hr {
        background-color: rgba(248, 248, 248, 0.667);
    }


    .bold {
        font-weight: 500;
    }

    .change-color {
        color: #AB47BC !important;
    }

    .card-2 {
        box-shadow: 1px 1px 3px 0px rgb(112, 115, 139);

    }

    .fa-circle.active {
        font-size: 8px;
        color: #AB47BC;
    }

    .fa-circle {
        font-size: 8px;
        color: #aaa;
    }

    .rounded {
        border-radius: 2.25rem !important;
    }


    .progress-bar {
        background-color: #AB47BC !important;
    }


    .progress {
        height: 5px !important;
        margin-bottom: 0;
    }

    .invoice {
        position: relative;
        top: -70px;
    }

    .Glasses {
        position: relative;
        top: -12px !important;
    }

    .card-footer {
        background-color: #AB47BC;
        color: #fff;
    }

    h2 {
        color: rgb(78, 0, 92);
        letter-spacing: 2px !important;
    }
    a.con{
        
    color:#000000 !important;
    text-decoration:none;

    }

    .display-3 {
        font-weight: 500 !important;
    }

    @media (max-width: 479px) {
        .invoice {
            position: relative;
            top: 7px;
        }

        .border-line {
            border-right: 0px solid rgb(226, 206, 226) !important;
        }

    }

    @media (max-width: 700px) {

        h2 {
            color: rgb(78, 0, 92);
            font-size: 17px;
        }

        .display-3 {
            font-size: 28px;
            font-weight: 500 !important;
        }
    }

    .card-footer small {
        letter-spacing: 7px !important;
        font-size: 12px;
    }

    .border-line {
        border-right: 1px solid rgb(226, 206, 226)
    }
</style>
</head>
<body>
 
    <div class="">
<div class="d-flex flex-row align-items-center p-4 shadow">
    <a class="con" href="index.php"> 
    <i class="fa fa-long-arrow-left"></i>
    <span class="ml-2">Continue Shopping</span>
    </a>
</div>
</div>
    <div class="container-fluid my-5  d-flex  justify-content-center">
        
        <div class="card card-1">
            <div class="card-header bg-white">
                <div class="media flex-sm-row flex-column-reverse justify-content-between  ">
                    
                    <div class="col my-auto"> <h4 class="mb-0">MY ORDERS</h4> </div>
                    
                </div>
            </div>
            <div class="card-body">
             
                <?php
 while($row=mysqli_fetch_assoc($sql)){

    ?>
   <div class="row justify-content-between mb-3">
                    <div class="col-auto"> <h6 class="color-1 mb-0 change-color">Receipt</h6> </div>
                    <div class="col-auto  ">  <small>Delivered In <?php echo $row['DIn'] ?> Days</small>
                
                
                </div>
                </div>
<div class="row mb-2">
                    <div class="col">
                        <div class="card card-2">
                            <div class="card-body">
                                <div class="media">
                                    <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="shopNewAdmin/productImage/<?php echo $row['pimg'] ?>" width="135" height="135" /> </div>
                                    <div class="media-body my-auto text-right">
                                        <div class="row  my-auto flex-column flex-md-row">
                                            <div class="col my-auto"> <h6 class="mb-0"><?php echo $row['pname'] ?></h6>  </div>
                                            <div class="col-auto my-auto"> <small><?php echo $row['paymode'] ?> </small></div>
                                            <div class="col my-auto"> <small>Size : M</small></div>
                                            <div class="col my-auto"> <small>Qty : 1</small></div>
                                            <div class="col my-auto"><h6 class="mb-0">&#8377;<?php echo $row['amount']  ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-3 ">
                                <div class="row">
                                    <div class="col-md-3 mb-3"> <small> Track Order </small> </div>
                                    <div class="col mt-auto">
                                        <div class="progress my-auto "> <div class="progress-bar progress-bar  rounded" style="width: <?php echo 25*$row['ostatus'] ?>%" role="progressbar" aria-valuenow="25" aria-valuemin="0"  aria-valuemax="100"></div> </div>
                                        <div class="media row justify-content-between mt-3 ">
                                            <div class="col-auto text-right"><span> <small  class="text-right mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                                            <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                                            <div class="col-auto flex-col-auto"><small  class="text-right mr-sm-2">Delivered</small><span> <i  class="fa fa-circle"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
}

?>
            <div class="card-footer mt-4">
                <div class="jumbotron-fluid">
                    <div class="row justify-content-between ">
                       
                        <div class="col-auto my-auto "><h2 class="mb-0 font-weight-bold">Thank You For Choosing Shop-e</h2></div>
                     
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>



