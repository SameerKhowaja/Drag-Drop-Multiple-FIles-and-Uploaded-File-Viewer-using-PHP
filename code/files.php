<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
	<title>Uploaded Files</title>
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: cadetblue;">

	<div class='container' style="margin-top: 10px;">

		<div class="text-center">
			<a href="index.php"><button id="index" type="button" class="btn btn-primary">Upload More Files</button></a>
		</div>

		<h1 class="text-center title" style="margin-top: 23px;">Your Uploaded File Directory</h1>

		<?php

		$directory = "./uploads";

		if (is_dir($directory)){
			if ($opendirectory = opendir($directory)){
				echo "<table class='table table-hover table-hover' style='background-color: rgb(75, 113, 114); color:white;'>";
				echo "<thead>";
				echo "<tr style='background-color:#0074cc;'>";
				echo "<td>#</td>";
				echo "<td>File Name</td>";
				echo "<td>File Type</td>";
				echo "<td>File Size</td>";
				echo "<td>Last Modified</td>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				$i=0;
				while (($file = readdir($opendirectory)) !== false){
					if ($file != "." && $file != ".."){
						$i+=1;
						$file_type = pathinfo($file, PATHINFO_EXTENSION);
						
						$file_size_number = filesize("uploads/".$file);
						$file_size = $file_size_number." Bytes";
						
						$file_modifytime = date("M j Y g:i A", filemtime("uploads/".$file));
						
						echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>$file</td>";
						echo "<td>$file_type</td>";
						echo "<td>$file_size</td>";
						echo "<td>$file_modifytime</td>";
						echo "</tr>";
						
					}
				
				}
				echo "</tbody>";
				echo "</table>";
				closedir($opendirectory);
			}
		}

		?>
	</div>

</body>

</html>