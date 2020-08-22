<?php include('../includes/server.php');?>
<?php include('../includes/login_validation.php');?>
<?php include('validation.php');?>
<?php include('ad_header.php');?>
<?php include('ad_nav.php');?>

<script type="text/javascript">
        function post(phone) {
            var Row = document.getElementById(phone);
            var Cells = Row.getElementsByTagName("td");
            var betAmount = (Cells[4].innerText);
            var wphone_no = (Cells[1].innerText);
            var lphone_no = (Cells[3].innerText);   
            $.post('admin_server1.php',{postphone: wphone_no, postamount:betAmount,postphone1:lphone_no},
                function(data)
                   {
                        location.replace('admin.php')
                    
                   });
        }

    </script>

    <script>
    $(document).ready(function() {
        setInterval(function() {
            $("#open_tab_auto").load("winners_table.php");
            refresh();
        }, 1000);
    });
</script>
    




<br>
<br>
<br>
<br>
<br>
<div class="container" id="open_tab_auto">
    
</div>
