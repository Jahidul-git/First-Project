<?php
  include'inc/header.php';
  include'core/classes/Post.php';
  include'core/classes/Category.php';

  //select data in database .....
  $db = new Post();

?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <?php
            $id = $_GET['id'];
            $query = $db->detilsPost($id);
            $row = mysqli_fetch_array($query);   
            ?>
          <h1 class="my-4"><?php echo $row['headline']?>
            <small>Secondary Text</small>
          </h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $row['image']?>" width="750px" height="300px" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $row['title']?></h2>
              <p class="card-text"><?php echo $row['description']?></p>
              <a href="index.php" class="btn btn-primary">Break >> &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $row['date']?> by
              <a href="#">Start Bootstrap</a>
            </div>
            
          </div>
            <?php
             if(isset($_POST['submit'])){
                $data = $_POST;
                $db->setComment($data);
             }
            ?>
           <form action="" method="post">
                <div class="form-group">
                  <label></label>
                  <input type="hidden" name="postid" value="<?php echo $row['id']?>">
                </div>
                <div class="form-group">
                  <label for="description">Comments</label>
                  <textarea class="form-control" name="comment" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Comment</button>
            </form>
            <?php
              $id = $row['id'];
              $result = $db->viewComment($id);
              while ($row = mysqli_fetch_array($result)) {
                echo "<div class='Edit_post'><p>";
                echo $row['post_id']."<br>";
                echo $row['date']. "<br>";
                echo $row['comment']."<br>";
                echo "<a href='editcomment.php?id=".$row['id']."'>Edit</a></p></div>";
              }

            ?>
          </div>
          <!-- Blog Post -->
          <!--Pegination-->
<?php include'inc/sidebar.php';?>
<?php include'inc/footer.php';?>
