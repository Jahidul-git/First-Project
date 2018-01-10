<?php
	/**
	* Catagori data inserted.......
	*/
	class Category extends Database
	{
		
		public function setCategory($data){
			$category = $data['category'];
			$sql = "INSERT INTO category(catename)VALUES('$category')";
			$result = $this->db->query($sql);
			if($result){
				$_SESSION['msg'] = "<div class='alert alert-success'>Category insert successfull...</div>";
				return $_SESSION['msg'];
			}
			else{
				$_SESSION['msg'] = "<div class='alert alert-success'>Category insert faild...</div>";
				return $_SESSION['msg'];
			}

		}
		// Category view........
		public function getCategory(){
			$sql = "SELECT * FROM category";
			$query = $this->db->query($sql);
			return $query;
		}

		// public function pageCategory($catename){
		// 	$sql = "SELECT * FROM category WHERE catename ='$catename'";
		// 	$query = $this->db->query($sql);
		// 	return $query;
		// }
		public function viewCategory($catename){
			$sql = "SELECT * FROM blog_post WHERE cattype='$catename'";
			$query = $this->db->query($sql);
			return $query;
		}
	}




?>