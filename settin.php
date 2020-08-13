<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<br>
<br>
<br>

<div class="container">
    <h2>settings</h2>
    <hr style="height:2px;border-width:0;color:gray;background-color:blue">
    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Change Name</label>
            <div class="col-sm-10">
                <input type="name" class="form-control" id="name" placeholder="Enter new name" name="name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">update</button>
                <form class="form-horizontal" action="/action_page.php">
                    <div></div>
                    <hr style="height:2px;border-width:0;width :100%;color:gray;background-color:blue">
            </div>
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="New password" class="form-control" id="pwd" placeholder="Enter new password" name="pwd">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">

            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">update</button>
            </div>
        </div>
    </form>
</div>



<?php include('includes/bottom_nav.php');?>