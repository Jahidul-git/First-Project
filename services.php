<?php 
include'inc/header.php';
include'core/classes/category.php';

?>

    <div class="container gallery-container">
      	<div class="row">
      	<div class="col-md-8">
    		<h1>Bootstrap 3 Gallery</h1>

    		<p class="page-description text-center">Thumbnails With Title And Description</p>
    
    	<div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a class="lightbox" href="assets/images/park.jpg">
                        <img src="assets/images/park.jpg" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a class="lightbox" href="assets/images/bridge.jpg">
                        <img src="assets/images/bridge.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a class="lightbox" href="assets/images/tunnel.jpg">
                        <img src="assets/images/tunnel.jpg" alt="Tunnel">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a class="lightbox" href="assets/images/coast.jpg">
                        <img src="assets/images/coast.jpg" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include'inc/sidebar.php';?>
<?php include'inc/footer.php';?>