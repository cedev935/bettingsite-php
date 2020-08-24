<?php 
    $phone_no=$_SESSION['phone_no'];
    $noofchips="SELECT chips from chips where user='$phone_no'";
    $res=mysqli_query($db,$noofchips);
 ?>
    <footer class="my-footer bg-light" >

	<div class="row" style="background:#82f5f5; padding:5px;">
		<div class="col-4 text-center" onclick="location.href='razor/';">
			
			<br><?php 
                                if(mysqli_num_rows($res)==1){
                                    while($row=mysqli_fetch_assoc($res)){
                                        echo $row['chips'];
                                    }
                                }
                                ?><small> Tokens</small>
		</div>
		<div class="col-4 text-center" onclick="location.href='home.php';">
			<span class="spinImg" style="font-size: 21px;">🎲</span>
			<br> <small><?php echo $_SESSION['user_name'];?></small>
		</div>
		<div class="col-4 text-center" onclick="location.href='transaction.php';">
			<p>
				<img src="resources/history.png" alt="" height="25px" width="25px">
				<!-- <i style="font-size:21px;" class="glyphicon glyphicon-list"></i> -->
				<br><small>History</small></p>
		</div>
	</div>
</footer>
</body>

</html>