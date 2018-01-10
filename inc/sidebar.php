
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
                    <button class="btn btn-secondary" type="submit" value="search" >Go!</button>
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
              $db     = new Category;
              $query  = $db->getCategory();
             while($row = mysqli_fetch_array($query)){
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
                      <a href="#"><?php// echo $row['catename']?></a>
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
      <!-- /.row -->

    </div>
    <!-- /.container -->