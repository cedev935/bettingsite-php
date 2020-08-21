<?php include('includes/server.php');?>
<?php include('includes/login_validation.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<br>
<br>
<br>

<div class="container">
    <h2>settings</h2>
    <hr style="height:2px;border-width:0;color:grey;background-color:grey">
    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Change Name</label>
            <div class="col-sm-10">
                <input type="name" class="form-control" id="name" placeholder="Enter new name" name="name">
            </div>
            <div class="col-sm-offset-2 col-sm-10 text-right">
                   <br>
                    <button type="submit" class="btn btn-success">update</button>
                    <hr style="height:2px;border-width:0;width :100%;color:grey;background-color:grey">
            </div>
            
        </div>
        <div class="form-group">
            
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="New password" class="form-control" id="pwd" placeholder="Enter new password" name="pwd">
            </div>
            <div class="col-sm-offset-2 col-sm-10 text-right">
                   <br>
                    <button type="submit" class="btn btn-success">update</button>
                    <hr style="height:2px;border-width:0;width :100%;color:grey;background-color:grey">
            </div>
        </div>
        
    </form>
</div>



<?php include('includes/bottom_nav.php');?>
