<?php include('../includes/server.php');?>
<?php include('../includes/login_validation.php');?>
<?php include('ad_header.php');?>
<?php include('ad_nav.php');?>

<script type="text/javascript">
        function post(phone) {
            var Row = document.getElementById(phone);
            var Cells = Row.getElementsByTagName("td");
            var betAmount = (Cells[1].innerText);
            var phone_no = (Cells[3].innerText);   
            $.post('admin_server.php',{postphone: phone_no, postamount:betAmount},
                function(data)
                   {
                    
                        alert("Go play ludo and come back with this id="+ludo_id)
                        location.replace('admin.php')
                    
                   });
        }
    </script>

    <script>
    $(document).ready(function() {
        setInterval(function() {
            $("#open_tab_auto").load("withdraw_table.php");
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
