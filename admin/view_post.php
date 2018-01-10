<?php include'admin_header.php';?>
<?php
  include'../config.php';
  include'../core/classes/db_connect.php';
  include'../core/classes/Post.php';
  //view data in database ...........
  $db = new Post();
  $query = $db->getPost();
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Head Line</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($query)) {
                 
                ?>
                <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['headline']?></td>
                  <td><img src="<?php echo $row['image']?>" width="100px" height="100px"></td>
                  <td><?php echo $row['title']?></td>
                  <td><?php echo $row['description']?></td>
                  <td><?php echo $row['date']?></td>
                </tr>
                <?php  
                } 
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include'admin_footer.php'?>