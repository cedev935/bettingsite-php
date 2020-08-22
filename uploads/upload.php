<?php include("../includes/server.php");?>
<?php
$radioVal = $_POST["match_status"];
$ludo_id = $_POST['ludo_id'];
$ph=$_SESSION['phone_no'];
$user=$_SESSION['user_name'];

if($radioVal == "won")
{
    echo("You won");
    $sql="UPDATE history set winner='$ph' where ludo_id='$ludo_id'";
    mysqli_query($db,$sql);
    $sql="SELECT * from history where ludo_id='$ludo_id'";
    $res=mysqli_query($db,$sql);
    if(mysqli_num_rows($res)==1){
      while($row=mysqli_fetch_assoc($res)){
          $winner=$row['winner'];
          $looser=$row['looser'];
          if($winner!='NULL' and $looser!='NULL'){
              $query2="DELETE from running where player1='$user' or player2='$user'";
              mysqli_query($db,$query2); 
          }
      }
   }
    $target_dir = "won/";
}
else if ($radioVal == "loose")
{
    echo("You lost");
    $sql="UPDATE history set looser='$ph' where ludo_id='$ludo_id'";
    mysqli_query($db,$sql);
    $sql="SELECT winner,looser from history where ludo_id='$ludo_id'";
    $res=mysqli_query($db,$sql);
    if(mysqli_num_rows($res)==1){
      while($row=mysqli_fetch_assoc($res)){
          $winner=$row['winner'];
          $looser=$row['looser'];
          if($winner!='NULL' and $looser!='NULL'){
              $query2="DELETE from running where player1='$user' or player2='$user'";
              mysqli_query($db,$query2); 
          }
      }
   }
    $target_dir = "loose/";
}
else{
    echo("cancel");
    $query2="DELETE from running where player1='$user' or player2='$user'";
    mysqli_query($db,$query2);
    $query1="DELETE from history where ludo_id='$ludo_id' or winner='$ph' or looser='$ph'";
    mysqli_query($db,$query1);
    $target_dir = "cancel/";
}


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$target_file = $target_dir . basename($_SESSION['user_name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 

else {
     $ph=$_SESSION['phone_no'];
    $user=$_SESSION['user_name'];
    
     if ($radioVal =='won'){
        $sql="UPDATE history set winner='$ph' where ludo_id='$ludo_id'";
        mysqli_query($db,$sql);      
      }
  if ($radioVal =='loose'){
        $sql="UPDATE history set looser='$ph' where ludo_id='$ludo_id'";
        mysqli_query($db,$sql);      
      }
    if ($radioVal =='cancel'){
        $query2="DELETE from running where player1='$user' or player2='$user'";
        mysqli_query($db,$query2);
        $query1="DELETE from history where ludo_id='$ludo_id' or winner='$ph' or looser='$ph'";
        mysqli_query($db,$query1); 
      }

   
  
   
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    echo "<script>alert('Uploaded')</script>";
      
      $sql="SELECT winner,looser from history where ludo_id='$ludo_id'";
   $res=mysqli_query($db,$sql);
   if(mysqli_num_rows($res)==1){
      while($row=mysqli_fetch_assoc($res)){
          $winner=$row['winner'];
          $looser=$row['looser'];
          if($winner!='NULL' and $looser!='NULL'){
              $query2="DELETE from running where player1='$user' or player2='$user'";
              mysqli_query($db,$query2); 
              header('location:home.php');
          }
      }
   }

    
  } 
  else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
