<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Flex Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <!-- Navigation -->
    <div id="nav-placeholder">

    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      $.get("NavBar.php", function(data){
          $("#nav-placeholder").replaceWith(data);
      });
    </script>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        
        <div class="col-lg-3">

          <div class="card mt-4">
            <img width="300" height="420" class="card-img-top" src="https://cdn-static.egybest.net/serve/movies/art-2732945228-x300.jpg" alt="">
            <div class="card-body">
              <h3 class="card-title">Movie Name</h3>
              <!--<div class="card-des" id="rate" onclick="showMsg('fd')"></div>-->
              <div>
                
                <span id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                
                <!-- give privilege for the Admin to delete--> 
                <button class="btn btn-outline-danger col-lg-12" onclick="alert('Delete')">Delete</button>
                <!-- end privilege-->
                
              </div>
            </div>
          </div>
          <!-- /.card  -->
        </div>
        <div class="col-lg-9 pad-top-10">
          <p class="card-text">Your Description here!</p>
        </div>
        <!-- /.col-lg-9 -->

      </div>

      <!--Commment Panel-->
      <div class="row ">
        <div class="col-md-12">
          <div class="comment-wrapper">
            <div class="panel panel-info">
              <div class="panel-heading">
                    Comments
              </div>

              <div class="panel-body">
                <textarea class="form-control" placeholder="write a comment..." rows="3"></textarea>
                <br>
                <button type="button" class="btn btn-outline-primary float-right mr-1" onclick="alert('Post')">Post</button>
                <div class="clearfix"></div>
                  <hr>
                  <ul class="media-list">

                      <!--Comment body-->
                      <li class="media">
                          <a href="Profile.php?id=12" class="float-left">
                              <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                          </a>
                          <div class="media-body">
                              <strong class="text-success">Comment Owner Name</strong>
                              <p>
                                  Comment details </a>.
                              </p>
                          </div>
                      </li>

                  </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Movie Flex 2019</p>
      </div>
      <!-- /.container -->
    </footer>
    

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
  var numberOfLikes = 0;
  initializeRatings();
  function initializeRatings() {

      $('#rate').shieldRating({
          max: 10,
          step: 0.1,
          value: 0,
          markPreset: false
      });
    }
    $(document).ready(function(){

      $("#heart").click(function(){
        if($("#heart").hasClass("liked")){
          numberOfLikes--;
          $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true">' + ' ' + numberOfLikes + '</i> ');
          $("#heart").removeClass("liked");
          alert('Disliked');
        }else{
          numberOfLikes++;
          $("#heart").html('<i class="fa fa-heart" aria-hidden="true">' + ' ' + numberOfLikes + '</i>');
          $("#heart").addClass("liked");
          alert('Liked');
        }
    });
});

</script>

  </body>

</html>


