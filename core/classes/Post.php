<?php
	class Post extends Database
	{
		public function setPost($data){
			$headline = $data['headline'];
			$title    = $data['title'];
			$description = $data['description'];
			
			$error = [];
			$file_name 		= $_FILES['image']['name'];
			$tergatefile 	= '../assets/images/'.$file_name;
			$tmp_name 		= $_FILES['image']['tmp_name'];
			$file_size 		= $_FILES['image']['size'];
			$file_type 		= $_FILES['image']['type'];
			$file_ext 		= strtolower(end(explode('.',$file_name)));
			$extention = array('jpg','jpeg','png','gif');
			if ($result = in_array($file_ext,$extention) === false){
				$_SESSION['msg'] = "<div class='alert alert-danger'>Pleace jpg, jpeg, png and gif image insert...</div>";
				return $_SESSION['msg'];
				
			}
			if ($file_size > 1048576) {
				$_SESSION['msg'] = "<div class='alert alert-danger'>Pleace image size is 2mb neaded...</div>";
				return $_SESSION['msg'];
			}
			if (empty($error) == true) {
				$result = move_uploaded_file('."ROOT".','../assets/images/'.$file_name);
			}
			
			if (!empty($headline) or !empty($title) or !empty($description) or !empty($tergatefile))
			{
				$sql = "INSERT INTO blog_post(headline,title,description,image)VALUES('$headline','$title','$description','$tergatefile') ";
				if ($this->db->query($sql)){
						$_SESSION['msg'] = "<div class='alert alert-info'>Post inserted successful...</div>";
						return $_SESSION['msg'];
				}else{
						$_SESSION['msg'] = "<div class='alert alert-danger'>Data insert not successfull...</div>";
						return $_SESSION['msg'];
				}
			}else{
				$_SESSION['msg'] = "<div class='alert alert-danger'>Data field emapty</div>";
						return $_SESSION['msg'];
			}	 
			
		}
		public function getPost(){
			$sql 	= "SELECT * FROM blog_post";
			$query 	= $this->db->query($sql);
			return $query;
		}
		public function detilsPost($id){
			$sql 	= "SELECT * FROM blog_post WHERE id='$id'";
			$query 	= $this->db->query($sql);
			return $query;
		}

		//get post query in database ...........
		public function pagePost($start_data = 0,$per_page=2){
			$sql 	= "SELECT * FROM blog_post LIMIT $per_page OFFSET $start_data";
			$query 	= $this->db->query($sql);
			return $query;
		}

		// Pagination call in php.................
		public function Pagination(){
			$sql 	= "SELECT * FROM blog_post";
			$query 	= $this->db->query($sql);
			$row = mysqli_num_rows($query);
			return $row;
		}

		public function setComment($data){
			$id = $data['postid'];
			$comment = $data['comment'];
			
			$sql = "INSERT INTO comments(post_id,comment)VALUES('$id','$comment')";
			if ($this->db->query($sql)) {
				$_SESSION['msg'] = "<div class='alert alert-success'>Comment insert successfull...</div>";
					return $_SESSION['msg'];
			}else
			{
				$_SESSION['msg'] = "<div class='alert alert-danger'>Comment insert not successfull...</div>";
						return $_SESSION['msg'];
			}
		}
		public function viewComment($id){
			$sql = "SELECT * FROM comments WHERE post_id='$id'";
			$query = $this->db->query($sql);
			return $query;
		}
		public function searchData($search){
			$sql = "SELECT * FROM blog_post WHERE title like '%{$search}%' or description like '%{$search}%'";
			$query = $this->db->query($sql);
			return $query;
		}

	}

?>