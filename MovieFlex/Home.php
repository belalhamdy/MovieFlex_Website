<?php include_once("includes/header.php"); ?>

  <body>
    <!-- Navigation -->
    <div id="nav-placeholder"></div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div id = "leftnav-placeholder" class="col-lg-3">
        
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox" id = "lstcarousel">
              <div class="carousel-item active">
                <img class="d-block img-block" width=900 height=300 src="https://www.elfagr.com/upload/photo/news/345/9/600x338o/2.jpg"  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-block" width=900 height=300 src="https://www.elfagr.com/upload/photo/news/345/9/600x338o/2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-block" width=900 height=300 src="https://www.elfagr.com/upload/photo/news/345/9/600x338o/2.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-block" width=900 height=300 src="https://www.elfagr.com/upload/photo/news/345/9/600x338o/2.jpg" alt="Fourth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            <div id = "movies-placeholder"></div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    
    <script src="js/shared.js"></script>
	<script>
	  $.get("includes/LeftNavBar.php", {'category' : 'home'}, function(data){
		  $("#leftnav-placeholder").replaceWith(data)
	  });
	</script>
	<script>
		$.get("includes/MovieBoxes.php", function(data){
		  $("#movies-placeholder").replaceWith(data)
	  });
	</script>
  </body>

</html>
