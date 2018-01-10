<?php 
include'inc/header.php';
include'core/classes/category.php';
if (!isset($_GET['name']) || $_GET['name'] == ''){
  header("Location:404.php");
}else{
  $catename = $_GET['name'];
}
?>
<div class="container">
<div class="row">
    <div class="col-md-8">
      <?php
      $db = new Category();
      $result = $db->viewCategory($catename);
      if ($result) {
      while ($row = mysqli_fetch_array($result)) {
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
      } } else{ header("Location:404.php");}
      ?>    
    </div>
    

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <form action="search.php" method="get">
            <div class="input-group">
             
              <input type="text" name="search" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit" name="submit" value="search" >Go!</button>
              </span>
             
            </div>
           </form>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <?php
          $query  = $db->getCategory();
          while ($row = mysqli_fetch_array($query)){

          ?>
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="category_page.php?name=<?php echo $row['catename']?>"><?php echo $row['catename']?></a>
                </li>
              </ul>
            </div>
          <!--   <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#"><?php //echo $row['catename']?></a>
                </li>
              </ul>
            </div> -->
          </div>
          <?php 
          }
          ?>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>
  </div>
</div>

<?php include'inc/footer.php';?>