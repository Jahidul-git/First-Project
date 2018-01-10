<?php include'admin_header.php';?>
<?php
  include'../config.php';
  include'../core/classes/db_connect.php';
  include'../core/classes/category.php';
  
  //post data in database -----
  if (isset($_POST['submit'])) {
    $data = $_POST;
    $db = new Category();
    $db->setCategory($data);
  }
  
?>
	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Form</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="col-md-8">
            <?php
              if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
              }

            ?>
         <form action="" method="post">
            <div class="form-group">
              <label for="Category">Category</label>
              <input type="text" class="form-control" name="category" placeholder="Enter Category">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
 <?php include'admin_footer.php';?> 