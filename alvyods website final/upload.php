<?php
	ini_set('mysql.connection_timeout', 300);
	ini_set('default_socket_timeout', 300);
	ini_set('upload_max_filesize', 10);
	ini_set('post_max_size', 10);
	ini_set('max_input_time', 300);
	ini_set('max_execution_time', 300);

	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("alvyodsdb",$con);	
	

	$name=$_GET["name"];
	$id=$_GET["id"];


	if ($name="c") {
			
		mysql_query("delete from images where id=$id");

	}
	if ($name="w") {
			
		mysql_query("delete from images where id=$id");
	}
	if ($name="d") {
			
		mysql_query("delete from images where id=$id");
	}
?>

<!DOCTYPE html>
<html>

<body>

<fieldset>
<legend>Upload Images</legend>

	<button style="width: 80px;height: 25px;position: fixed;right: 0;margin-right: 20px;margin-top: -25px" onclick="exit()">Exit</button>
	
	<div class="col-sm-4">
		<form method="post" enctype="multipart/form-data">
		<fieldset>
		<legend>Designs upload</legend>
			<input type="file" id="image" name="image"/>
			<br><br>
			<textarea  cols="20" rows="4" name="descriptionD" placeholder="Add description..."></textarea>
			<br><br>
			<input type="submit" name="submitD1" value="Upload">
			<input type="submit" name="submitD2" value="Display">
		</fieldset>
		</form>
	</div>

	<div class="col-sm-4">

		<form method="post" enctype="multipart/form-data">
		<fieldset>
		<legend>Wardrobe upload</legend>
			<input type="file" id="image" name="image" />
			<br><br>
			<textarea  cols="20" rows="4" name="descriptionW" placeholder="Add description..."></textarea>
			<br><br>
			<input type="submit" name="submitW1" value="Upload">
			<input type="submit" name="submitW2" value="Display">
		</fieldset>
		</form>
	</div>

	<div class="col-sm-4">
		<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Creations upload</legend>
			<input type="file" id="image" name="image" />
			<br><br>
			<textarea  cols="20" rows="4" name="descriptionC" placeholder="Add description..."></textarea>
			<br><br>
			<input type="submit" name="submitC1" value="Upload">
			<input type="submit" name="submitC2" value="Display">
		</fieldset>
		</form>
	</div>
	<br>
	</fieldset>

	<div class="col-sm-4">
		<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Customer Information</legend>
			
			<input type="submit" name="showinfo" value="Show">
			
		</fieldset>
		</form>
	</div>
	<br>

	<script type="text/javascript">
		function exit()
		{
			window.location="index.php"
		}
	</script>

	<?php


		if (isset($_POST['submitD1'])) 
		{


		
	
		$image=$_FILES['image']['name'];

 		 $file = $_FILES['image']['name'];
 



			function saveImageD($name,$image,$desc)
			{
				
				$con=mysql_connect("localhost","root","");
				mysql_select_db("alvyodsdb",$con);
				$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

  				$file = $_FILES['image']['name'];
 

				$qry="insert into images (name,descript,type) values ('$name','$desc','designs')";
				
				$result=mysql_query($qry,$con);
				
				if ($result) {
					
					move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$file) or die(mysql_error());
					echo "<script type='text/javascript'>alert('Image Uploaded');</script>";
					
				}
				else{
					echo "Image not uploaded.";
				}
			}

			

			if (getimagesize($_FILES['image']['tmp_name']) == FALSE) {
				echo 'please select an image.';
				echo "<script type='text/javascript'>alert('in d');</script>";
			}
			else {
				$image=addslashes($_FILES['image']['tmp_name']);
				$name=addslashes($_FILES['image']['name']);
				$desc=$_POST['descriptionD'];
				$image=file_get_contents($image);
				$image=base64_encode($image);
				saveImageD($name,$image,$desc);
			}
		
		}
		if (isset($_POST['submitD2'])) 
		{
			

				echo "Designs Uploaded Images.";
				echo "<br><br>";
				$con=mysql_connect("localhost","root","");
				mysql_select_db("alvyodsdb",$con);

				$qry="select * from images where type='designs' Order By id DESC";

				$result=mysql_query($qry,$con);

				
				$i=0;
				while ($row = mysql_fetch_array($result))
				{
					echo '<form method="">';
					echo "<fieldset>";
					echo "<legend>";
					$i++;
					echo "$i";
					echo "</legend>";
					echo '<img height="300"  src="uploads/'.$row[1].' ">';
					echo "<br><br>";
					echo "Description:";
					echo "$row[2]";	
					echo "<br>";				
					echo "Added on: ";
					echo "$row[4]";
					echo "<br/>";
					?><a href="upload.php?id=<?php echo $row["id"] ?>&name=<?php echo 'd' ?>">Delete Image</a> <?php
					echo "</fieldset>";
					echo "</form>";
					echo "<br>";
				}

				
				mysql_close($con);
			
		}

		

		if (isset($_POST['submitW1'])) 
		{
			
			function saveImageW($name,$image,$desc)
			{
				$con=mysql_connect("localhost","root","");
				mysql_select_db("alvyodsdb",$con);
				$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

  				$file = $_FILES['image']['name'];
 

				$qry="insert into images (name,descript,type) values ('$name','$desc','wardrobe')";
				
				$result=mysql_query($qry,$con);
				
				if ($result) {
					
					move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$file) or die(mysql_error());
					echo "<script type='text/javascript'>alert('Image Uploaded');</script>";
					
				}
				else{
					echo "Image not uploaded.";
				}
			}

			

			if (getimagesize($_FILES['image']['tmp_name'])==FALSE) {
				echo 'please select an image.';
				echo "<script type='text/javascript'>alert('in w');</script>";
				
			}
			else {
				$image=addslashes($_FILES['image']['tmp_name']);
				$name=addslashes($_FILES['image']['name']);
				$desc=$_POST['descriptionW'];
				$image=file_get_contents($image);
				$image=base64_encode($image);
				saveImageW($name,$image,$desc);
				
			}
			
	}
		if (isset($_POST['submitW2'])) 
		{
				echo "Wardrobe Uploaded Images.";
				echo "<br><br>";

				$con=mysql_connect("localhost","root","");
				mysql_select_db("alvyodsdb",$con);

				$qry="select * from images where type='wardrobe' Order By id DESC";

				$result=mysql_query($qry,$con);
				$i=0;
				while ($row = mysql_fetch_array($result))
				{
					echo '<form method="">';
					echo "<fieldset>";
					echo "<legend>";
					$i++;
					echo "$i";
					echo "</legend>";
					echo '<img height="300" src="uploads/'.$row[1].' ">';
					echo "<br><br>";
					echo "Description:";
					echo "$row[2]";	
					echo "<br>";				
					echo "Added on: ";
					echo "$row[4]";
					echo "<br/>";
					?><a href="upload.php?id=<?php echo $row["id"] ?>&name=<?php echo 'w' ?>">Delete Image</a> <?php
					echo "</fieldset>";
					echo "</form>";
					echo "<br>";
				}
				mysql_close($con);
		}

		if (isset($_POST['submitC1'])) 
		{
			
			function saveImageC($name,$image,$desc)
			{
				$con=mysql_connect("localhost","root","");
				mysql_select_db("alvyodsdb",$con);
				$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

  				$file = $_FILES['image']['name'];
 

				$qry="insert into images (name,descript,type) values ('$name','$desc','creations')";
				
				$result=mysql_query($qry,$con);
				
				if ($result) {
					
					move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$file) or die(mysql_error());
					echo "<script type='text/javascript'>alert('Image Uploaded');</script>";
									
				}
				else{
					echo "Image not uploaded.";
				}
			}

			

			if (getimagesize($_FILES['image']['tmp_name'])==FALSE) {
				echo 'please select an image.';
				echo "<script type='text/javascript'>alert('in c');</script>";
			}
			else {
				$image=addslashes($_FILES['image']['tmp_name']);
				$name=addslashes($_FILES['image']['name']);
				$desc=$_POST['descriptionC'];
				$image=file_get_contents($image);
				$image=base64_encode($image);
				saveImageC($name,$image,$desc);
			}		
	}

	if (isset($_POST['submitC2']))
	{
				echo "Creations Uploaded Images.";
				echo "<br><br>";

				$con=mysql_connect("localhost","root","");
				mysql_select_db("alvyodsdb",$con);

				$qry="select * from images where type='creations' Order By id DESC";

				$result=mysql_query($qry,$con);
				$i=0;
				while ($row = mysql_fetch_array($result))
				{
					echo '<form method="">';
					echo "<fieldset>";
					echo "<legend>";
					$i++;
					echo "$i";
					echo "</legend>";
					echo '<img height="300" src="uploads/'.$row[1].'">';
					echo "<br><br>";
					echo "Description:";
					echo "$row[2]";	
					echo "<br>";				
					echo "Added on: ";
					echo "$row[4]";
					echo "<br/>";
					?><a href="upload.php?id=<?php echo $row["id"] ?>&name=<?php echo 'c' ?>">Delete Image</a> <?php
					echo "</fieldset>";
					echo "</form>";
					echo "<br>";
				}

				mysql_close($con);
			
	}

	if (isset($_POST['showinfo'])) 
	{


		function stringEncryption($action, $string){
			  $output = false;
			  
			  $encrypt_method = 'AES-256-CBC';                // Default
			  $secret_key = 'Some#Random_Key!';               // Change the key!
			  $secret_iv = '!IV@_$2';  // Change the init vector!
			  
			  // hash
			  $key = hash('sha256', $secret_key);
			  
			  // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
			  $iv = substr(hash('sha256', $secret_iv), 0, 16);
			  
			  
			  if( $action == 'decrypt' ){
			  		
			  		$output=base64_decode($string);
			      	
			        #$output = openssl_decrypt($string, $encrypt_method, $key, 0, $iv);
			  		
			  }
			  
			  return $output;

		}



		$con=mysql_connect("localhost","root","");
		mysql_select_db("alvyodsdb",$con);


				$qry="select * from customer order by id DESC";

				$result=mysql_query($qry,$con);
				
				$i=0;

				while ($row = mysql_fetch_array($result))
				{
					echo '<form method="">';
					echo "<fieldset>";
					echo "<legend>";
					$i++;
					echo "$i";
					echo "</legend>";
					
					echo "Name: ";
					echo "$row[1]";	
					echo "<br>";				
					
					echo "Place: ";
					echo "$row[2]";	
					echo "<br>";

					echo "Contact: ";
					$decryptedcon = stringEncryption('decrypt', $row[3]);
					echo $decryptedcon;
					
					echo "<br>";

					echo "Mesaage: ";
					echo "$row[4]";	
					echo "<br>";

					echo "Time: ";
					echo "$row[5]";	
					echo "<br>";

					echo "</fieldset>";
					echo "</form>";
					echo "<br>";
				}

				mysql_close($con);

	}

	?>

</body>

</html>