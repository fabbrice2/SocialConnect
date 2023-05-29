<?php
$msg = "";
    if (isset($_POST['upload'])) {

        $target = "images/".basename($_FILES['image']['name']);

       $db = mysqli_connect("localhost", "root", "", "membres");

       $image = $_FILES['image']['name'];
       $text = $_POST['text'];

       $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
       mysqli_query($db, $sql);

       if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "succès";
       }else{
        $msg = "erreur";
       }

    }

  // Create database connection
  


?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">


</style>
</head>
<body>
<div id="content">


<?php
     $db = mysqli_connect("localhost", "root", "", "membres");
     $sql = "SELECT * FROM images";
     $result = mysqli_query($db, $sql);
      while($row = mysqli_fetch_array($result)){
        echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['text']."</p>";
        echo "</div>";
      }

?>


  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>