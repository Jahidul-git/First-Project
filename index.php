<?php include'inc/header.php';?>
<?php 
  include'core/classes/Post.php';
  include'core/classes/category.php';

  //select data in database .....
  $db = new Post();

?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <?php
            $per_page = 2;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }else{
              $page = 1;
            }
            $start_data = ($page-1) * $per_page;
            $query = $db->pagePost($start_data,$per_page);
              while ($row = mysqli_fetch_array($query)) {
               
            ?>
          <h1 class="my-4"><?php echo $row['headline']?>
            <small>Secondary Text</small>
          </h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $row['image'];?>" width="750px" height="300px" alt="Card image cap">
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
              }
            ?>
            <?php
            $result = $db->Pagination();
            $total_page = ceil($result/$per_page);

            echo "<span class='Pagination'><a href='index.php?page=1'>".'First page'."</a>";
              for ($i=2; $i<$total_page; $i++) { 
                echo "<a href='index.php?page=".$i."'>".$i."</a>";
              }
            echo "<a href='index.php?page=$total_page'>".'Last page'."</a></span>";
            ?>
          <div class="find"> 
            <form action="" method="GET">
            <input type="number" name="page"min="1"max="<?php echo $i ?>">
            <input type="submit" value="Find">
          </form>
        </div>
          </div>
          <!-- Blog Post -->
          <!--Pegination-->

<?php include'inc/sidebar.php';?>
<?php include'inc/footer.php';?>