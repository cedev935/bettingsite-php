<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<?php 
    $phone_no=$_SESSION['phone_no'];
    $noofchips="SELECT chips from chips where user='$phone_no'";
    $res=mysqli_query($db,$noofchips);
 ?>
<br>
 <br>
 <br>
	 <div class="container" style="margin-top: 35px;">
        <div class="row" >
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header with box-default">
                        <h2 class="text-center">
                            <strong>Current Balance</strong><br><hr>
                            <span class="text-success ng-binding">
				<?php 
                                if(mysqli_num_rows($res)==1){
                                    while($row=mysqli_fetch_assoc($res)){
                                        echo $row['chips'];
                                    }
                                }
                                ?>
			    </span><br>
                            <small>Chips</small><br><br>
                        </h2>
                    </div>
                    <div class="box-header with-border" style="background-color: #f5f5f5">
                        <strong class="box-title" style="font-size: 18px;">Recents: </strong>
                        <i class="fa fa-filter pull-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>    
<?php include('includes/bottom_nav.php');?>
