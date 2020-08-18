<?php include('includes/header.php');?>
<?php include('includes/nav.php');?>
<br>
<br>
<br>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<body>
    <form>
        <input type="text" id="name" placeholder="Name.."><br>
        <input type="text" id="age" placeholder="Age.."><br>
        <input type="button" value="Submit" onclick="post();"><br>

    </form>

    <div id="result">

    </div>
    <script type="text/javascript">
        function post() {
            var name = $('#name').val();
            var age = $('#age').val();

            $.post('validate.php',{postname: name, postage: age},
                function(data)
                   {
                if(data=="1"){
                   $('#result').html("You are over 18");
                }
                if(data=="0"){
                    
                   $('#result').html("You are under 18");
                }
                    
                   });
        }
    </script>
</body>

</html>