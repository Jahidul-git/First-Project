<?php include'admin_header.php';?>
<?php
  include'../config.php';
  include'../core/classes/db_connect.php';
  include'../core/classes/Post.php';
  
  //post data in database -----
 
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
             if (isset($_POST['submit'])) {
              $data = $_POST;
              $db = new Post();
              $db->setPost($data);
            }
              if(isset($_SESSION['msg']) == null) {
               
              }else{
                 echo $_SESSION['msg'];
              }

            ?>
         <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="headline">Headline</label>
              <input type="text" class="form-control" name="headline" placeholder="Enter Headline">
            </div>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Title">
            </div>
          
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Check me out
              </label>
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