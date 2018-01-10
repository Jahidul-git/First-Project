<?php 
include'inc/header.php';
include'core/classes/Post.php';
include'core/classes/category.php';
?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <?php 
          if(isset($_GET['search'])){
          $search = $_GET['search'];
          $db = new Post();
          $query = $db->searchData($search);
          if($query){

          while ($row = mysqli_fetch_assoc($query)) {
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
              <a href="view_detils.php?id=<?php echo $row['id']?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $row['date']?> by
              <a href="#">Start Bootstrap</a>
            </div>
            
          </div>
          <?php
              } }
            ?><?php  
          }?>
          </div>
          <!-- Blog Post -->
          <!--Pegination-->
<?php include'inc/sidebar.php';?>
<?php include'inc/footer.php';?>