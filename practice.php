<?php
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DBNAME', 'dbblog');
	class Database
	{
		public $db;
		public function __construct()
		{
			$this->db = new mysqli(HOSTNAME,USERNAME,PASSWORD,DBNAME);
			if (!$this->db) {
					echo "Database is connected";
				}	
		}
		// Data insert in database ------

		public function SetData($data){
			$name =$data['name'];
			$bday = $data['day'].'-'.$data['month'].'-'.$data['year'];

			$file_name = $_FILES['image']['name'];
			$tergatefile = 'images/'.$file_name;
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			$file_ext = strtolower(end(explode('.',$file_name)));  
			$extension = array('jpg','jpeg','png');    

			if (in_array($file_ext,$extension ) === false) {
				echo"image not match";
			}

			if ($file_size > 2097152) {
				echo "image must be 2mb";
			}

			$file_destination = 'images/' . $file_name;
			 // this is false too
			 if(move_uploaded_file($file_temp, $file_destination)) {
			   echo "<br>$file_destination<br>";
			   echo "hello world<br>";
			 }
			 else {
			   echo "<br>file not uploaded<br>";
			 }


			if (!empty($name) or !empty($bday) or !empty($tergatefile)) {
				$sql = "INSERT INTO practice(name,bday,image)VALUES('$name','$bday','$tergatefile')";
				$query = $this->db->query($sql);
				if ($query) {
					echo "Data inserted successfull";
				}else{
					echo "Data not inserted";
				}
			}else{
				echo "Data field emapty";
			}
		}
		// select Data in database -- -- 
		public function getData(){
			$sql = "SELECT * FROM practice";
			$query = $this->db->query($sql);
			return $query;
		}
		// data delete in database ---  --- 
		public $id = $_GET['id'];
		public function delteData(){
			$sql = "DELETE FROM practice WHERE id='$this->id'";
			$query = $this->db->query($sql);
			if ($query) {
				header('location:practice.php');
			}
		}
	}




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (isset($_POST['submit'])) {
			$data = $_POST;
			$db = new Database();
			$db->SetData($data);
		}

	?>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Data of Birth</th>
				<td>
					<select name="day">
						<option>Day</option>
							<?php
								for ($i=01; $i <= 31 ; $i++) { 
									echo '<option>'.$i.'</option>';	
								}
							?>
					</select>
					<select name="month">
						<option>Month</option>
						<?php
						$month_names = array("january", "february", "marcs", "april", "may", "jun", "july", "august", "september", "oktober", "november", "december");

						for ($i=0; $i<12; $i++) {
						    echo "<option ";
						    if ($i == $month_names['0']) {
						    	//echo "selected=\"selected\" ";
						    }
						    echo "value=\"$month_names[$i]\">", $month_names[$i-0], "</option>\n";
}
						?>
					</select>
					<select name="year">
						<option>Year</option>
						<?php
							for ($i=1970; $i <= 2017 ; $i++) { 
								echo '<option>'.$i.'</option>';
							}

						?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Images</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
	<div class="wrapper">
		<table border='1'>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Data of Birth</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
			<?php
				$db = new Database();
				$query = $db->getData();
				$i = 1;
				while ($row = mysqli_fetch_array($query)) {
				
			?>
			<tr>
				<td><?php echo $i++?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['bday']?></td>
				<td><img src="<?php echo $row['image']?>" width="100px" height="100px"></td>
				<td><a href="practice .php?id=<?php echo $row['id']?>">Delete</a></td>
			</tr>
			<?php 	
				}
			?>
		</table>
		<?php
			// $id = $_GET['id'];
			// $db->deleteData($id);
		?>
		
	</div>
</body>
</html>